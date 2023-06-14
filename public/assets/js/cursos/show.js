let _token = $('#_token').val();
$(document).ready(() => {
    $('#editar').click(function() { 
        let id = $('#modulo-id').val();      
        editModulo(id);
    });
})
let id = $('#modulo-id').val();
$(`#edit-${id}`).click(() => {
    console.log(id);
    let nome = $(`#nome-modal-${id}`).val();
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
    $('#modulo-id').val(id);
    $(`#nome-modal-${id}`).prop('disabled', false);
    $(`#pincel-${id}`).hide();
    $(`#edit-${id}`).show();
}