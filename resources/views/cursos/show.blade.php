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
        @media (max-device-width: 600px) {
            #aprendizado {
                width: 100%
            }
        }

        #aprendizado {
            width: 50%
        }

        .container {
            width: 100% !important;
        }
        .card {
            width: 200px;
            height: 100px;
        }
    </style>

    <body>
        <input type="hidden" name="" id="_token" value="{{csrf_token()}}">
        <div class="container">
            <div style="height: 500px" class="row align-items-center text-center">
                <div class="col">
                    <div class="name">
                        <h2 class="title"><strong>Curso de {{ $curso->nome }}</strong></h2>
                    </div>
                </div>
            </div>
            @if(Auth::user()->is_admin == 1)
            <div  class="row align-items-center text-center">
                <div class="col">
                    <div class="card">
                        <div class="list-group">
                            
                            <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#exampleModal">Listagem de módulos</a>
                            <a href="#" class="list-group-item list-group-item-action">Listagem de episódios</a>
                            
                          </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div style="background-color: #D7CF2D; height: 150px; width: 100%">
            <div class="row text-center">
                <div class="col mt-5">
                    <b>Episódios: {{ $cursoCountEp->epsodios_relacionamento_count }}</b>
                </div>
                <div class="col mt-5">
                    <b>Tempo: {{ $horaTotal }} horas</b>
                </div>
                <div class="col mt-5">
                    <b>Última Atualização: {{ date('d/m/Y', strtotime($curso->updated_at)) }}</b>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row" style=" 150px; width: 100%">
                <div class="col mt-5" style="color: #ffffff">
                    <b>
                        <h3>O que é {{ $curso->nome }}?</h3>
                    </b>
                </div>
            </div>
            <div class="row " id="aprendizado" style=" 150px;">
                <div class="col mt-5" style="color: #ffffff">
                    <b>
                        <h6>{{ $curso->aprendizado }}</h6>
                    </b>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row" style=" 150px; width: 100%">
                <div class="col mt-5" style="color: #ffffff">
                    <b>
                        <h3>O que você vai aprender?</h3>
                    </b>
                </div>
            </div>
            <div class="row " id="aprendizado" style=" 150px;">
                <div class="col mt-5" style="color: #ffffff">
                    <b>
                        <ul>
                            @foreach ($modulos as $modulo)
                                <li><h6 id="h6-aprender-{{$modulo->id}}">{{ $modulo->nome }}</h6></li>
                            @endforeach
                        </ul>
                    </b>
                </div>
            </div>
        </div>
        <div class="container mt-5" style="background-color: #D7CF2D; width: 100%; border-radius:10px">
            <div class="row ms-2 mt-3">
                <h3>Aulas</h3>
            </div>
            <div class="row ms-2 mt-3">
                <div class="accordion" id="accordionExample">
                    @foreach ($modulos as $modulo)
                        <div class="col-11">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $modulo->id }}" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <span id="nome-{{$modulo->id}}">{{ $modulo->nome }}</span>
                                    </button>
                                </h2>
                                <div id="collapse-{{ $modulo->id }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ol>
                                            @foreach ($modulo->epsodiosRelacionamento as $ep)
                                                <li>{{ $ep->nome }}</li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row ms-2 mt-5">
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row align-items-end mt-6">
                    <div style="color:white" class="col text-center">
                        <span style="color:#ddda24"> Termos de uso</span>
                        <h6> Todos os direitos reservados © 2023</h6>
                        <h6>Yan Emanuel</h6>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Módulos</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <button class="btn btn-success add-modulo">Adicionar Módulo</i></button>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col" >Opções</th>
                  </tr>
                </thead>
                <tbody id="tabela-modulos">
                    
             @foreach ($modulos as $modulo)
                  <tr>
                    <td><input id="nome-modal-{{$modulo->id}}" type="text" disabled value="{{$modulo->nome}}"></td>
                    <td>
                        <span id="pincel-{{$modulo->id}}" onclick="editModulo({{$modulo->id}})" class="badge text-bg-warning">
                        <i class="bi bi-pencil"></i>
                        </span><button onclick="updateModulo({{$modulo->id}})" style="display: none" id="teste-{{$modulo->id}}" class="btn btn-primary">Editar</button>
                    </td>
                    <td>
                        <span class="badge text-bg-danger"><i class="bi bi-x-lg"></i></span>
                    </td>
                  </tr>
            @endforeach
                </tbody>
            </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    </body>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/cursos/show.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    </html>
@endsection
