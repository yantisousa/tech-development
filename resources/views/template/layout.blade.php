<header>
    <link rel="stylesheet" href="{{ asset('assets/css/template/layout.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/home/index.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&family=Roboto+Mono:wght@100&display=swap"
        rel="stylesheet">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <div style="width: 70%" class="row mx-auto">
                <div class="col ">
                    <i class="bi bi-6-circle-fill logo"></i>
                </div>
                <div class="col text-end mt-3">
                    <a href="{{ route('cursos.index') }}">
                        <h4 class="link">Cursos</h4>
                    </a>
                </div>
                <div class="col-2 text-end mt-3">
                    <a href="{{ route('user.login') }}">
                        <h4 class="link"><i class="bi bi-person"></i> Entrar</h4>
                    </a>
                </div>

            </div>
        </div>
    </nav>
</header>

@yield('content')
