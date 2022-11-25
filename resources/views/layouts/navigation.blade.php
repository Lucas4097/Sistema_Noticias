<nav class="navbar navbar-expand-lg bg-navbar p-4 d-flex flex-column bg-gradient">

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

        <div class="collapse navbar-collapse d-flex align-items-center justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 navbarItens mx-auto">
                <li class="nav-item d-flex">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Urgente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Esporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Mundo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Cultura</a>
                </li>
            </ul>
            <div class="d-flex">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search"
                        id="searchNav">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <div class="ms-3">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-avatar">
                            <li class="bg-danger">--Quando conectado--</li>
                            <li class="dropdown-item lead">Olá usuário</li>
                            <li><a class="dropdown-item" href="#">Deslogar</a></li>
                            <li class="bg-danger">--Quando desconectado--</li>
                            <li>
                                <button class="btn btn-primary">Cadastrar</button>
                                <button class="btn btn-success">Logar</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
