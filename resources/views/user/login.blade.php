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
            height: 450px;
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
                        <h2><b>Login</b></h2>
                    </div>

                    <form action="{{ route('user.auth') }}" method="POST" class="mt-5">
                        @csrf
                        <div class="mb-3" style="color: black">
                            <label class="form-label"><b>Email</b> </label>
                            <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3" style="color: black">
                            <label for="exampleInputPassword1" class="form-label"><b>Senha</b></label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button style="background-color: black; border: none" type="submit"
                            class="btn btn-primary text-center">Entrar</button>
                    </form>
                    <div class="col text-center text-black mt-3">
                        <a href=""><button style="background-color: #ddda24; border: none" type="submit"
                            class="btn btn-primary text-center text-black">Não tenho conta</button></a>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
@endsection
