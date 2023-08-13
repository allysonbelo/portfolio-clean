let aside = document.querySelector('.single__aside');
let content = document.querySelector('.single__column--left');

function handleScrollSidebar() {
  window.addEventListener('scroll', () => {
    let pageTop = window.scrollY || document.documentElement.scrollTop;

    if (pageTop > 400) {
      aside.style.position = 'fixed';
      aside.style.top = '130px';
      aside.style.bottom = '';

      console.log('pageTop: ' + pageTop);
      console.log('Content: ' + content.offsetHeight);
      console.log('Content: ' + aside.offsetHeight);

      if(pageTop == content.offsetHeight){
        console.log('Igual');
      }


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