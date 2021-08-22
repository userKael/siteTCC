function cadastrar() {
    var dados = $('#cadastrar').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/action_cad_user.php',
            data: dados,

        })
        .done(function(msg) {

            $("#resposta").html(msg);

        })

    .fail(function() {

        $("#resposta").html("Falha ao se cadastar");

    })
    return false;

}