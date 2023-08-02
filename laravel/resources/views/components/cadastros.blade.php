<!-- usado na yeld main-->

<div class="container my-5" style="margin-bottom: 10px">
    <div class="row justify-content-center" >
        <div class="col-md-6">
            <div class="card" style="width: 400px;height: 200px">
                <div class="card-header" style="background-color: rgba(58,212,171,0.38)">
                    <h3>Acesso Rapido de Cadastro</h3>
                </div>
                <div class="card-body">
                    <div class="list-group" >
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.feiras.create') }}" class="list-group-item list-group-item-action">Feiras</a>
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.bancas.create') }}" class="list-group-item list-group-item-action">Bancas</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Elementos ao lado do container -->
        <div class="col-md-6">
            <div class="card" style="width: 500px;height: 200px">
                <div class="card-header" style="background-color: rgba(58,212,171,0.38)">
                    <h3>Informações Adicionais</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">
                            <a style="display: flex;justify-content:center;align-items: center;" href="{{route('gerencia.feiras.index')}}" class="dropdown-item">Feiras</a>
                            <a style="display: flex;justify-content:center;align-items: center;" href="{{route('gerencia.bancas.index')}}" class="dropdown-item">Bancas</a>
                            <a style="display: flex;justify-content:center;align-items: center;" href="{{route('gerencia.sobre.index')}}" class="dropdown-item">O Projeto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



