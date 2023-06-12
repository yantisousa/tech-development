$(document).ready(() => {
    $('#pesquisa').on('input', () => {
        pesquisa();
    })
    $('#areas').change(() => {
        filtros();
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
