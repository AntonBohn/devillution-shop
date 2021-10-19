const menuButton = document.querySelector('.icons .button-menu');
const searchButton = document.querySelector('.icons .button-search');
const mainNavigation = document.querySelector('#main-navigation');
const miniSearch = document.querySelector('#mini-search');
if (mainNavigation && menuButton) {
    searchButton.addEventListener('click', function () {
        miniSearch.classList.toggle('active');
    })
    menuButton.addEventListener('click', function () {
        mainNavigation.classList.toggle('active');
    })
}
