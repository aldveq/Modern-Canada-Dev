const jobSelect = () => {
    const doc = document;

    if (doc.getElementById('spokenCheckOther') && doc.getElementById('writtenCheckOther')) {

        doc.getElementById('spokenCheckEnglish').addEventListener('change', pupulateSpokenTextArea);
        doc.getElementById('spokenCheckFrench').addEventListener('change', pupulateSpokenTextArea);
        doc.getElementById('spokenCheckSpanish').addEventListener('change', pupulateSpokenTextArea);

        doc.getElementById('writtenCheckEnglish').addEventListener('change', pupulateWrittenTextArea);
        doc.getElementById('writtenCheckFrench').addEventListener('change', pupulateWrittenTextArea);
        doc.getElementById('writtenCheckSpanish').addEventListener('change', pupulateWrittenTextArea);

        doc.getElementById('spokenCheckOther').addEventListener('change', otherSpokenTextArea);
        doc.getElementById('writtenCheckOther').addEventListener('change', otherWrittenTextArea);

    }

}

const pupulateSpokenTextArea = e => {
    e.stopPropagation();
    e.stopImmediatePropagation();

    const spokenTextAreaString = getSpokenTextAreaString();
    let spokenTextIterator = ''; 

    if (spokenTextAreaString.length > 0) {

        if (spokenTextAreaString.length === 1) {

            spokenTextAreaString.forEach(spokenTxt => {
                const spokenTextResult = (spokenTxt.lastElementChild.textContent).trim();
                spokenTextIterator += spokenTextResult; 
            });

            document.getElementById('spoken').value = spokenTextIterator;

        } else if (spokenTextAreaString.length > 1) {
    
            spokenTextAreaString.forEach(spokenTxt => {
                const spokenTextResult = (spokenTxt.lastElementChild.textContent).trim();
                spokenTextIterator += `${spokenTextResult}, `; 
            });

            let spokenCuttedLastComma = spokenTextIterator.substring(0, spokenTextIterator.length - 2);

            document.getElementById('spoken').value = spokenCuttedLastComma;

        }
        
    } else {
        document.getElementById('spoken').value = '';
    }

}

const pupulateWrittenTextArea = e => {
    e.stopPropagation();
    e.stopImmediatePropagation();

    const writtenTextAreaString = getWrittenTextAreaString(); 
    let writtenTextIterator = ''; 

    if (writtenTextAreaString.length > 0) {

        if (writtenTextAreaString.length === 1) {
    
            writtenTextAreaString.forEach(writtenTxt => {
                const writtenTextResult = (writtenTxt.lastElementChild.textContent).trim();
                writtenTextIterator += writtenTextResult; 
            });

            document.getElementById('written').value = writtenTextIterator;

        } else if (writtenTextAreaString.length > 1) {
    
            writtenTextAreaString.forEach(writtenTxt => {
                const writtenTextResult = (writtenTxt.lastElementChild.textContent).trim();
                writtenTextIterator += `${writtenTextResult}, `; 
            });

            let writtenCuttedLastComma = writtenTextIterator.substring(0, writtenTextIterator.length - 2);

            document.getElementById('written').value = writtenCuttedLastComma;

        }

    } else {
        document.getElementById('written').value = '';
    }

}

const getSpokenTextAreaString = () => {
    const checkboxesSpoken = Array.from(document.querySelectorAll('input.checkbox-spoken'));
    let checkboxesSpokenFilteredByTrue = [];

    checkboxesSpoken.forEach(checkSpk => {
        if ( checkSpk.checked == true) {
            checkboxesSpokenFilteredByTrue.push(checkSpk.parentElement);
        }
    });

    return checkboxesSpokenFilteredByTrue;
}

const getWrittenTextAreaString = () => {
    const checkboxesWritten = Array.from(document.querySelectorAll('input.checkbox-written'));
    let checkboxesWrittenFilteredByTrue = [];
    
    checkboxesWritten.forEach(checkWritten => {
        if (checkWritten.checked == true) {
            checkboxesWrittenFilteredByTrue.push(checkWritten.parentElement);
        }
    });

    return checkboxesWrittenFilteredByTrue;
}

const otherSpokenTextArea = () => {

    if (document.getElementById('spokenCheckOther').checked == true) {
        enableOtherTextInputSpoken();
    } else {
        disableOtherTextInputSpoken();
    }

}

const otherWrittenTextArea = () => {
    if (document.getElementById('writtenCheckOther').checked == true) {
        enableOtherTextInputWritten();
    } else {
        disableOtherTextInputWritten();
    }
}

const enableOtherTextInputSpoken = () => {
    const doc = document;

    doc.getElementById('otherInputSpoken').classList.remove('d-none');
    doc.getElementById('otherSpokenText').focus();
    
}

const disableOtherTextInputSpoken = () => {

    const doc = document;

    doc.getElementById('otherInputSpoken').classList.add('d-none');
    doc.getElementById('otherSpokenText').value = '';
}

const enableOtherTextInputWritten = () => {
    const doc = document;

    doc.getElementById('otherInputWritten').classList.remove('d-none');
    doc.getElementById('otherWrittenText').focus();
}

const disableOtherTextInputWritten = () => {
    const doc = document;

    doc.getElementById('otherInputWritten').classList.add('d-none');
    doc.getElementById('otherWrittenText').value = '';
}

export default jobSelect;