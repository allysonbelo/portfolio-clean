let menuButton = document.querySelector('.header__nav');
let menuButtonFooter = document.querySelector('.footer__container--other h4');

function showMenu() {
  let menuNav = document.querySelector('.header__menu');
  menuButton.addEventListener('click', function () {
    menuNav.classList.toggle('toggle');
  });

  // menuButton.addEventListener('click', function () {
  //   let condition = true;
  //   if (condition) {
  //     setInterval(function () {
  //       menuButton.classList.add('toggle');
  //     }, 1000); // Executes every 1 second
  //   } else {
  //     setInterval(function () {
  //       menuButton.classList.remove('toggle');
  //     }, 1000); // Executes every 1 second
  //   }
  // });

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