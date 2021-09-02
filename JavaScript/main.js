function cadastrar() {
    var dados = $('#cadastrar').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/action_cad_user.php',
            data: dados,

            beforeSend: function() {

                $("#bt-cadastar").html("Por favor, aguarde...");

            }

        })
        .done(function(msg) {
            if (msg == "Cadastro Realizado com Sucesso!") {
                $("#resposta").html(msg);
                $("#nome").val("");
                $("#email").val("");
                $("#senha").val("");

                $("#bt-cadastar").html("CADASTRAR");



            } else {
                $("#resposta").html(msg);

                $("#bt-cadastar").html("CADASTRAR");
            }

        })

    .fail(function() {

        $("#resposta").html("Falha ao se cadastar");

    })
    return false;

}