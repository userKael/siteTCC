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

function teste_imc() {
    var dados = $('#form-imc').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/imc.php',
            data: dados,

            beforeSend: function() {

                $("#Resposta-imc").html('<div class="spinner-border" role="status"></div>');

            }

        })
        .done(function(msg) {

            if (msg == 'feito') {

                location.href = "./teste_biotipo.php";

            } else {

                $("#Resposta-imc").html(msg);

            }

        })

    .fail(function() {

        $("#Resposta-imc").html('OPS, algo deu de errado');


    })
    return false;
}

function pergunta(id, id2) {

    let li = document.getElementById(id);
    let input = document.getElementById(id2);

    li.addEventListener('click', () => {
        input.click();
    });


}