import { isFrenchPage } from '../components/career-application-form';

const UnitTerritoryDisclaimerCheckbox = () => {
    if(document.querySelector('span.UFTFTermsAndConditionsCheckbox')) {
        
        if(isFrenchPage()) {
            setUpFrenchDisclaimer();
        } else {
            setUpEnglishDisclaimer();
        }

    }
}

const setUpFrenchDisclaimer = () => {
    document.querySelector('span.UFTFTermsAndConditionsCheckbox').innerHTML = `J'ai lu et j'accepte les <span class="unit-territory-franchise-terms-conditions">conditions générales</span>`;
    setTimeout(enableDisclaimerPopup, 500);
}

const setUpEnglishDisclaimer = () => {
    document.querySelector('span.UFTFTermsAndConditionsCheckbox').innerHTML = `I have read and accept the <span class="unit-territory-franchise-terms-conditions">Terms & Conditions</span>`;
    setTimeout(enableDisclaimerPopup, 500);
}

const enableDisclaimerPopup = () => {
    document.querySelector('span.unit-territory-franchise-terms-conditions').addEventListener('click', () => {
        $('#disclaimerUnitTerritoryFranchiseModal').modal('show');
    })
}

export default UnitTerritoryDisclaimerCheckbox;