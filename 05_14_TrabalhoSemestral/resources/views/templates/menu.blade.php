<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="#" target="" class="navbar-brand">POO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toogler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="{{route('index')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{route('addresses.index')}}" class="nav-link">Endereços</a>
            </li>
            <li class="nav-item">
                <a href="{{route('cities.index')}}" class="nav-link">Cidades</a>
            </li>
            <li class="nav-item">
                <a href="{{route('coins.index')}}" class="nav-link">Moedas</a>
            </li>
            <li class="nav-item">
                <a href="{{route('purchases.index')}}" class="nav-link">Compras</a>
            </li>
            <li class="nav-item">
                <a href="{{route('states.index')}}" class="nav-link">Estados</a>
            </li>
            <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link">Usuários</a>
            </li>
        </ul>
        @if (Route::getCurrentRoute()->getName() != 'index')
            <a href="#" onclick="goBack()" class="btn btn-warning">
                Voltar
            </a>
        @endif
    </div>
</nav>
