function login() {


    var dados = $('#logar').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/logar.php',
            data: dados,

            beforeSend: function() {

                $("#bt-entrar").html("Por favor, aguarde...");

            }

        })
        .done(function(msg) {

            $("#bt-entrar").html("ENTRAR");

            if (msg == "logado") {

                location.href = "./index.php";

            } else {
                $("#resposta-login").html(msg);
            }


        })

    .fail(function() {


        $("##resposta-login").html("Erro desconhecido");

    })
    return false;

}

function login2() {


    var dados = $('#logar').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/logar.php',
            data: dados,

            beforeSend: function() {

                $("#bt-entrar").html("Por favor, aguarde...");

            }

        })
        .done(function(msg) {

            $("#bt-entrar").html("ENTRAR");

            if (msg == "logado") {

                location.href = "./teste_imc.html";

            } else {
                $("#resposta-login").html(msg);
            }


        })

    .fail(function() {


        $("##resposta-login").html("Erro desconhecido");

    })
    return false;

}