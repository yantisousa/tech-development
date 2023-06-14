@foreach ($cursos as $curso)
<div class="col-md-3 mt-3">
    <a href="{{ route('cursos.show', $curso->id) }}">
    <div class="techs">
        <div class="row">
            <div class="col-2 ms-4 mt-3"><img src="{{ asset('assets/img/front-end.png') }}"
                    class="img-thumbnail" alt=""></div>
            <div class="col mt-3" style="color:rgb(0, 0, 0)">
                <b>{{ $curso->areasRelacionamento->nome }}</b>
            </div>
        </div>
        <div class="row">
            <div class="col ms-4 mt-3" style="color:rgb(164, 173, 36)"><b>{{  strtoupper( $curso->nome )}}</b></div>
        </div>
        <div class="row" style="width: 100%">
            <div class="col ms-4 mt-3" style="color:rgb(0, 0, 0)"><b>{{ $curso->desc }}</b></div>
        </div>
    </div>
</a>
</div>
@endforeach
