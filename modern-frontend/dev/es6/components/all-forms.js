import { removeAllExperiencesFromLS } from '../components/add-all-experiences-careers-form';
import { removeAllUnitForm } from '../components/unit-franchise-form-reset';

const allForms = () => {
    window.addEventListener('load', function() {
        const forms = document.getElementsByClassName('needs-validation');

        if(forms.length > 0) {
            if(forms[0]){
                Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        } else {
                            setTimeout(() => {
                                removeAllUnitForm();
                                removeAllExperiencesFromLS();
                                document.getElementById('loader').classList.add('active');
                            }, 500);
                        }

                        form.classList.add('was-validated');

                    }, false);
                });
            }
        }
        
    }, false);
}

export default allForms;