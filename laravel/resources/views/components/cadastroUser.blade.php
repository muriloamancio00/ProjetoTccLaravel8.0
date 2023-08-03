<!-- usado na yeld main-->

<div class="container my-5" style="margin-bottom: 10px">
    <div class="row justify-content-center" >
        <div class="col-md-6">
            <div class="card" style="width: 400px;height: 200px">
                <div class="card-header" style="display: flex;justify-content:center;align-items: center;background-color: rgba(58,212,171,0.38)">
                    <h3>Cadastros de Usuarios</h3>
                </div>
                <div class="card-body">
                    <div class="list-group"  >
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.feiras.create') }}" class="list-group-item list-group-item-action">Administrador</a>
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.bancas.create') }}" class="list-group-item list-group-item-action">Feirante</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Elementos ao lado do container -->
        <div class="col-md-6">
            <div class="card" style="width: 500px;height: 200px">
                <div class="card-header" style="display: flex;justify-content:center;align-items: center;background-color: rgba(58,212,171,0.38)">
                    <h3>Cadastros Base</h3>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="list-group"  >
                            <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.horarios.index') }}" class="dropdown-item">Horarios de Feiras</a>
                            <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.categorias.index') }}" class="dropdown-item">Categoria de Produtos</a>
                            <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.categorias.index') }}" class="dropdown-item">Cadastro de Eventos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

