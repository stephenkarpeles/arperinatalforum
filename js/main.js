// Mobile menu toggle
const megaMenuTrigger = document.querySelector('.header__nav li:first-child a');
const megaMenu = document.querySelector('.mega-menu');
const megaMenuClose = document.querySelector('.mega-menu__close');
const mainContentArea = document.querySelector('main');

if (megaMenuTrigger) {
  megaMenuTrigger.addEventListener('click', (e) => {
    e.preventDefault();
    megaMenu.classList.toggle('is-visible-mega-menu');
    megaMenuTrigger.classList.toggle('has-open-nav');
  });
}

if (megaMenuClose) {
  megaMenuClose.addEventListener('click', (e) => {
    e.preventDefault();
    megaMenu.classList.remove('is-visible-mega-menu');
    megaMenuTrigger.classList.remove('has-open-nav');
  });
}

if (mainContentArea) {
  document.addEventListener('click', (e) => {
    const isClickInside = mainContentArea.contains(e.target);
    if (isClickInside) {
      megaMenu.classList.remove('is-visible-mega-menu');
      megaMenuTrigger.classList.remove('has-open-nav');
    }
  });
}
