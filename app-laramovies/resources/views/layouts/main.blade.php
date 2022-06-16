<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laramovies</title>
    <!-- STYLES -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a id="header-logo" class="navbar-brand" href="/">
                    LaraMovies
                </a>

                <button class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#menu-items">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse col-6 justify-content-center" id="menu-items">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">CRIAR FILME</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">MEUS FILMES</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">ENTRAR</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">CADASTRAR</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">SAIR</a>
                        </li>
                    </ul>

                    <form class="d-lg-none">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </form>
                </div>

                <form class="d-none d-lg-flex">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>
    </header>

    <main class="container">
        <div class="content">
            @yield('content')
        </div>
    </main>

    <footer class="text-center text-lg-start bg-light">
        <div class="text-muted text-center p-4">
            © 2021 - <a class="text-reset fw-bold" href="#">LaraMovies</a>
        </div>
    </footer>

    <!-- SCRIPTS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- SCRIPTS APP -->
    <script src="/js/global.js"></script>
</body>
</html>