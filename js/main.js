const header = document.querySelector('.header');
const page = document.querySelector('#page');

window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY;
  
  if (scrollPosition >= 300) {
    header.classList.add('header-scroll');
  } else {
    header.classList.remove('header-scroll');
  }
});

// Apos 1s o elemento title ganha a classe show_title
setTimeout(() => {
  page.classList.add('show__element');
}, 500);