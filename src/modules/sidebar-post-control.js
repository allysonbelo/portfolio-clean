let aside = document.querySelector('.single__aside');
let content = document.querySelector('.single__column--left');

function handleScrollSidebar() {

  if (!aside || !content) {
    return; // Um dos elementos não foi encontrado, saia da função
  }

  window.addEventListener('scroll', () => {
    let pageTop = window.scrollY || document.documentElement.scrollTop;

    if (pageTop > 400) {
      aside.style.position = 'fixed';
      aside.style.top = '130px';
      aside.style.bottom = '';

      if (pageTop >= content.offsetHeight + 50) {
        aside.style.position = 'absolute';
        aside.style.bottom = '0px';
        aside.style.top = '';
      }

    } else {
      aside.style.position = 'static';
    }
  });
}

export default handleScrollSidebar;