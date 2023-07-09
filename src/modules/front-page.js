const header = document.querySelector('.header');

function handleScroll() {
    window.addEventListener('scroll', () => {
      const scrollPosition = window.scrollY;

      if (scrollPosition >= 300) {
        header.classList.add('header-scroll');
      } else {
        header.classList.remove('header-scroll');
      }
    });
}

export default handleScroll;
