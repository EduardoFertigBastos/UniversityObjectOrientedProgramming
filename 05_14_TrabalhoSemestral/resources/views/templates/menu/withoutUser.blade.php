<header>

    <nav class="navbar  navbar-expand-lg navbar-dark bg-danger">

        <div id="divHome" class="container">
            <a class="navbar-brand h1 mb-0" href="#"> By Nani - Arte de Encantar </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-site">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- HOME BONECAS ACESSÓRIOS DECORAÇÃO CONTATO-->
            <div class="collapse navbar-collapse" id="navbar-site">
                                                
                <div class="content-in-collapse">

                    <div class="d-flex align-items-center div-container-items">

                        <ul class="navbar-nav d-flex he">

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
                    
                        <ul class="navbar-nav margin-side-socialmedia">

                            <li class="navbar-item dropdown navbar-site-items ha">

                                <a class="nav-item dropdown-toggle text-light" href="#" id="navDrop" data-toggle="dropdown">
                                    Redes Sociais
                                </a>
                                
                                <div class="dropdown-menu">
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

                        <a href="{{route('auth.callLogin', )}}" class="btn btn-light login-button ml-auto"> Login </a>    
        
                    </div>

                </div>
                    
            </div>
            
        </div>

    </nav>
</header>