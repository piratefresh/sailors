const nav = document.querySelector("#navigation");
let header;
const navTop = nav.offsetTop;

if (document.querySelector(".hero")) {
  header = document.querySelector(".hero");
} else {
  header = nav.offsetTop;
}

let headerHeight = header.clientHeight;

function stickyNavigation() {
  if (window.scrollY >= navTop) {
    // nav offsetHeight = height of nav
    document.body.classList.add("fixed-nav");
  } else {
    document.body.classList.remove("fixed-nav");
  }
  if (window.scrollY > headerHeight && window.scrollY >= navTop) {
    document.body.style.paddingTop = nav.offsetHeight + "px";
    document.body.classList.add("fixed-nav-bg");
  } else {
    document.body.style.paddingTop = 0;
    document.body.classList.remove("fixed-nav-bg");
  }
}

if (!nav.classList.contains("fixed-nav-bg")) {
  if (window.scrollY > headerHeight && window.scrollY >= navTop) {
    document.body.style.paddingTop = nav.offsetHeight + "px";
    document.body.classList.add("fixed-nav-bg");
  } else {
    document.body.style.paddingTop = 0;
    document.body.classList.remove("fixed-nav-bg");
  }
}

window.addEventListener("scroll", stickyNavigation);
