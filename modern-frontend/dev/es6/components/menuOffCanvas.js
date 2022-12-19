const ctrlMenuOffCanvas = () => {
    const doc = document;
    doc.getElementById('navbarTogglerButton').addEventListener('click', collapseIsActive);
    applyDropdownToggleClass();
}

const collapseIsActive = () => {
    const doc = document; 
    doc.getElementById('navbarTogglerButton').classList.toggle('is-active');
}

const applyDropdownToggleClass = () => {
    if(document.querySelector('a[data-toggle="dropdown"]')) {
        document.querySelector('a[data-toggle="dropdown"]').classList.add('dropdown-toggle');
    }
}
export default ctrlMenuOffCanvas;