function rastreamento() {
    document.addEventListener('DOMContentLoaded', function () {
        const botaoBanner = document.getElementById('button__frontpage');
        if (botaoBanner) {
            botaoBanner.addEventListener('click', function () {
                gtag('event', 'clique_no_botao', {
                    'event_category': 'CategoriaLink2',
                    'eventlabel': 'BotaoBanner'
                })
            })
        }

        const botaoProjetos = document.getElementById('button__projetos');
        if (botaoProjetos) {
            botaoProjetos.addEventListener('click', function () {
                gtag('event', 'clique_no_botao', {
                    'event_category': 'CategoriaLink2',
                    'eventlabel': 'BotaoProjetos'
                })
            })
        }
    })
}

export default rastreamento