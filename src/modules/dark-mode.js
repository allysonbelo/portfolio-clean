function changeMode() {
    const iconLight = document.querySelector('.fa-regular');
    const page = document.querySelector('#page');

    iconLight.addEventListener('click', () => {
        page.classList.toggle('dark-mode');
    });

    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        page.classList.add('dark-mode');
    }
    else {
        page.classList.remove('dark-mode');
    }

    iconLight.addEventListener('click', () => {
        const light__lines = document.querySelectorAll('.light__line');

        light__lines.forEach(light__line => {
            // Adiciona a classe com a animação
            light__line.classList.add('animate__light');

            //  Remove a classe após 1 segundo (1000 milissegundos)
            setTimeout(() => {
                light__line.classList.remove('animate__light');
            }, 1000);
        });
    });
}

export default changeMode;