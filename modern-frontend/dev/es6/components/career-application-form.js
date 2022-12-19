import { addAllExperiencesCareersForm, fillOutAllExperiencesInput } from '../components/add-all-experiences-careers-form';

const careerApplicationForm = () => {
    var addExperience = document.getElementById('addExperienceBtn');

    if (addExperience) {
        addExperience.addEventListener('click', appendExperience);
    }
}

const appendExperience = (e) => {
    e.preventDefault();
    
    if(isFrenchPage()) {
        $("#contentExperience").append(`<div class="row">
            <div class="col-12 col-md-6 mb-3">
                <label class="custom-label" for="companyInput">Compagnie</label>
                <input type="text" class="form-control company" minlength="3" maxlength="50" required/>
                <div class="invalid-feedback">Champ requis.</div>
                <div class="valid-feedback">Cela semble bon!</div>
            </div>
            <div class="col-12 col-md-6 mb-3 d-flex-end">
                <div class="flex-1">
                    <label class="custom-label" for="durationInput">Durée</label>
                    <input type="text" class="form-control duration" placeholder="par exemple. 3 ans 6 mois" required/>
                    <div class="invalid-feedback">Champ requis.</div>
                    <div class="valid-feedback">Cela semble bon!</div>
                </div>
                <button class="delete-row-experience btn-danger"></button>
            </div>
        </div>`);
    } else {
        $("#contentExperience").append(`<div class="row">
            <div class="col-12 col-md-6 mb-3">
                <label class="custom-label" for="companyInput">Company</label>
                <input type="text" class="form-control company" minlength="3" maxlength="50" required/>
                <div class="invalid-feedback">Field is required.</div>
                <div class="valid-feedback">Looks good!</div>
            </div>
            <div class="col-12 col-md-6 mb-3 d-flex-end">
                <div class="flex-1">
                    <label class="custom-label" for="durationInput">Duration</label>
                    <input type="text" class="form-control duration" placeholder="e.g. 3 years 6 months" required/>
                    <div class="invalid-feedback">Field is required.</div>
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <button class="delete-row-experience btn-danger"></button>
            </div>
        </div>`);
    }

    document.querySelectorAll('.delete-row-experience').addEvent('click', (e) => {
        e.preventDefault();
        e.stopPropagation(); 

        removeExperienceFromLS(e.target.getAttribute('data-experience-id'));

        setTimeout(() => {
            e.target.parentNode.parentNode.remove();
            addAllExperiencesCareersForm(); 
        }, 500);

    })

    addAllExperiencesCareersForm();
}

const isFrenchPage = () => {
    const urlPathName = window.location.pathname;

    if (urlPathName.includes('/fr/')) {
        return true; 
    } else {
        return false;
    }
}

const removeExperienceFromLS = (experiendId) => {
    const allExperiencesFromLS = JSON.parse(localStorage.getItem('allExperiences'));

    if (allExperiencesFromLS !== null && allExperiencesFromLS.length > 0) {
        const experiencesArrayWithOutDeletedItem = allExperiencesFromLS.filter(exp => exp.id !== experiendId);
        localStorage.setItem('allExperiences', JSON.stringify(experiencesArrayWithOutDeletedItem));
        fillOutAllExperiencesInput();
    }
}

export {careerApplicationForm, isFrenchPage};