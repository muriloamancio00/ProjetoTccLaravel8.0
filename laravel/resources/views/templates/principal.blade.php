<!DOCTYPE html>
<html>
<head>
    <title>Gestão de Feiras</title>
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <h1>Gestão de Feiras</h1>
    <nav>
        <button id="expand" onclick="expandNav()">Expandir</button>
        <ul id="nav">
            <li><a href="#" onclick="showSection('all')">Todas</a></li>
            <li><a href="#" onclick="showSection('artesanato')">Feiras de Artesanato </a></li>
            <li><a href="#" onclick="showSection('pets')">Bancas Principais</a></li>
            <li><a href="#" onclick="showSection('tecnologia')">Eventos de Tecnologia e Inovação</a></li>
            <!-- Adicionar opção de navegação "C#" -->
            <li><a href="#" onclick="showSection('csharp')">C#</a></li>
            <li class="nav-item dropdown ps-2" style="background-color: rgba(48,82,77,0.54)">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>
                    <span class="ps-1 text-white">Organização</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('feiras.index')}}" class="dropdown-item">Feiras</a></li>
                    <li><a href="{{route('bancas.index')}}" class="dropdown-item">Bancas</a></li>
                    <li><a href="{{route('produtos.index')}}" class="dropdown-item">Produtos</a></li>
                </ul>
            </li>
        </ul>
        <!-- Adicionar botão "Expandir" -->

            <form method="POST" action="{{ route('logout') }}" id="form">
                @csrf
                <a nohref style="cursor:pointer" class="nav-link" onclick="document.getElementById('form').submit()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-door-closed-fill" viewBox="0 0 16 16">
                        <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    <span class="ps-1 text-white">Sair</span>
                </a>
            </form>
    </nav>

</header>

<main>

    <div class="container eventos">
        <div class="row">
            <section id="todas">
                <h2>Todas</h2>

                <!-- Eventos -->
                <!-- Container com informações de eventos -->

            </section>

            <section id="artesanato">
                <h2 id="CenterSection">Artesanato e Produtos Locais</h2>
                <div id="CenterDisplay">
                    <div class="card">
                        <img src="https://picsum.photos/600/200?random=3" class="card-img-top" alt="Feira 1">
                        <div class="card-body">
                            <h5 class="card-title">Artesanato</h5>
                            <p class="card-text">Descrição da Feira 1.</p>
                            <div id="cardBtn" style="">
                                <a href="#" class="btn btn-primary">Ver mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://picsum.photos/600/200?random=10" class="card-img-top" alt="Feira 1">
                        <div class="card-body">
                            <h5 class="card-title">Artesanato</h5>
                            <p class="card-text">Descrição da Feira 1.</p>
                            <div id="cardBtn" style="">
                                <a href="#" class="btn btn-primary">Ver mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://picsum.photos/600/200?random=11" class="card-img-top" alt="Feira 1">
                        <div class="card-body">
                            <h5 class="card-title">Artesanato</h5>
                            <p class="card-text">Descrição da Feira 1.</p>
                            <div id="cardBtn" style="">
                                <a href="#" class="btn btn-primary">Ver mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://picsum.photos/600/200?random=12" class="card-img-top" alt="Feira 1">
                        <div class="card-body">
                            <h5 class="card-title">Artesanato</h5>
                            <p class="card-text">Descrição da Feira 1.</p>
                            <div id="cardBtn" style="">
                                <a href="#" class="btn btn-primary">Ver mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divisa">
                    <hr>
                    <hr>
                </div>
            </section>

        </div>
    </div>
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
