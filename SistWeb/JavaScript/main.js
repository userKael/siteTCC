function apaga_dados() {

    var dados = $('#form-cads').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/apagacad.php',
            data: dados,

            beforeSend: function() {

            }

        })
        .done(function(msg) {

            if (msg == "") {

                alert('Cadastro deletado');
                document.location.reload(true);

            } else {

                alert(msg);

            }

        })

    .fail(function() {

        alert('OPS, algo deu de errado');


    })
    return false;
}

function altera_txt() {

    var dados = $('#form-txt').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/altera_txt.php',
            data: dados,

            beforeSend: function() {

            }

        })
        .done(function(msg) {

            alert(msg);
            document.location.reload(true);

        })

    .fail(function() {

        alert('OPS, algo deu de errado');


    })
    return false;
}