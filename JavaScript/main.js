function cadastrar() {
    var dados = $('#cadastrar').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/action_cad_user.php',
            data: dados,

            beforeSend: function() {

                $("#retorno").html("Processo em andamento...");
            }

        })
        .done(function(msg) {

            alert(msg);

        })

    .fail(function() {

        alert("Falha na Inclusao");

    })
    return false;

}