const menuButton = document.querySelector('.icons .button-menu');
const mainNavigation = document.querySelector('#main-navigation');
menuButton.addEventListener('click', function() {
    mainNavigation.classList.toggle('active');
})
