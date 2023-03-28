<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feira do Xica</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body style="margin: auto;">
    <div class="container-fluid">
        <div class="row">
            <nav class="menuEsquerdo col-md-2 d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li style="padding: 10px;"></li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Hooome</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Avisos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cadastros Gerais</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="minha-div">
                    <div class="row-auto">
                        <h1>Feiras Municipais</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor eligendi est et fuga illo, iste itaque iusto minima odit porro provident qui quia quo ratione rem sint vitae voluptatem?</p>
                    </div>
                    <div class="principal">
                        <br>
                        <h1>Conteudo da Feira</h1>
                        <br>
                        <div id="cartao">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{ asset('img/ifpr.png') }}" alt="IFPR" class="card-img-top" >
                                <div class="card-body">
                                    <h5 class="card-title">Feira Organica IFPR</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary stretched-link">Encontre já</a>
                                </div>
                            </div>
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{ asset('img/geo.jpg') }}" alt="TECNOLOGIA" class="card-img-top" >
                                <div class="card-body">
                                    <h5 class="card-title">Feira Tecnologica IFPR</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary stretched-link">Encontre já</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
