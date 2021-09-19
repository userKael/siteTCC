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