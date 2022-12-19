const IndustriesCollapse = () => {
    const doc =  document;

    if(doc.querySelectorAll('button.mobile-industries-we-serve-container__tab-button')) {
        const industriesCollapseButtons = Array.from(doc.querySelectorAll('button.mobile-industries-we-serve-container__tab-button'));

        industriesCollapseButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                cleanAllCollapse();
                if(button.getAttribute('aria-expanded') === 'true') {
                    button.classList.remove('service-tab-collapse');
                } else {
                    button.classList.add('service-tab-collapse');
                }
            })
        })
    }
}

const cleanAllCollapse = () => {
    const doc = document; 
    const industriesCollapseButtonsCollapse = Array.from(doc.querySelectorAll('button.mobile-industries-we-serve-container__tab-button'));

    industriesCollapseButtonsCollapse.forEach(buttonCollapse => {
        buttonCollapse.classList.remove('service-tab-collapse');
    })

}

export default IndustriesCollapse;