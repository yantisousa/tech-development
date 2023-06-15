let _token = $('#_token').val();
$(document).ready(() => {
    $(".add-modulo").click(() => {
        $('#tabela-modulos').append(`<tr>
        <td><input type="text" ></td>
        <td>
            <span class="badge text-bg-success">
            Salvar
            </span><button style="display: none" class="btn btn-primary">Editar</button>
        </td>
        <td>
            <span class="badge text-bg-danger"><i class="bi bi-x-lg"></i></span>
        </td>
      </tr>`);
    })


})
let teste = $('#modulo-id').val();

// $(`#teste-${teste}`).click(() => {
//     alert(teste);
// })
$(`#edit-${teste}`).click(() => {
    console.log(teste);
    // let nome = $(`#nome-modal-${id}`).val();
    $.ajax({
        type: "put",
        url: `/modulos/update/${id}`,
        data: {_token, nome},
        dataType: "dataType",
        success: function (response) {
            
        }
    });
})
function editModulo(id){
    $('#modulo-id').val(id)
    $(`#nome-modal-${id}`).prop('disabled', false);
    $(`#pincel-${id}`).hide();
    $(`#teste-${id}`).show();
}
function updateModulo(id) {
    let nome = $(`#nome-modal-${id}`).val();
    $.ajax({
        type: "put",
        url: `/modulos/update/${id}`,
        data: {_token, nome},
        success: function (response) {
            $(`#nome-modal-${id}`).val(response.nome);
            console.log(response);
            console.log($(`#nome-modal-${response.id}`));
            $(`#nome-modal-${id}`).prop('disabled', true);
            $(`#pincel-${response.id}`).show();
            $(`#teste-${response.id}`).hide();
            $(`#nome-${response.id}`).text(response.nome);
            $(`#h6-aprender-${response.id}`).text(response.nome);
        }
    });
}