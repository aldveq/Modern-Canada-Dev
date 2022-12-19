const selectMultiCheckboxesRfcForm = () => {
    const doc = document;
    const checkboxesBtn = doc.getElementById('multi-checkboxes-btn'); 
    const checkEmailMoreInfo = doc.getElementById('checkEmailMoreInfo');
    const checkCallMoreInfo = doc.getElementById('checkCallMoreInfo');
    const checkTextMoreInfo = doc.getElementById('checkTextMoreInfo');
    const isFrenchPage = modern_main_data.is_french_page;

    if (checkboxesBtn) {
        checkboxesBtn.addEventListener('click', e => {
            e.preventDefault();
            const target = e.target;
            
            if ( ((target.textContent).toLowerCase()).trim() === 'select all' || ((target.textContent).toLowerCase()).trim() === 'sélectionner tous' ) {
                
                checkEmailMoreInfo.checked = true;
                checkCallMoreInfo.checked = true;
                checkTextMoreInfo.checked = true;

                if (isFrenchPage !== undefined && isFrenchPage !== '') {
                    isFrenchPage === 'fr' ? target.textContent = 'Tout déselectionner' : target.textContent = 'Deselect All'; 
                }

            } else {

                checkEmailMoreInfo.checked = false;
                checkCallMoreInfo.checked = false;
                checkTextMoreInfo.checked = false;

                if (isFrenchPage !== undefined && isFrenchPage !== '') {
                    isFrenchPage === 'fr' ? target.textContent = 'Sélectionner tous' : target.textContent = 'Select All';
                }
            
            }

        })
    }
}

export default selectMultiCheckboxesRfcForm;