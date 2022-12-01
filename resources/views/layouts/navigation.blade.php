<nav class="navbar navbar-expand-lg bg-navbar p-4 d-flex flex-column bg-red text-light">

    <div>
        <h1>
            NEWS
        </h1>
    </div>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-flex align-items-center justify-content-center"
            id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 navbarItens mx-auto">
                <li class="nav-item d-flex">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('homePage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('searchPage', ['category' => '1']) }}">Esporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('searchPage', ['category' => '2']) }}">Política</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('searchPage', ['category' => '3']) }}">Sáude</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('searchPage', ['category' => '4']) }}">Mundo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('searchPage', ['category' => '5']) }}">Cultura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('searchPage', ['category' => '6']) }}">Outros</a>
                </li>
            </ul>
        </div>
        <div class="d-flex nav-right">
            <form action="{{ route('searchPage') }}" method="GET" class="d-flex" role="search">
                <input name="search" class="form-control me-2" type="text" placeholder="Search" aria-label="Search" id="searchNav">
                <button class="btn btn-outline-primary" type="submit">
                    Search
                </button>
            </form>
            <div class="ms-3">
                <div class="dropdown">
                    <button class="btn btn-outline-secondary rounded-circle border-0 p-1" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        @auth
                            <img class="rounded-circle" src="{{ asset('storage/'. Auth::user()->photo) }}" style="width: 40px" alt="">
                        @else
                            <img class="img-fluid" src="{{ asset('img/person.svg') }}" alt="">
                        @endauth
                    </button>
                    <ul class="dropdown-menu dropdown-avatar">
                        @auth
                            <li class="dropdown-item lead">Olá {{ Auth::user()->name }}</li>
                            <li><a class="dropdown-item" href="{{ route('user') }}">Perfil</a></li>
                            <li><a class="dropdown-item text-danger" href="{{ route('logout') }}">Deslogar</a></li>
                        @else
                            <li class="bg-danger">--Quando desconectado--</li>
                            <li>
                                <button class="btn btn-primary">Cadastrar</button>
                                <button class="btn btn-success">Logar</button>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
