<style>
    .offcanvas {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: #1b1b1b !important;
        background-clip: padding-box;
        outline: 0;
        transition: var(--bs-offcanvas-transition);
    }

    .offcanvas-header {
        margin-top: 100px;
    }

    @media (max-device-width:400px) {
        #hamburguer {
            position: relative;
            left: 130px
        }
    }

    @media (max-device-width:700px) {
        #hamburguer {
            position: relative;
            left: 130px;
            bottom: 20px;
        }
    }

    @media (min-width:700px) {
        #hamburguer {
            display: none
        }
    }

    .link {
        position: relative;
        top: 20px;
        text-decoration: none;
        color: white
    }
</style>
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
            <div style="width: 50%" class="row">
                <div class="col text-center">
                    <a href="{{ route('principal') }}">
                        <i class="bi bi-6-circle-fill logo"></i>

                    </a>
                </div>

            </div>
            <div style="width: 50%">
                <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                    <ol class="breadcrumb" style="margin-left: 300px;">
                        <ul class="nav justify-content-end">

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cursos.index') }}"><h5 class="link"> Cursos</h5></a>
                            </li>
                            @if (Auth::check())
                                <li class="nav-item">
                                    <a class="nav-link link" style="color: white; font-size:18px">

                                        <i class="bi bi-person"></i> {{ Auth::user()->name }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.logout', Auth::user()->id) }}"><h5 class="link"> Sair</h5></a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><h5 class="link"> Entrar</h5></a>
                                </li>
                            @endif

                          </ul>
                        {{-- @if (Auth::check())
                            <li class="breadcrumb-item"</li>
                            <li class="breadcrumb-item mt-2 ms-4"><a href="{{ route('cursos.index') }}">
                                <div class="dropdown">
                                    <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person"></i> {{ Auth::user()->name }}
                                    </a>

                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Informações da Conta</a></li>
                                      <li><a class="dropdown-item" href="{{ route('user.logout', Auth::user()->id ) }}">Sair</a></li>

                                    </ul>
                                  </div>

                                </a></li>



                        @else
                            <li class="breadcrumb-item ms-4"><a href="{{ route('login') }}">
                                    <h5 class="link"> Entrar</h5>
                                </a></li>
                        @endif --}}
                    </ol>
                </nav>
                {{-- <div class="col-1 text-end mt-3">
                    <a href="{{ route('cursos.index') }}">
                        <h5 class="link">Cursos</h5>
                    </a>
                </div>
                <div class="col-1 text-center mt-3">
                    <a href="{{ route('user.login') }}">
                        <h5 class="link"></i> Entrar</h5>
                    </a>
                </div> --}}
                <div id="hamburguer" class="col-2 ">
                    <button data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample" id="menu" type="button" class="btn btn-outline-light"> <i
                            class="bi bi-list"></i></button>
                    <button data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample" style="display: none" id="close" type="button"
                        class="btn btn-outline-light"> <i class="bi bi-x-lg"></i></button>
                </div>

            </div>
        </div>
    </nav>
</header>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
    </div>
    <div class="offcanvas-body">

        <div class="list-group" style="color: rgb(164, 173, 36); height: 300px">
            <a href="{{ route('cursos.index') }}">
                <button type="button" class="list-group-item list-group-item-action">Cursos</button>
            </a>
            <a href="">
                <button type="button" class="list-group-item list-group-item-action">Configurações</button>
            </a>
            <a href="{{ route('login') }}">
                <button type="button" class="list-group-item list-group-item-action">Login</button>
            </a>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/menu/layout.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

@yield('content')
