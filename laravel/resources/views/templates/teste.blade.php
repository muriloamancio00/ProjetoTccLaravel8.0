<!DOCTYPE html>
<html>
<head>
    <title>Gestão de Feiras</title>
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> -->

    <style>

        body {
            background-color: #293241;
        }

        header {
            background-color: #98C1D9;
        }

        h1 {
            color: #2E5266;
        }

        #expand {
            background-color: #EE6C4D;
            color: #E0FBFC;
        }

        #expand:hover {
            background-color: #E0FBFC;
            color: #2E5266;
        }

        section {
            margin-top: 30px;
            padding: 20px;
            background-color: #EDF2F4;
            border-radius: 5px;
        }

        .card {
            background-color: #E0FBFC;
            margin: 20px 0;
            border-radius: 5px;
        }

        .card-title {
            color: #2E5266;
        }

        .card-text {
            color: #4F4F4F;
        }

        .btn-primary {
            background-color: #EE6C4D;
            border-color: #EE6C4D;
            color: #E0FBFC;
        }

        .btn-primary:hover {
            background-color: #E0FBFC;
            border-color: #E0FBFC;
            color: #2E5266;
        }

        .divisa {
            border: none;
            background-color: #EE6C4D;
            height: 2px;
            margin: 20px 0;
        }

        .divisa hr {
            border: none;
            background-color: #E0FBFC;
            height: 2px;
            margin: 2px 0;
        }
        /* Estilo para a navegação */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Estilo para os links da navegação */
        nav {
            background-color: #f2f2f2;
            padding: 10px;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        nav li {
            margin: 0 10px;
        }

        nav a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
        }

        nav a.active {
            background-color: #4CAF50;
            color: white;
        }

        /* Adicionar estilo para seções abaixo da barra de navegação */
        nav.expand ul {
            flex-direction: column;
            align-items: center;
        }

        nav.expand li {
            margin: 10px 0;
        }

        /* Esconder opção de navegação "C#" quando barra de navegação está expandida */
        nav.expand li:last-child {
            display: none;
        }

        nav.expand #expand {
            display: none;
        }

        /* css Btn */
        #expand {
            background-color: #4CAF50; /* Define a cor de fundo do botão */
            color: white; /* Define a cor do texto do botão */
            padding: 10px 20px; /* Define o espaçamento interno do botão */
            border: none; /* Remove a borda do botão */
            cursor: pointer; /* Define o cursor do mouse como uma mão quando o usuário passa o mouse sobre o botão */
            border-radius: 4px; /* Define o raio das bordas do botão */
            font-size: 16px; /* Define o tamanho da fonte do texto do botão */
        }

        #expand:hover {
            background-color: #3e8e41; /* Define a cor de fundo do botão quando o usuário passa o mouse sobre ele */
        }

    </style>
</head>
<body>
<header>
    <h1>Gestão de Feiras</h1>
    <nav>
        <button id="expand" onclick="expandNav()">Expandir</button>
        <ul id="nav">
            <li><a href="#" onclick="showSection('all')">Todas</a></li>
            <li><a href="#" onclick="showSection('artesanato')">Artesanato e Produtos Locais</a></li>
            <li><a href="#" onclick="showSection('pets')">Pets e seus Cuidados</a></li>
            <li><a href="#" onclick="showSection('tecnologia')">Tecnologia e Inovação</a></li>
            <!-- Adicionar opção de navegação "C#" -->
            <li><a href="#" onclick="showSection('csharp')">C#</a></li>
        </ul>
        <!-- Adicionar botão "Expandir" -->
    </nav>

</header>

<main>
    <div class="container eventos">
        <div class="row">
            <section id="todas">
                <h2>Todas</h2>

                <!-- Eventos -->
                <!-- Container com informações de eventos -->
                <div class="container eventos">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://picsum.photos/400/300?random=4" alt="Imagem do evento" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h2>Evento de gastronomia</h2>
                            <p><strong>Data:</strong> 10/05/2023</p>
                            <p><strong>Local:</strong> Praça da Alimentação</p>
                            <p><strong>Organizador:</strong> Murilo Amancio da Silva</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis vel odio a viverra. Duis aliquet auctor elit, vitae suscipit sapien fringilla sed. Nullam sed semper ante. Donec interdum libero ut risus lobortis, vel blandit nunc lobortis. Morbi non ullamcorper dolor. Sed viverra interdum est, vel volutpat nibh vestibulum ut. Nam sollicitudin elit ut elit dapibus, quis lacinia velit aliquet.</p>
                            <a href="#" class="btn btn-primary">Saiba mais</a>
                        </div>
                        <div class="divisa">
                            <hr>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <img src="https://picsum.photos/400/300?random=5" alt="Imagem do evento" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h2>Evento de música</h2>
                            <p><strong>Data:</strong> 10/05/2023</p>
                            <p><strong>Local:</strong> Praça da Cidade</p>
                            <p><strong>Organizador:</strong> Murilo Amancio da Silva</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis vel odio a viverra. Duis aliquet auctor elit, vitae suscipit sapien fringilla sed. Nullam sed semper ante. Donec interdum libero ut risus lobortis, vel blandit nunc lobortis. Morbi non ullamcorper dolor. Sed viverra interdum est, vel volutpat nibh vestibulum ut. Nam sollicitudin elit ut elit dapibus, quis lacinia velit aliquet.</p>
                            <a href="#" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <hr>
            </section>

            <section id="artesanato">
                <h2>Artesanato e Produtos Locais</h2>
                <div class="card">
                    <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="Feira 1">
                    <div class="card-body">
                        <h5 class="card-title">Artesanato</h5>
                        <p class="card-text">Descrição da Feira 1.</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </section>

            <section id="pets">
                <h2>Pets e seus Cuidados</h2>
                <div class="card">
                    <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="Feira 2">
                    <div class="card-body">
                        <h5 class="card-title">Petss</h5>
                        <p class="card-text">Descrição da Feira 2.</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </section>

            <section id="tecnologia">
                <h2>Tecnologia e Inovação</h2>
                <div class="card">
                    <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="Feira 3">
                    <div class="card-body">
                        <h5 class="card-title">Tecnologia</h5>
                        <p class="card-text">Descrição da Feira 3.</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <hr>
</main>

<footer>
    <p>Gestão de Feiras - Todos os direitos reservados.</p>
</footer>

<!-- <script src="{{ asset('js/script.js') }}"></script> -->
<script>
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

</script>
</body>
</html>
