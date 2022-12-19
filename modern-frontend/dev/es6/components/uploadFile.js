const uploadFile = () => {
    const doc = document;
    const resumeFile = doc.querySelectorAll('.upload-file input');
    const resumeFileRfcForm = doc.getElementById('preferredAreaOptionalResume'); 

    if (resumeFile) {
        resumeFile.addEvent('change', (e, index) => {
            if (e.target.files[0].size > 2000000) {
                alert("Please upload a file less than 2 mega bytes.");
                $(e.target).val('')
                $(e.target).parent().next().html('')
            } else {
                $(e.target).parent().next().html(e.target.files[0].name)
            }
        });
    }

    if (resumeFileRfcForm) {
        resumeFileRfcForm.addEventListener('change', e => {
            if (e.target.files[0].size > 50000000) {
                alert("Please upload a file less than 50 mega bytes.");
                $(e.target).val('')
                $(e.target).parent().next().html('')
            } else {
                $(e.target).parent().next().html(e.target.files[0].name)
            }
        });
    }
}

export default uploadFile;