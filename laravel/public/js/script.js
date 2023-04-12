function showSection(sectionId) {
    // Obter a seção selecionada
    var section = document.getElementById(sectionId);

    // Ocultar todas as outras seções
    var sections = document.getElementsByTagName('section');
    for (var i = 0; i < sections.length; i++) {
        if (sections[i].getAttribute('id') != sectionId && sections[i].getAttribute('id') != 'all') {
            sections[i].style.display = 'none';
        }
    }

    // Se a seção "Todas" for selecionada, exibir todas as seções
    if (sectionId == 'all') {
        var sections = document.getElementsByTagName('section');
        for (var i = 0; i < sections.length; i++) {
            if (sections[i].getAttribute('id') != 'nav') {
                sections[i].style.display = 'block';
            }
        }
    } else {
        // Exibir a seção selecionada
        section.style.display = 'block';
    }

    // Atualizar a classe ativa na navegação
    var navLinks = document.getElementsByTagName('a');
    for (var i = 0; i < navLinks.length; i++) {
        if (navLinks[i].getAttribute('onclick') == 'showSection(\'' + sectionId + '\')') {
            navLinks[i].classList.add('active');
        } else {
            navLinks[i].classList.remove('active');
        }
    }
}

function expandNav() {
    // Adicionar classe "expand" na barra de navegação
    var nav = document.getElementsByTagName('nav')[0];
    nav.classList.add('expand');

    // Atualizar texto do botão para "Contrair"
    var expandBtn = document.getElementById('expand');
    expandBtn.textContent = 'Contrair';

    // Exibir opção de navegação "C#"
    var csharpNav = document.querySelector('#nav li:last-child');
    csharpNav.style.display = 'block';
}

function contractNav() {
    // Remover classe "expand" da barra de navegação
    var nav = document.getElementsByTagName('nav')[0];
    nav.classList.remove('expand');

    // Atualizar texto do botão para "Expandir"
    var expandBtn = document.getElementById('expand');
    expandBtn.textContent = 'Expandir';

    // Esconder opção de navegação "C#" novamente
    var csharpNav = document.querySelector('#nav li:last-child');
    csharpNav.style.display = 'none';
}

// Adicionar evento de clique ao botão "Contrair"
var expandBtn = document.getElementById('expand');
expandBtn.addEventListener('click', function() {
    if (nav.classList.contains('expand')) {
        contractNav();
    } else {
        expandNav();
    }
});
