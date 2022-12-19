const DownloadPDFFactSheetForm = () => {
    if(document.querySelector('.download-pdf-fact-sheet-form-container')) {

        document.getElementById('downloadPDFFileForm').addEventListener('submit', (e) => {
            e.preventDefault();
            const formTarget = e.target;
            const destination = formTarget.getAttribute('action');
            const postData = new FormData(formTarget); 

            if(isUserInputValid()) {
                sendEmail(destination, postData);
            } 

        });
    }
}

const sendEmail = (destination, postData) => {
    fetch(`${destination}`, {
        method: 'POST',
        body: postData
    })
    .then(response => response.json())
    .then(data => enableDownloadButton(data))
    .catch(error => alert(`There was an error: ${error}. Please, try again.`));
}

const enableDownloadButton = data => {
    if (data.error === false && data.response === true) {
        document.getElementById('pdfFileButton').classList.add('enable');
        document.getElementById('pdfFileButton').classList.add('enable-animation');
        resetForm();
        setTimeout(hideLoader,500);
        setTimeout(() => {
            document.getElementById('pdfFileButton').classList.remove('enable-animation');
        }, 4500);
    } else {
        hideLoader();
        setTimeout(() => {
            alert('Something went wrong! Please, try again in a few minutes.');   
        }, 500);
    }
}

const resetForm = () => {
    const doc = document;

    doc.getElementById('downloadPDFFileForm').reset();
    doc.getElementById('downloadPDFFileForm').classList.add('d-none');
    const validFeedbackElements = doc.querySelectorAll('.valid-feedback');
    const invalidFeedbackElements = doc.querySelectorAll('.invalid-feedback');

    validFeedbackElements.forEach( valid => valid.style.display = 'none');
    invalidFeedbackElements.forEach( valid => valid.style.display = 'none');

    doc.getElementById('name').style.backgroundImage = 'none';
    doc.getElementById('email').style.backgroundImage = 'none';

    doc.getElementById('name').setAttribute('disabled', 'true');
    doc.getElementById('email').setAttribute('disabled', 'true');

    doc.querySelector('button[type="submit"]').setAttribute('disabled', 'true');


}

const hideLoader = () => {
    document.getElementById('loader').classList.remove('active');
}

const isUserInputValid = () => {
    const doc = document;
    const name = doc.getElementById('name').value;
    const emailAddress = doc.getElementById('email').value;

    if (name === '' && emailAddress === '') {
        return false;
    } else if (name !== '' && emailAddress === '') {
        return false;
    } else if (name === '' && emailAddress !== '') {
        return false;
    } else {
        return true;
    }

}

export default DownloadPDFFactSheetForm;