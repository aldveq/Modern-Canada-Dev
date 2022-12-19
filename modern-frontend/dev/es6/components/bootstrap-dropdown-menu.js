const BootstrapDropdownMenu = () => {

    if (window.matchMedia('(min-width: 1200px)').matches) {
        dropdownSubMenusHoverEffectDesktop();
    }

    if (window.matchMedia('(max-width: 1200px)').matches) {
        dropdownSubMenusClickEffectMobile();
    }
}

const dropdownSubMenusHoverEffectDesktop = () => {
    const doc = document;
    const subMenuFirstLevelArray = Array.from(doc.querySelectorAll('.sub-menu-first-level'));
    const subMenuSecondLevelArray = Array.from(doc.querySelectorAll('.sub-menu-second-level'));

    subMenuFirstLevelArray.forEach( first => {
        first.addEventListener('mouseover', (e) => {
            e.stopPropagation();
            e.stopImmediatePropagation();

            const target = e.target;

            if (target.tagName === 'LI' && target.classList.contains('sub-menu-first-level')) {
                document.querySelector(`${target.tagName.toLowerCase()}.sub-menu-first-level ul.dropdown-menu`).classList.add('show');
            
            } else if (target.tagName === 'A' && target.classList.contains('nav-link')) {
                if (target.parentElement.classList.contains('sub-menu-first-level')) {
                    document.querySelector(`${target.parentElement.tagName.toLowerCase()}.sub-menu-first-level ul.dropdown-menu`).classList.add('show');
                }
            }
        })
    })

    subMenuFirstLevelArray.forEach( first => {
        first.addEventListener('mouseleave', (e) => {
            e.stopPropagation();
            e.stopImmediatePropagation();

            const target = e.target;

            if (target.tagName === 'LI' && target.classList.contains('sub-menu-first-level')) {
                document.querySelector(`${target.tagName.toLowerCase()}.sub-menu-first-level ul.dropdown-menu`).classList.remove('show');
            
            } else if (target.tagName === 'A' && target.classList.contains('nav-link')) {
                if (target.parentElement.classList.contains('sub-menu-first-level')) {
                    document.querySelector(`${target.parentElement.tagName.toLowerCase()}.sub-menu-first-level ul.dropdown-menu`).classList.remove('show');
                }
            }
        })
    })

    subMenuSecondLevelArray.forEach( second => {
        second.addEventListener('mouseover', (e) => {
            e.stopPropagation();
            e.stopImmediatePropagation();

            const target = e.target;

            if (target.tagName === 'LI' && target.classList.contains('sub-menu-second-level')) {

                disableSubMenuSecondLevelDropdown();
                document.querySelector(`${target.tagName.toLowerCase()}.sub-menu-second-level ul.dropdown-menu`).classList.add('show');
            
            } else if (target.tagName === 'A' && target.classList.contains('nav-link')) {

                if (target.parentElement.classList.contains('sub-menu-second-level')) {

                    disableSubMenuSecondLevelDropdown();
                    target.parentElement.lastElementChild.classList.add('show');
                }
            }
        })
    })

    subMenuSecondLevelArray.forEach( second => {
        second.addEventListener('mouseleave', (e) => {
            e.stopPropagation();
            e.stopImmediatePropagation();

            const target = e.target;

            if (target.tagName === 'LI' && target.classList.contains('sub-menu-second-level')) {

                disableSubMenuSecondLevelDropdown();
                document.querySelector(`${target.tagName.toLowerCase()}.sub-menu-second-level ul.dropdown-menu`).classList.remove('show');
            
            } else if (target.tagName === 'A' && target.classList.contains('nav-link')) {

                if (target.parentElement.classList.contains('sub-menu-second-level')) {

                    disableSubMenuSecondLevelDropdown();
                    target.parentElement.lastElementChild.classList.remove('show');
                }
            }
        })
    })
    
}

const dropdownSubMenusClickEffectMobile = () => {
    const doc = document;
    const subMenuFirstLevelArray = Array.from(doc.querySelectorAll('.sub-menu-first-level'));
    const subMenuSecondLevelArray = Array.from(doc.querySelectorAll('.sub-menu-second-level'));

    subMenuFirstLevelArray.forEach( first => {
        first.addEventListener('click', (e) => {
            e.stopPropagation();
            e.stopImmediatePropagation();

            const target = e.target;

            if (target.tagName === 'LI' && target.classList.contains('sub-menu-first-level')) {
                target.lastElementChild.classList.toggle('show');
            
            } else if (target.tagName === 'A' && target.classList.contains('nav-link')) {
                if (target.parentElement.classList.contains('sub-menu-first-level')) {
                    target.parentElement.lastElementChild.classList.toggle('show');
                }
            }
        })
    })

    subMenuSecondLevelArray.forEach( second => {
        second.addEventListener('click', (e) => {
            e.stopPropagation();
            e.stopImmediatePropagation();

            const target = e.target;

            if (target.tagName === 'LI' && target.classList.contains('sub-menu-second-level')) {

                disableSubMenuSecondLevelDropdown();
                target.lastElementChild.classList.toggle('show');
            
            } else if (target.tagName === 'A' && target.classList.contains('nav-link')) {

                if (target.parentElement.classList.contains('sub-menu-second-level')) {

                    disableSubMenuSecondLevelDropdown();
                    target.parentElement.lastElementChild.classList.toggle('show');
                }
            }
        })
    })
}

const disableSubMenuSecondLevelDropdown = () => {
    const doc = document;
    const subMenuSecondLevelArray = Array.from(doc.querySelectorAll('.sub-menu-second-level'));

    subMenuSecondLevelArray.forEach(sub => {
        sub.lastElementChild.classList.remove('show');
    })
}

export default BootstrapDropdownMenu;