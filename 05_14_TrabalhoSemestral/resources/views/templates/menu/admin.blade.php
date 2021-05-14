<header>

    <nav class="navbar  navbar-expand-lg navbar-dark bg-danger">

        <div id="divHome" class="container col-11 ml-5">
            <a class="navbar-brand h1 mb-0" href="#"> By Nani - Arte de Encantar </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-site">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbar-site">
                
                <div class="content-in-collapse">
                
                    <div class="d-flex align-items-center div-container-items">
                        <ul class="navbar-nav d-flex">

                            <li class="nav-item navbar-site-items-first">
                                <a class="nav-link" href="{{ route('index') }}"> Home </a>
                            </li>            

                            <li class="nav-item navbar-site-items">
                                <a class="nav-link" href="{{ route('products.all') }}"> Products </a>
                            </li>            

                            <li class="nav-item navbar-site-items">
                                <a class="nav-link" href="{{ route('products.filtred', 'bonecas') }}"> Bonecas </a>
                            </li>            

                            <li class="nav-item navbar-site-items">
                                <a class="nav-link" href="{{ route('products.filtred', 'guirlandas') }}"> Guirlandas </a>
                            </li>            

                            <li class="nav-item navbar-site-items">
                                <a class="nav-link" href="/#contato"> Contato </a>
                            </li>            
                            
                        </ul>
                    </div>

                    <div class="d-flex align-items-center div-container-items">
                        <ul class="navbar-nav">
                            <li class="navbar-item dropdown navbar-site-items">

                                <a class="nav-item dropdown-toggle text-light" href="#" id="navDrop" data-toggle="dropdown">
                                    Registros
                                </a>
                                
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('addresses.index') }}"      > Endereços </a>
                                    <a class="dropdown-item" href="{{ route('cities.index') }}"         > Cidades </a>
                                    <a class="dropdown-item" href="{{ route('materials.index') }}"      > Materiais </a>
                                    <a class="dropdown-item" href="{{ route('invoices.index') }}"       > Notas Fiscais </a>
                                    <a class="dropdown-item" href="{{ route('invoiceProducts.index') }}"> Notas Fiscais de Produtos </a>
                                    <a class="dropdown-item" href="{{ route('paymentForms.index') }}"   > Formas de Pagamento </a>
                                    <a class="dropdown-item" href="{{ route('products.index') }}"       > Produtos </a>
                                    <a class="dropdown-item" href="{{ route('productTypes.index') }}"   > Tipo de Produtos </a>
                                    <a class="dropdown-item" href="{{ route('states.index') }}"         > Estados </a>
                                    <a class="dropdown-item" href="{{ route('telephones.index') }}"     > Telefones </a>
                                    <a class="dropdown-item" href="{{ route('users.index') }}"          > Usuários </a>
                                    <a class="dropdown-item" href="{{ route('userTelephonesses.index') }}"> Telefones por Usuários </a>
        
                                    <a class="dropdown-item" href="https://www.facebook.com/bynaniartedeencantar/"><i class="fab fa-facebook-square"
                                            aria-hidden="true"></i> Facebook </a>
                                    <a class="dropdown-item" href="https://twitter.com/login?lang=pt"><i class="fab fa-twitter-square"
                                            aria-hidden="true"></i> Twitter </a>
                                    <a class="dropdown-item" href="https://www.instagram.com/bynaniartedeencantar/?hl=pt"><i class="fab fa-instagram-square"
                                            aria-hidden="true"></i> Instagram </a>
                                    <a class="dropdown-item" href="https://br.pinterest.com/"><i class="fab fa-pinterest-square"
                                            aria-hidden="true"></i> Pinterest </a>
                                </div>
                            </li>
                        </ul>
                        
                        <div class="mr-3 text-light border border-light px-2 py-2 welcome-message">
                            Bem vindo(a)  
                            
                            {{ $userLogged }}
                        </div>

                        <a href="{{route('show.authInfo', Auth::user()->id)}}" class="mr-3 px-2 py-2 text-light">
                            <i class="fas fa-user-cog fa-lg"></i>
                        </a>
                        
                        <a href="{{route('auth.callLogout')}}" class="btn btn-light login-button"> 
                            Sair 
                        </a>

                    </div>
                
                </div>

            </div>
            
        </div>
        
    </nav>
</header>