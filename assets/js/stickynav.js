const nav = document.querySelector('#navigation');
const header = document.querySelector('.hero');
const navTop = nav.offsetTop;

let headerHeight = header.clientHeight;

function stickyNavigation() {     
    if (window.scrollY >= navTop) {
        // nav offsetHeight = height of nav
        document.body.classList.add('fixed-nav');
    } else {
        
        document.body.classList.remove('fixed-nav');
    }
    if (window.scrollY > headerHeight && window.scrollY >= navTop) {
        document.body.style.paddingTop = nav.offsetHeight + 'px';
        document.body.classList.add('fixed-nav-bg');
    } else {
        document.body.style.paddingTop = 0;
        document.body.classList.remove('fixed-nav-bg');
    }
}

window.addEventListener('scroll', stickyNavigation);