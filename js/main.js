// Mobile menu toggle
const mobileNavTrigger = document.querySelector('.mobile-nav__trigger');
const mobileNav = document.querySelector('.mobile-nav__nav');
const header = document.querySelector('.header');

if (mobileNavTrigger) {
  mobileNavTrigger.addEventListener('click', (e) => {
    e.preventDefault();
    mobileNav.classList.toggle('is-visible-mobile-nav');
    mobileNavTrigger.classList.toggle('has-open-nav');
  });
}

if (header) {
  document.addEventListener('click', (e) => {
    const isClickInside = header.contains(e.target);

    if (!isClickInside) {
      mobileNav.classList.remove('is-visible-mobile-nav');
      mobileNavTrigger.classList.remove('has-open-nav');
    }
  });
}


// Mega menu toggle
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


// Search bar functionality {
const searchTrigger = document.querySelector('.search__trigger');
const searchBar = document.querySelector('.search__input');
const searchWrap = document.querySelector('.search');

if (searchTrigger) {
  searchTrigger.addEventListener('click', (e) => {
    e.preventDefault();
    searchBar.classList.toggle('is-visible-search-input');
    searchWrap.classList.toggle('has-open-search-bar');
  });
}

if (searchWrap) {
  document.addEventListener('click', (e) => {
    const isClickInside = searchWrap.contains(e.target);
    if (!isClickInside) {
      searchBar.classList.remove('is-visible-search-input');
      searchWrap.classList.remove('has-open-search-bar');
    }
  });
}


// Set focus on search input field on pageload
const searchInput = document.querySelector('.search__input');

if (searchTrigger) {
  searchTrigger.addEventListener('click', (e) => {
    e.preventDefault();
    searchInput.focus();
  });
} 