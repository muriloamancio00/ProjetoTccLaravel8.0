<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Feiras</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <!-- Meu CSS -->
    <style>
        body{
            background-color: #1a202c;
        }
        .navbar-nav {
            margin-top: 20px;
            width: 100%;
        }
        .navbar-toggler-icon {
            color: #fff;
            transform: rotate(90deg);
        }

        .nav-item {
            width: 100%;
        }

        .nav-link {
            display: flex;
            align-items: center;
            color: #6c757d;
            font-size: 18px;
            height: 50px;
            padding-left: 40px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background-color: #f8f9fa;
            color: #212529;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .navbar-toggler {
            margin-top: 10px;
            margin-right: 20px;
        }

        @media (max-width: 991px) {
            .navbar-nav {
                margin-top: 0;
                margin-bottom: 20px;
                width: 100%;
            }

            .nav-item {
                width: 100%;
            }

            .nav-link {
                display: block;
                height: 60px;
                padding-left: 20px;
                text-align: left;
                transition: none;
            }
        }

        .jumbotron {
            background-color:#70a447;
            color: #FFF;
        }
        .jumbotron h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .jumbotron p {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        .jumbotron a {
            font-size: 1.2rem;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            background-color: #795548;
            border: none;
            color: #FFF;
            text-transform: uppercase;
        }
        .jumbotron a:hover {
            background-color:#70a447;
        }
        .feiras {
            background-color: #FFF;
            border: 1px solid #CCC;
            padding: 20px;
            margin-bottom: 20px;
        }
        .feiras h2 {
            color: #8BC34A;
        }
        .feiras p {
            margin-bottom: 0;
        }
        .eventos {
            background-color: #FFF;
            border: 1px solid #CCC;
            padding: 20px;
            margin-bottom: 20px;
        }
        .eventos h2 {
            color: #8BC34A;
        }
        .eventos p {
            margin-bottom: 0;
        }
        .footer {
            background-color: #8BC34A;
            color: #FFF;
            padding: 20px;
            text-align: center;
        }
        .divisa{
            border: 1px solid #CCC;
            background-color: #1a202c;
            margin: 10px 11px;
        }

    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Meu Site</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<!--
    Jumbotron
        <div class="jumbotron">
            <div class="container">
                <h1>Bem-vindo ao Sistema de Feiras</h1>
                <p>Encontre aqui informações sobre as principais feiras da cidade.</p>
                <hr class="my-4">
                <p>Acompanhe as novidades, participe das atividades e conheça as oportunidades de negócio nas feiras de:</p>
                <ul>
                    <li>Artesanato</li>
                    <li>Culinária</li>
                    <li>Livros</li>
                    <li>Tecnologia</li>
                </ul>
                <p><a class="btn btn-lg" href="#" role="button">Saiba mais</a></p>
            </div>
        </div>
 -->
<!-- Feiras -->
<!-- Container com informações de feiras -->
<div class="row justify-content-center"style="background-color: #1a202c">
    <div class="col-10 text-center py-4" >
<div class="jumbotron" style="border-radius: 2%">
    <div class="container">
        <h1>Bem-vindo ao Sistema de Feiras</h1>
        <p>Encontre aqui informações sobre as principais feiras da cidade.</p>
        <hr class="my-4">
        <p>Acompanhe as novidades, participe das atividades e conheça as oportunidades de negócio nas feiras de:</p>
        <ul>
           Artesanato
            <br>
            Culinária<br>
            Livros
            <br>
            Tecnologia
        </ul>
        <p><a class="btn btn-lg" href="#" role="button">Saiba mais</a></p>
            </div>
        </div>
            </div>
</div>
<br>
<div class="container feiras py-5" style="background-color: #1a202c">
    <h2 class="mb-4">Categoria de Feiras Municipais</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('img/feiraArtesanato.jpg') }}" class="card-img-top" alt="Feira 1">
                <div class="card-body">
                    <h5 class="card-title">Artesanato</h5>
                    <p class="card-text">Descrição da Feira 1.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('img/feiraAgricola.jpg') }}" class="card-img-top" alt="Feira 2">
                <div class="card-body">
                    <h5 class="card-title">Culinária</h5>
                    <p class="card-text">Descrição da Feira 2.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('img/feiraTecnologia.jpg') }}" class="card-img-top" alt="Feira 3">
                <div class="card-body">
                    <h5 class="card-title">Tecnologia</h5>
                    <p class="card-text">Descrição da Feira 3.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Eventos -->
<!-- Container com informações de eventos -->
<div class="container eventos">
    <div class="row">
        <div class="col-md-4">
            <!--<img src="{{ asset('img/feiraAgricola.pg') }}" alt="Minha Imagem"> -->
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

</body>
