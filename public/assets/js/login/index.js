let _token = $('#_token').val();
$('#entrar').click(function () { 
    loginLaravelSanctum();    
});
function loginLaravelSanctum(){
    let email = $('#email').val();
    let password = $('#password').val();
    $.ajax({
        type: "post",
        url: "http://127.0.0.1:8000/api/login",
        data: {_token, email, password},
        dataType: "json",
        success: function (response) {
            window.location.href = 'http://127.0.0.1:8000/';
        }
    });
}