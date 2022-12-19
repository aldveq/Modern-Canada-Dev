const selectsFormValidate = () => {
    const doc = document;
    
    const selectChannel = doc.getElementById('channel_hear_about_us');
    if(selectChannel){
        selectChannel.addEventListener('change', (event) => {
            if(event.target.value === "Modern Franchisee" || event.target.value === "other"){
                var input = doc.getElementById('other-input-channel');
                input.classList.remove('d-none');
            }else if(event.target.value !== "Modern Franchisee" || event.target.value !== "other"){
                var input = doc.getElementById('other-input-channel');
                input.classList.add('d-none');
            }
        });
    }

    const selectRelativeInBusiness = doc.getElementById('preferredAreaRelativeInBusiness');
    if (selectRelativeInBusiness) {
        const selectRelativeInBusinessDetails = doc.getElementById('preferredAreaRelativeInBusinessDetails');
        selectRelativeInBusiness.addEventListener('change', (event) => {
            if (event.target.value === "If yes, please be specific and provide details" || event.target.value === "Si oui, veuillez être précis et fournir des détails") {
                selectRelativeInBusinessDetails.setAttribute('required', true);
                selectRelativeInBusinessDetails.parentElement.classList.remove('d-none');
            } else {
                selectRelativeInBusinessDetails.removeAttribute('required');
                selectRelativeInBusinessDetails.parentElement.classList.add('d-none');
            }
        });
    }

    const selectSoleIncomeSource = doc.getElementById('preferredAreaSoleIncomeSource');
    if (selectSoleIncomeSource) {
        const selectSoleIncomeSourceExplain = doc.getElementById('preferredAreaSoleIncomeSourceExplain');
        selectSoleIncomeSource.addEventListener('change', (event) => {
            if (event.target.value === "If no, please explain" || event.target.value === "Si non, veuillez expliquer") {
                selectSoleIncomeSourceExplain.setAttribute('required', true);
                selectSoleIncomeSourceExplain.parentElement.classList.remove('d-none');
            } else {
                selectSoleIncomeSourceExplain.removeAttribute('required');
                selectSoleIncomeSourceExplain.parentElement.classList.add('d-none');
            }
        });
    }

    const selectLawsuit = doc.getElementById('preferredAreaLawsuit');
    if (selectLawsuit) {
        const selectLawsuitMoreInfo = doc.getElementById('preferredAreaLawsuitMoreInfo');
        selectLawsuit.addEventListener('change', (event) => {
            if (event.target.value === "Yes, provide more information:" || event.target.value === "Oui, fournir plus d'informations") {
                selectLawsuitMoreInfo.setAttribute('required', true);
                selectLawsuitMoreInfo.parentElement.classList.remove('d-none');
            } else {
                selectLawsuitMoreInfo.removeAttribute('required');
                selectLawsuitMoreInfo.parentElement.classList.add('d-none');
            }
        });
    }
     
    const selectConvicted = doc.getElementById('preferredAreaConvicted');
    if (selectConvicted) {
        const selectConvictedExplain = doc.getElementById('preferredAreaConvictedExplain');
        selectConvicted.addEventListener('change', (event) => {
            if (event.target.value === "Yes, explain:" || event.target.value === "Oui, veuillez expliquer") {
                selectConvictedExplain.setAttribute('required', true);
                selectConvictedExplain.parentElement.classList.remove('d-none');
            } else {
                selectConvictedExplain.removeAttribute('required');
                selectConvictedExplain.parentElement.classList.add('d-none');
            }
        });
    }

    const selectBankruptcy = doc.getElementById('preferredAreaBankruptcy');
    if (selectBankruptcy) {
        const selectBankruptcyDateFiled = doc.getElementById('preferredAreaBankruptcyDateFiled');
        const selectBankruptcyDateDischarged = doc.getElementById('preferredAreaBankruptcyDateDischarged');

        selectBankruptcy.addEventListener('change', (event) => {
            if (event.target.value === "Yes" || event.target.value === "Oui") {
                selectBankruptcyDateFiled.setAttribute('required', true);
                selectBankruptcyDateDischarged.setAttribute('required', true);
                selectBankruptcyDateFiled.parentElement.classList.remove('d-none');
                selectBankruptcyDateDischarged.parentElement.classList.remove('d-none');
            } else {
                selectBankruptcyDateFiled.removeAttribute('required');
                selectBankruptcyDateDischarged.removeAttribute('required');
                selectBankruptcyDateFiled.parentElement.classList.add('d-none');
                selectBankruptcyDateDischarged.parentElement.classList.add('d-none');
            }
        });
    }

    const selectSpoken = doc.getElementById('spokenLanguage');
    if(selectSpoken){
        selectSpoken.addEventListener('change', (event) => {
            if(event.target.value === "other"){
                var inputspoken = doc.getElementById('other-input-spoken');
                inputspoken.classList.remove('d-none');
            }else if(event.target.value !== "other"){
                var inputspoken = doc.getElementById('other-input-spoken');
                inputspoken.classList.add('d-none');
            }
        });
    }
        

    const selectwhitten = doc.getElementById('whitten');
    if(selectwhitten){
        selectwhitten.addEventListener('change', (event) => {
            if(event.target.value === "other"){
                var inputspoken = doc.getElementById('other-input-whitten');
                inputspoken.classList.remove('d-none');
            }else if(event.target.value !== "other"){
                var inputspoken = doc.getElementById('other-input-whitten');
                inputspoken.classList.add('d-none');
            }
        });
    }

    const selectRelocate = doc.getElementById('relocateSelect');
    if(selectRelocate){
        selectRelocate.addEventListener('change', (event) => {
            if(event.target.value === "yes"){
                doc.getElementById('relocateAnywhere').classList.remove('d-none');
            }else if(event.target.value !== "yes"){
                doc.getElementById('relocateAnywhere').classList.add('d-none');
            }
        });
    }

    if (doc.querySelector("#radioBusinessFranchise1")) {
        doc.querySelector("#radioBusinessFranchise1").addEventListener("change", function() {
            if(this.checked){
                doc.getElementById('havebusinessAreatext').classList.remove('d-none');
            }
        });
    }

    if (doc.querySelector("#radioBusinessFranchise2")) {
        doc.querySelector("#radioBusinessFranchise2").addEventListener("change", function() {
            if(this.checked){
                doc.getElementById('havebusinessAreatext').classList.add('d-none');
            }
        });
    }

    if (doc.querySelector("#currentBusinessOrFranchise1")) {
        doc.querySelector("#currentBusinessOrFranchise1").addEventListener("change", function() {
            if(this.checked){
                doc.getElementById('currentlyBusinessSpecify').classList.remove('d-none');
            }
        });
    }
    
    if (doc.querySelector("#currentBusinessOrFranchise2")) {
        doc.querySelector("#currentBusinessOrFranchise2").addEventListener("change", function() {
            if(this.checked){
                doc.getElementById('currentlyBusinessSpecify').classList.add('d-none');
            }
        });
    }

    if (doc.querySelector("#workForACleaningCompany1")) {
        doc.querySelector("#workForACleaningCompany1").addEventListener("change", function() {
            if(this.checked){
                doc.getElementById('cleaningCompanyArea').classList.remove('d-none');
            }
        });
    }

    if (doc.querySelector("#workForACleaningCompany2")) {
        doc.querySelector("#workForACleaningCompany2").addEventListener("change", function() {
            if(this.checked){
                doc.getElementById('cleaningCompanyArea').classList.add('d-none');
            }
        });
    }

}

export default selectsFormValidate;