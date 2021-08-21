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

            $("#resposta").html(msg);

        })

    .fail(function() {

        $("#resposta").html("Falha ao se cadastar");

    })
    return false;

}