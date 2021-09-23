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

function consulta_txt() {

    var dados = $('#form-busca').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/consulta_txt.php',
            data: dados,

            beforeSend: function() {

            }

        })
        .done(function(msg) {

            var ret;
            var txt;
            ret = isJson(msg)

            if (ret == true) {
                txt = JSON.parse(msg)
                var tabela = '';
                tabela += "<div class='row'>";
                tabela += "<div class='alert alert-success' role='alert'>";
                tabela += "<h4 class='text-center'>ID:" + txt[0].id + "</h4>";
                tabela += "</div>";
                tabela += "<div class='col'>";
                tabela += "<div class='shadow p-3 mb-5 bg-light rounded' style='width: 40pc;'>";
                tabela += "<h4 class='text-center'> Relacionamento</h4>";
                tabela += "<div class='text-center'>";
                tabela += " <input type='hidden' name='id' value='" + txt[0].id + "'>";
                tabela += " <textarea name='texto' cols='80' rows='10'>";
                tabela += txt[0].texto;
                tabela += " </textarea>";
                tabela += " </div>";
                tabela += "<div class='text-center'>";
                tabela += "<button type='button' class='btn btn-success' onclick='altera_txt()'>Alterar</button>";
                tabela += "</div>";
                tabela += "</div>";
                tabela += "</div>";
                tabela += " <div class='col'>";
                tabela += " <div class='shadow p-3 mb-5 bg-light rounded' style='width: 28pc;'>";
                tabela += "<h4 class='text-center'> Recomendações</h4>";
                tabela += "<div class='text-center'>";
                tabela += " <input type='hidden' name='id' value='" + txt[0].id + "'>";
                tabela += " <textarea name='recomenda' cols='54' rows='10'>";
                tabela += txt[0].recomenda;
                tabela += " </textarea>";
                tabela += "</div>";
                tabela += " <div class='text-center'>";
                tabela += "<button type='button' class='btn btn-success' onclick='altera_txt()'>Alterar</button>";
                tabela += "</div>";
                tabela += "</div>";
                tabela += "</div>";
                tabela += "</div>";

                $("#div-cads1").html(tabela);
                $("#resposta-busca").html("Texto Encontrado");

                var i;
                for (i = 2; i < 16; i++) {
                    $("#div-cads" + i + "").hide();
                }
            } else {

                $("#resposta-busca").html(msg);

            }

        })

    .fail(function() {

        alert('OPS, algo deu de errado');


    })
    return false;
}


function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }

    return true;
}