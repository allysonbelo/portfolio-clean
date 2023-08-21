let menuButton = document.querySelector('.header__nav');
let menuButtonFooter = document.querySelector('.footer__container--other h4');

function showMenu() {
  let menuNav = document.querySelector('.header__menu');
  menuButton.addEventListener('click', function () {
    menuNav.classList.toggle('toggle');
  });

  let coverPage = document.querySelector('.cover__menu');
  menuButton.addEventListener('click', () => {
    coverPage.classList.toggle('cover__menu--active');
  });

  menuButtonFooter.addEventListener('click', () => {
    let footerMenu = document.querySelector('.other__menu--list');
    let arrowDown = document.querySelector('.fa-solid');
    footerMenu.classList.toggle('active');
    arrowDown.classList.toggle('active');
  });
}

export default showMenu;