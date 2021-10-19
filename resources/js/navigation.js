const menuButton = document.querySelector('.icons .button-menu');
const mainNavigation = document.querySelector('#main-navigation');
if (mainNavigation && menuButton) {
    menuButton.addEventListener('click', function () {
        mainNavigation.classList.toggle('active');
    })
}
