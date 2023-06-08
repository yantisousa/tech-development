<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <div style="width: 70%" class="row mx-auto">
                    <div class="col ">
                        <i class="bi bi-6-circle-fill logo"></i>
                    </div>
                    <div class="col text-end mt-3">
                        <a href="">

                            <h4 class="link">Cursos</h4>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="section-1">
        <div class="container ">
            <div style="height: 500px" class="row align-items-center text-center">
                <div class="col">
                    <div class="name">
                        <h2 class="title"><strong>Tech Development</strong></h2>
                    </div>
                    <h3><strong class="desc">Cursos de programação onde quiser e onde estiver.</strong></h3>
                    <button class="btn"
                        style="background-color: #422d55; color: rgb(255, 255, 255)">Matricule-se</button>
                </div>

            </div>
            <div class="row" id="techs" style="opacity: 1">
                <div class="col-md-4 mt-3" >
                    <div class="techs">
                        <div class="row">
                            <div class="col-2 ms-4 mt-3" ><img src="{{ asset('assets/img/front-end.png') }}" class="img-thumbnail" alt=""></div>
                            <div class="col mt-3" style="color:white">FRONT-END</div>
                        </div>
                        <div class="row">
                            <div class="col ms-4 mt-3" style="color:white">HTML, CSS, JAVASCRIPT E REACT.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  mt-3" >
                    <div class="techs">
                        <div class="row">
                            <div class="col-2 ms-4 mt-3" ><img src="{{ asset('assets/img/encriptacao.png') }}" class="img-thumbnail" alt=""></div>
                            <div class="col mt-3" style="color:white">BACK-END</div>
                        </div>
                        <div class="row">
                            <div class="col ms-4 mt-3" style="color:white">PHP, LARAVEL E MYSQL.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  mt-3" >
                    <div class="techs">
                        <div class="row">
                            <div class="col-2 ms-4 mt-3" ><img src="{{ asset('assets/img/front-end.png') }}" class="img-thumbnail" alt=""></div>
                            <div class="col mt-3" style="color:white">FULL-STACK</div>
                        </div>
                        <div class="row">
                            <div class="col ms-4 mt-3" style="color:white">HTML, CSS, JAVASCRIPT, REACT, VUE, PHP, LARAVEL E MYSQL.</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="container text-center">
            <div style="height: 500px" class="row align-items-center">
                <div class="col-md-4 mt-4 text-center" style="font-size: 40px">
                    <div class="text mt-4">
                        <i class="bi bi-person"></i><br>
                        <span id="contador-1">0</span> + <br>
                        <span>Alunos</span>
                    </div>
                </div>
                <div class="col-md-4 mt-4 text-center" style="font-size: 40px">
                    <div class="text mt-4">
                        <i class="bi bi-pc-display"></i><br>
                        <span id="contador-2">0</span> + <br>
                        <span>Cursos</span>
                    </div>
                </div>
                <div class="col-md-4 mt-4 text-center" style="font-size: 40px">
                    <div class="text mt-4">
                        <i class="bi bi-file-earmark"></i><br>
                        <span id="contador-3">0</span> + <br>
                        <span>Formações</span>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <section class="section-3">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                </div>
            </div>
            <div class="row mt-4 feedback" style="opacity: 0">
                <div class="col-md-4 mt-4">
                    <div class="card">
                        {{-- Informações --}}
                        <div class="row">
                            <div class="col-2 ms-4 mt-3" style="font-size: 30px; color: white">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <div class="col mt-4" style="color: rgb(173, 173, 173)">
                               <h5> Yan Emanuel de Sousa Pereira</h5>
                            </div>
                        </div>
                        {{-- Descrição --}}
                        <div class="row">
                            <div class="col ms-3 mt-2 " style="color:rgba(66,97,102,1)">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus efficitur sapien in efficitur. Morbi elit risus, faucibus quis lorem
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card">
                        {{-- Informações --}}
                        <div class="row">
                            <div class="col-2 ms-4 mt-3" style="font-size: 30px; color: white">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <div class="col mt-4" style="color: rgb(173, 173, 173)">
                               <h5> Yan Emanuel de Sousa Pereira</h5>
                            </div>
                        </div>
                        {{-- Descrição --}}
                        <div class="row">
                            <div class="col ms-3 mt-2 " style="color:rgba(66,97,102,1)">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus efficitur sapien in efficitur. Morbi elit risus, faucibus quis lorem
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card">
                        {{-- Informações --}}
                        <div class="row">
                            <div class="col-2 ms-4 mt-3" style="font-size: 30px; color: white">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <div class="col mt-4" style="color: rgb(173, 173, 173)">
                               <h5> Yan Emanuel de Sousa Pereira</h5>
                            </div>
                        </div>
                        {{-- Descrição --}}
                        <div class="row">
                            <div class="col ms-3 mt-2 " style="color:rgba(66,97,102,1)">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus efficitur sapien in efficitur. Morbi elit risus, faucibus quis lorem
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <div class="container" style="height: 20vh">
            <div class="row align-items-end mt-6">
                <div class="col text-center">
                        Termos de uso
                    <h6> Todos os direitos reservados © 2023</h6>
                    <h6>Yan Emanuel</h6>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
</body>

</html>
