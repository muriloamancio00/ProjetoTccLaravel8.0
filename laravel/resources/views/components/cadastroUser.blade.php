<div class="container my-5" style="margin-bottom: 10px">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 300px;">
                <div class="card-header" style="display: flex;justify-content:center;align-items: center;background-color: rgba(58,212,171,0.38)">
                    <h3>Visualizar Dados</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.administrador.index') }}" class="list-group-item list-group-item-action">Administradores</a>
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.feirante.index') }}" class="list-group-item list-group-item-action">Feirantes</a>
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.feiras.index') }}" class="list-group-item list-group-item-action">Feiras</a>
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.bancas.index') }}" class="list-group-item list-group-item-action">Bancas</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 300px;">
                <div class="card-header" style="display: flex;justify-content:center;align-items: center;background-color: rgba(58,212,171,0.38)">
                    <h3>Criar Novos</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.feiras.create') }}" class="list-group-item list-group-item-action">Nova Feira</a>
                        <!--<a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.administrador.index') }}" class="list-group-item list-group-item-action">Novo Produto</a>
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.administrador.index') }}" class="list-group-item list-group-item-action">Novo Pedido</a>
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.administrador.index') }}" class="list-group-item list-group-item-action">Novo Evento</a>
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.administrador.index') }}" class="list-group-item list-group-item-action">Nova Entrada</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 300px;">
                <div class="card-header" style="display: flex;justify-content:center;align-items: center;background-color: rgba(58,212,171,0.38)">
                    <h3>Informações Gerais</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.sobre.index') }}" class="list-group-item list-group-item-action">Sobre</a>
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.horarios.index') }}" class="list-group-item list-group-item-action">Horarios</a>
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.categorias.index') }}" class="list-group-item list-group-item-action">Categorias de Produtos</a>
                        <!-- <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.administrador.index') }}" class="list-group-item list-group-item-action">Fornecedores</a>
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.administrador.index') }}" class="list-group-item list-group-item-action">Finanças</a>
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.administrador.index') }}" class="list-group-item list-group-item-action">Eventos</a> -->
                        <a style="display: flex;justify-content:center;align-items: center;" href="{{ route('gerencia.administrador.index') }}" class="list-group-item list-group-item-action">Configurações</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
