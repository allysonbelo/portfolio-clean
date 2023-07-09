const page = document.querySelector('#page');

function addShowElementClass() {
    setTimeout(() => {
        page.classList.add('show__element');
    }, 500);
}

export default addShowElementClass;