const addAllExperiencesCareersForm = () => {
    const allCompanies = document.querySelectorAll('.company');
    const allDurations = document.querySelectorAll('.duration');

    if (allCompanies && allDurations) {

        allCompanies.forEach(company => {
            company.addEventListener('blur', (e) => {
                e.preventDefault(); 
                e.stopPropagation(); 
                e.stopImmediatePropagation(); 
    
                const experienceId = e.target.parentElement.parentElement.getAttribute('data-experience-id'); 
                const companyValue = e.target.value;
    
                if (experienceId !== null) {
                    setCompanyToExistingExperience(experienceId, companyValue);
                    return;
                }
    
                if (companyValue !== '') {
                    let durationElement = '';
                    let durationElementValue = '';
    
                    if (e.target.parentElement.nextElementSibling.classList.contains('d-flex-end')) { // new row
                        durationElement = e.target.parentElement.nextElementSibling;
                        durationElementValue = durationElement.children[0].children[1].value;
                    } else {
                        durationElement = e.target.parentElement.nextElementSibling;
                        durationElementValue = durationElement.children[1].value;
                    }
    
                    const deleteExperienceButton = durationElement.lastElementChild;
    
                    let experienceData = {
                        id: uuid(),
                        company: companyValue,
                        duration: durationElementValue
                    };
    
                    setExperiencesToLS(experienceData);
    
                    if (deleteExperienceButton !== null && deleteExperienceButton.tagName == 'BUTTON') {
                        deleteExperienceButton.setAttribute('data-experience-id', experienceData.id);
                    }
    
                    e.target.parentElement.parentElement.setAttribute('data-experience-id', experienceData.id);
    
                    fillOutAllExperiencesInput();
                }
    
            });
        });
    
        allDurations.forEach(duration => {
            duration.addEventListener('blur', (e) => {
                e.preventDefault(); 
                e.stopPropagation(); 
                e.stopImmediatePropagation();
                let experienceId;
    
                if (e.target.parentElement.classList.contains('flex-1')) {
                    experienceId = e.target.parentElement.parentElement.parentElement.getAttribute('data-experience-id'); 
                } else {
                    experienceId = e.target.parentElement.parentElement.getAttribute('data-experience-id'); 
                }
    
    
                const durationValue = e.target.value;
    
                if (experienceId !== null) {
                    setDurationToExistingExperience(experienceId, durationValue);
                    return;
                }
    
                if (durationValue !== '') {
                    let companyElement = '';
                    let companyElementValue = '';
                    let deleteExperienceButton;
    
                    if (e.target.parentElement.classList.contains('flex-1')) { // new row
                        companyElement = e.target.parentElement.parentElement.previousElementSibling;
                        companyElementValue = companyElement.children[1].value;
                        deleteExperienceButton = e.target.parentElement.parentElement.lastElementChild;
    
                    } else {
                        companyElement = e.target.parentElement.previousElementSibling;
                        companyElementValue = companyElement.children[1].value;
                        deleteExperienceButton = e.target.parentElement.lastElementChild;
    
                    }
                    
    
                    let experienceData = {
                        id: uuid(),
                        company: companyElementValue,
                        duration: durationValue
                    };
    
                    setExperiencesToLS(experienceData);
    
                    if (deleteExperienceButton !== null && deleteExperienceButton.tagName == 'BUTTON') {
                        deleteExperienceButton.setAttribute('data-experience-id', experienceData.id);
                    }
    
                    if (e.target.parentElement.classList.contains('flex-1')) { // new row
                        e.target.parentElement.parentElement.parentElement.setAttribute('data-experience-id', experienceData.id);
                    } else {
                        e.target.parentElement.parentElement.setAttribute('data-experience-id', experienceData.id);
                    }
    
    
                    fillOutAllExperiencesInput();
                }
    
            });
        });
    }


}

const setExperiencesToLS = companyObj => {
    let experiencesArray = [];
    const experiencesFromLS = JSON.parse(localStorage.getItem('allExperiences'));

    if (experiencesFromLS !== null && experiencesFromLS.length > 0) {
        experiencesFromLS.push(companyObj);
        localStorage.setItem('allExperiences', JSON.stringify(experiencesFromLS));
        return;
    }

    experiencesArray.push(companyObj);
    localStorage.setItem('allExperiences', JSON.stringify(experiencesArray));

}

const fillOutAllExperiencesInput = () => {
    const allExperiencesFromLS = JSON.parse(localStorage.getItem('allExperiences'));
    let allExperiencesStringFormat = '';

    allExperiencesFromLS.forEach(expLS => {
        allExperiencesStringFormat += `
            <tr>
                <td style="padding: 0 15px 0 0;">${expLS.company}</td>
                <td style="padding: 0 15px;">${expLS.duration}</td>
            </tr>
        `;
    });

    document.getElementById('allExperiences').value = allExperiencesStringFormat.trim(); 
}

const uuid = () => {
  return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
    var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
    return v.toString(16);
  });
}

const setCompanyToExistingExperience = (experienceId, companyValue) => {
    const allExperiencesFromLS = JSON.parse(localStorage.getItem('allExperiences'));
    const existingExperience = allExperiencesFromLS.find(allExp => allExp.id === experienceId);
    existingExperience.company = companyValue;

    localStorage.setItem('allExperiences', JSON.stringify(allExperiencesFromLS));

    fillOutAllExperiencesInput();
}

const setDurationToExistingExperience = (experienceId, durationValue) => {
    const allExperiencesFromLS = JSON.parse(localStorage.getItem('allExperiences'));
    const existingExperience = allExperiencesFromLS.find(allExp => allExp.id === experienceId);
    existingExperience.duration = durationValue;

    localStorage.setItem('allExperiences', JSON.stringify(allExperiencesFromLS));

    fillOutAllExperiencesInput();
}

const removeAllExperiencesFromLS = () => {
    const allExperiencesFromLS = JSON.parse(localStorage.getItem('allExperiences'));
    if (allExperiencesFromLS !== null && allExperiencesFromLS.length > 0) {
        localStorage.removeItem('allExperiences');
    }
}

export { addAllExperiencesCareersForm, fillOutAllExperiencesInput, removeAllExperiencesFromLS };