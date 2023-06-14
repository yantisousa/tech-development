@extends('template.layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <style>
        .container {
            background-color: #ddda24;
            margin-top: 200px;
            width: 500px;
            height: 500px;
            border-radius: 20px;
        }

        @media (max-width: 600px) {
            .container {

                margin-top: 200px;
                width: 300px;
                height: 400px;
            }


        }
    </style>

    <body>
        <section>
            <div class="container ">
                <div class="full row align-items-center ">
                    <div class="col text-center text-black mt-3">
                        <h2><b>Cadastro</b></h2>
                    </div>
                    <form action="{{ route('user.store') }}" method="POST" class="mt-5">
                        @csrf
                        <div class="mb-3" style="color: black">
                            <label class="form-label"><b>Nome</b> </label>
                            <input name="nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3" style="color: black">
                            <label class="form-label"><b>Email</b> </label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3" style="color: black">
                            <label for="exampleInputPassword1" class="form-label"><b>Senha</b></label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button style="background-color: black; border: none" type="submit"
                            class="btn btn-primary text-center">Criar</button>
                    </form>
                    <div class="col text-center text-black mt-3">
                        <a href="{{route('user.create')}}"><button style="background-color: #ddda24; border: none" type="submit"
                            class="btn btn-primary text-center text-black">Já tenho conta</button></a>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
@endsection
