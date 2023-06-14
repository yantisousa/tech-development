let _token = $('#_token').val();
$(document).ready(() => {
    $('#pesquisa').on('input', () => {
        pesquisa();
    })
    $('#areas').change(() => {
        filtros();
    })
    $('#criar').click(() => {
        addCursos();
    })
})
function pesquisa() {
    let pesquisa = $('#pesquisa').val();
    $.ajax({
        type: "get",
        url: "/cursos/pesquisa",
        data: {pesquisa},
        success: function (response) {
            $('#techs').html(response);
        }
    });
 }
function filtros(){
    let area = $('#areas').val();
    $.ajax({
        type: "get",
        url: "/cursos/filtros",
        data: {area},
        success: function (response) {
            $('#techs').html(response);
        }
    });
}

function addCursos()
{
    dados = {
        _token,
        name: $('#nome').val(),
        desc: $('#desc').val(),
        areas_id: $('#area').val(),
        aprendizado: $('#aprendizado').val(),
        linguagem: $('#linguagem').val()
    }
    $.ajax({
        type: "post",
        url: "/cursos/store",
        data: dados,
        success: function (response) {
            let nome = response.nome.toUpperCase();
           
            $('#techs').append(`<div class="col-md-3 mt-3">
            <a href="http://127.0.0.1:8000/cursos/show/${response.id}">
            <div class="techs">
                <div class="row">
                    <div class="col-2 ms-4 mt-3"><img src="{{ asset('assets/img/front-end.png') }}"
                            class="img-thumbnail" alt=""></div>
                    <div class="col mt-3" style="color:rgb(0, 0, 0)">
                        <b> ${response.areas_relacionamento.nome} </b>
                    </div>
                </div>
                <div class="row">
                    <div class="col ms-4 mt-3" style="color:rgb(164, 173, 36)"><b>   ${nome} </b></div>
                </div>
                <div class="row" style="width: 100%">
                    <div class="col ms-4 mt-3" style="color:rgb(0, 0, 0)"><b> ${response.desc} </b></div>
                </div>
            </div>
        </a>
        </div>`)
        $('#modal-criar').modal('hide');
    }
    });
}