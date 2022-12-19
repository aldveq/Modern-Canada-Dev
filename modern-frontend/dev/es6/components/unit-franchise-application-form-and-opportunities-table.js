import { isFrenchPage } from './career-application-form';

const unitFranchiseSingleAndGroupOpportunities = () => {
   window.buildSingleOpportunity = function (element, event) {
       event.preventDefault();

       const opportunityId = element.getAttribute('data-opportunity-id');
       const opportunityLocation = element.getAttribute('data-opportunity-location');

       const singleOpportunityObj = {
            opportunityId,
            opportunityLocation
       }

       localStorage.setItem('singleOpportunity', JSON.stringify(singleOpportunityObj));
       removeGroupOfOpportunities();

       window.location.href = element.getAttribute('href');
   }

   if (document.getElementById('general-unit-franchise-application-button')) {
       document.getElementById('general-unit-franchise-application-button').addEventListener('click', goToUnitFranchiseApplicationForm);
   }

   if (document.getElementById('closeNotificationSingleOpportunity')) {
        document.getElementById('closeNotificationSingleOpportunity').addEventListener('click', () => {
            $('#singleOpportunityAlert').alert('close');
            removeSingleOpportunity();
        });
   }

   if (document.getElementById('closeNotificationGroupOfOpportunities')) {
        document.getElementById('closeNotificationGroupOfOpportunities').addEventListener('click', () => {
            $('#groupOpportunityAlert').alert('close');
            removeGroupOfOpportunities();
        });
    }

   checkboxMultiOpportunityDesktop();
   checkboxMultiOpportunityMobile();

   verifyOpportunitiesOnLocalStorageToDisplayAlert();
   verifyLocalStorageToPopulateOpportunitiesFields();
}

const goToUnitFranchiseApplicationForm = e => {

    e.preventDefault();
    const urlDestination = e.target.getAttribute('href');

    const allOpportunitiesDesktop = Array.from(document.querySelectorAll('.checkbox-multi-opportunity-desktop'));
    const allOpportunitiesMobile = Array.from(document.querySelectorAll('.checkbox-multi-opportunity-mobile'));

    const allSelectedOpportunitiesDesktop = getAllSelectedOpportunities(allOpportunitiesDesktop);
    const allSelectedOpportunitiesMobile = getAllSelectedOpportunities(allOpportunitiesMobile);

    if (allSelectedOpportunitiesDesktop.length > 0 && window.matchMedia('(min-width: 768px)').matches) { // desktop
        prepareAllSelectedOpportunitiesDataDesktop(allSelectedOpportunitiesDesktop, urlDestination);
    } else if(allSelectedOpportunitiesMobile.length > 0 && window.matchMedia('(max-width: 767px)').matches) { // mobile
        prepareAllSelectedOpportunitiesDataMobile(allSelectedOpportunitiesMobile, urlDestination);
    } else {
        removeSingleOpportunity();
        removeGroupOfOpportunities();
        window.location.href = urlDestination;
    }

}

const prepareAllSelectedOpportunitiesDataDesktop = (allPraparedOpportunitesData, urlDestination) => {

    let opportunityId = '';
    let opportunityLocation = '';
    let opportunityObj = {};
    let multipleOpportunitiesArray = [];

    allPraparedOpportunitesData.forEach(preparedData => {
        opportunityId = (preparedData.parentElement.parentElement.nextElementSibling).textContent;
        opportunityLocation = (preparedData.parentElement.parentElement.nextElementSibling.nextElementSibling).textContent;
        opportunityObj = {
            opportunityId,
            opportunityLocation
        }
        multipleOpportunitiesArray.push(opportunityObj);
    })

    multipleOpportunitiesToLocalStorage(multipleOpportunitiesArray, urlDestination);

}

const prepareAllSelectedOpportunitiesDataMobile = (allPraparedOpportunitesData, urlDestination) => {

    let opportunityId = '';
    let opportunityLocation = '';
    let opportunityObj = {};
    let multipleOpportunitiesArray = [];

    allPraparedOpportunitesData.forEach(preparedData => {
        opportunityId = (preparedData.parentElement.previousElementSibling.previousElementSibling.previousElementSibling).textContent;
        opportunityLocation = (preparedData.parentElement.previousElementSibling.previousElementSibling).textContent;
        opportunityObj = {
            opportunityId,
            opportunityLocation
        }
        multipleOpportunitiesArray.push(opportunityObj);
    })

    multipleOpportunitiesToLocalStorage(multipleOpportunitiesArray, urlDestination);

}

const multipleOpportunitiesToLocalStorage = (opportunitiesSelected, urlDestination) => {
    localStorage.setItem('groupOpportunities', JSON.stringify(opportunitiesSelected));

    removeSingleOpportunity();

    setTimeout(() => {
        window.location.href = urlDestination;
    }, 500);
}

const getAllSelectedOpportunities = allCheckboxes => {
    const allSelectedCheckboxes = allCheckboxes.filter(allChecked => allChecked.checked == true);
    return allSelectedCheckboxes;
}

const verifyOpportunitiesOnLocalStorageToDisplayAlert = () => {
    const singleOpportunity = JSON.parse(localStorage.getItem('singleOpportunity'));
    const groupOpportunities = JSON.parse(localStorage.getItem('groupOpportunities'));

    // Single Opportunity
    if (singleOpportunity !== null && singleOpportunity !== undefined) {
        
        if (document.getElementById('singleOpportunityLocation') && singleOpportunity.opportunityLocation !== '') {

            if (isFrenchPage()) {
                document.getElementById('singleOpportunityLocation').innerHTML = `Hé, félicitations! Vous avez sélectionné une opportunité de franchise unique située au <strong>${singleOpportunity.opportunityLocation}</strong> Veuillez remplir le formulaire ci-dessous pour poursuivre votre demande ou fermer cette notification afin de remplir une demande de franchise d'unité générale.`
            } else {
                document.getElementById('singleOpportunityLocation').innerHTML = `Hey, congratulations! You've selected a single unit franchise opportunity located in <strong>${singleOpportunity.opportunityLocation}</strong> Please, fill out the form below to continue with your application or close this notification in order to complete a general unit franchise application.`;
            }
    
            setTimeout(() => {
                $('#singleOpportunityAlert').alert();
            }, 500);

        } else {
            $('#singleOpportunityAlert').alert('close');
        }
    } else {
        $('#singleOpportunityAlert').alert('close');
    }

    // Group of opportunities
    if ((groupOpportunities !== null && groupOpportunities !== undefined) && groupOpportunities.length > 0) {

        const stringGroupOpportunities = getStringGroupOpportunities(groupOpportunities);
        
        if (document.getElementById('groupOpportunityLocation')) {

            if (isFrenchPage()) {
                document.getElementById('groupOpportunityLocation').innerHTML = `Hé, félicitations! Vous avez sélectionné un groupe d'opportunités de franchise d'unités situées dans <strong>${stringGroupOpportunities}</strong> Veuillez remplir le formulaire ci-dessous pour poursuivre votre demande ou fermer cette notification afin de remplir une demande de franchise d'unité générale.`;
            } else {
                document.getElementById('groupOpportunityLocation').innerHTML = `Hey, congratulations! You've selected a group of unit franchise opportunities located in <strong>${stringGroupOpportunities}</strong> Please, fill out the form below to continue with your application or close this notification in order to complete a general unit franchise application.`;
            }
            
    
            setTimeout(() => {
                $('#groupOpportunityAlert').alert();
            }, 500);

        } else {
            $('#groupOpportunityAlert').alert('close');
        }
    } else {
        $('#groupOpportunityAlert').alert('close');
    }
}

const verifyLocalStorageToPopulateOpportunitiesFields = () => {
    const singleOpportunityFRLS = JSON.parse(localStorage.getItem('singleOpportunity'));
    const groupOfOpportunitiesFRLS = JSON.parse(localStorage.getItem('groupOpportunities'));

    if ((singleOpportunityFRLS !== null && singleOpportunityFRLS !== undefined) && (document.getElementById('singleOpportunityIDField') && document.getElementById('singleOpportunityLocationField'))) {
        document.getElementById('singleOpportunityIDField').value = singleOpportunityFRLS.opportunityId;
        document.getElementById('singleOpportunityLocationField').value = singleOpportunityFRLS.opportunityLocation;
    }

    if ((groupOfOpportunitiesFRLS !== null && groupOfOpportunitiesFRLS !== undefined) && (groupOfOpportunitiesFRLS.length > 0 && document.getElementById('groupOpportunitiesField'))) {
        const stringGroupOpportunitiesToTextArea = getStringGroupOpportunitiesToTextArea(groupOfOpportunitiesFRLS);
        
        document.getElementById('groupOpportunitiesField').textContent = stringGroupOpportunitiesToTextArea.trim();
    }
}

const getStringGroupOpportunitiesToTextArea = groupOfOpportunities => {
    let formattedSingleGroupOpportunity = '';

    groupOfOpportunities.forEach(grOpp => {
        formattedSingleGroupOpportunity += `${grOpp.opportunityId} ${grOpp.opportunityLocation}, `;
    })

    return formattedSingleGroupOpportunity;

}

const getStringGroupOpportunities = groupOpportunitiesArray => {
    let resultStringGroupOpportunities = '';

    groupOpportunitiesArray.forEach((strOpp, index) => {
        resultStringGroupOpportunities += `${index + 1}. ${strOpp.opportunityLocation}. `;
    })

    return resultStringGroupOpportunities;
}

const checkboxMultiOpportunityDesktop = () => {
    const checkboxMultipleOpportunity = Array.from(document.querySelectorAll('.checkbox-multi-opportunity-desktop'));

    checkboxMultipleOpportunity.forEach(oppCheck => {
        oppCheck.addEventListener('change', e => {
            e.stopPropagation();
            e.stopImmediatePropagation();
            
            if ( isAnyDesktopCheckboxChecked() ) {
                disableApplyNowDesktopButton();
            } else {
                enableApplyNowDesktopButton();
            }

        })
    })
}

const isAnyDesktopCheckboxChecked = () => {
    const checkboxMultipleOpportunityDesktop = Array.from(document.querySelectorAll('.checkbox-multi-opportunity-desktop'));
    let boolResult = false;
    let i = 0;

    for (i; i < checkboxMultipleOpportunityDesktop.length; i++) {
        if( checkboxMultipleOpportunityDesktop[i].checked == true ) {
            boolResult = true;
            break;
        }
    }

    return boolResult;
}

const disableApplyNowDesktopButton = () => {
    const allApplyButtonDesktop = Array.from(document.querySelectorAll('.apply-button-desktop'));

    allApplyButtonDesktop.forEach(btnDesk => {
        btnDesk.classList.add('disabled');
    });
}

const enableApplyNowDesktopButton = () => {
    const allApplyButtonDesktop = Array.from(document.querySelectorAll('.apply-button-desktop'));

    allApplyButtonDesktop.forEach(btnDesk => {
        btnDesk.classList.remove('disabled');
    });
}

const checkboxMultiOpportunityMobile = () => {
    const checkboxMultipleOpportunity = Array.from(document.querySelectorAll('.checkbox-multi-opportunity-mobile'));

    checkboxMultipleOpportunity.forEach(oppCheck => {
        oppCheck.addEventListener('change', e => {
            e.stopPropagation();

            if (isAnyMobileCheckboxChecked()) {
                disableApplyNowMobileButton();
            } else {
                enableApplyNowMobileButton();
            }

        })
    })
}

const isAnyMobileCheckboxChecked = () => {
    const checkboxMultipleOpportunityMobile = Array.from(document.querySelectorAll('.checkbox-multi-opportunity-mobile'));
    let boolResultMobile = false;
    let i = 0;

    for (i; i < checkboxMultipleOpportunityMobile.length; i++) {
        if( checkboxMultipleOpportunityMobile[i].checked == true ) {
            boolResultMobile = true;
            break;
        }
    }

    return boolResultMobile;
}

const disableApplyNowMobileButton = () => {
    const allApplyButtonMobile = Array.from(document.querySelectorAll('.apply-button-mobile'));

    allApplyButtonMobile.forEach(btnDesk => {
        btnDesk.classList.add('disabled');
    });
}

const enableApplyNowMobileButton = () => {
    const allApplyButtonMobile = Array.from(document.querySelectorAll('.apply-button-mobile'));

    allApplyButtonMobile.forEach(btnDesk => {
        btnDesk.classList.remove('disabled');
    });
}

const removeGroupOfOpportunities = () => {
    const groupOfOpportunitiesInLS = JSON.parse(localStorage.getItem('groupOpportunities'));

    if ((groupOfOpportunitiesInLS !== null && groupOfOpportunitiesInLS !== undefined) && groupOfOpportunitiesInLS.length > 0) {
        localStorage.removeItem('groupOpportunities');
        cleanHiddenOpportunitiesFields();
    }
}

const removeSingleOpportunity = () => {
    const singleOpportunityInLS = JSON.parse(localStorage.getItem('singleOpportunity'));

    if (singleOpportunityInLS !== null && singleOpportunityInLS !== undefined) {
        localStorage.removeItem('singleOpportunity');
        cleanHiddenOpportunitiesFields();
    }
}

const cleanHiddenOpportunitiesFields = () => {
    if (document.getElementById('singleOpportunityIDField') && document.getElementById('singleOpportunityLocationField')) {
        document.getElementById('singleOpportunityIDField').value = '';
        document.getElementById('singleOpportunityLocationField').value = '';
    }

    if (document.getElementById('groupOpportunitiesField')) {
        document.getElementById('groupOpportunitiesField').textContent = '';
    }
} 

export { unitFranchiseSingleAndGroupOpportunities, removeSingleOpportunity, removeGroupOfOpportunities };