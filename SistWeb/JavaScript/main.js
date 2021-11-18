function apaga_dados(id) {

    var dados = $('#form-cads' + id).serialize();
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

function apaga_dados2() {

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
                $("#resposta-busca").html('<div class="spinner-border" role="status"></div>');
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

function consulta_cad(quant) {

    var dados = $('#form-cad-busca').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/consulta_cad.php',
            data: dados,

            beforeSend: function() {
                $("#resposta-busca").html('<div class="spinner-border" role="status"></div>');
            }

        })
        .done(function(msg) {
            var ret;
            var cad;
            ret = isJson(msg)

            if (ret == true) {
                cad = JSON.parse(msg)
                var tabela = '';
                tabela += '<form action="./perfil_user.php" method="post" id="form-cads">';
                tabela += '<div class="shadow p-3 mb-5 bg-light rounded" style="width: 22pc; margin: auto;">';
                tabela += '<h4 class="text-center">' + cad[0].email + '</h4>';
                tabela += '<div class="text-center">';
                tabela += '<table class="table">';
                tabela += '<tbody>';
                tabela += '<tr>';
                tabela += ' <th scope="row">Nome</th>';
                tabela += '<td><input type="text" value="' + cad[0].nome + '" name="nome" disabled></td>';
                tabela += '</tr>';
                tabela += '<tr>';
                tabela += '<th scope="row">Email</th>';
                tabela += ' <td><input type="text" value="' + cad[0].email + '" name="email" disabled></td>';
                tabela += ' <input type="hidden" name="email" value="' + cad[0].email + '">';
                tabela += '</tr>';
                tabela += ' <tr>';
                tabela += ' <th scope="row">Senha</th>';
                tabela += ' <td><input type="password" value="' + cad[0].senha + '" name="senha" disabled></td>';
                tabela += '</tr>';
                tabela += ' </tbody>';
                tabela += ' </table>';
                tabela += ' </div>';
                tabela += '<div class="text-center">';
                tabela += ' <button type="button" class="btn btn-outline-danger" onclick="apaga_dados2()"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">';
                tabela += '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />';
                tabela += '<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />';
                tabela += '</svg>';
                tabela += '</button>';
                tabela += ' <button type="submit" class="btn btn-success">Ver perfil</button>';
                tabela += '</div>';
                tabela += '<button type="button" class="btn btn-success mt-4" style="float: left;" value="Refresh Page" onClick="window.location.reload()"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">  <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z" /> </svg>Voltar</button>'
                tabela += '</div>';
                tabela += '</form>';

                var i;
                for (i = 2; i <= quant; i++) {
                    $("#divs-cads" + i + "").hide();
                }
                $("#divs-cads1").html(tabela);
                $("#resposta-busca").html('<div class="alert alert-success" role="alert">Cadastro Encontrado</div>')


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

function new_cad(quant) {

    var tabela = '';
    tabela += ' <div class="col" style="width: 27pc; margin:auto;">';
    tabela += ' <form method="POST" action="" id="novo-cad">';
    tabela += '  <div class="mb-3">';
    tabela += ' <label for="exampleInputEmail1" class="form-label">Nome</label>';
    tabela += ' <input type="text" class="form-control" name="nome">';
    tabela += '   </div>';
    tabela += '<div class="mb-3">';
    tabela += ' <label for="exampleInputPassword1" class="form-label">Email</label>';
    tabela += ' <input type="email" class="form-control" name="email">';
    tabela += '</div>';
    tabela += '<div class="mb-3 ">';
    tabela += ' <label for="exampleInputPassword1" class="form-label">Senha</label>';
    tabela += ' <input type="password" class="form-control" name="senha">';
    tabela += '  </div>';
    tabela += ' <button type="button" class="btn btn btn-success" onclick="cadastrar()">Cadastrar</button>';
    tabela += ' </form>';
    tabela += '<button type="button" class="btn btn-success mt-4" style="float: left;" value="Refresh Page" onClick="window.location.reload()"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">  <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z" /> </svg>Voltar</button>'
    tabela += ' </div>';





    var i;
    for (i = 2; i <= quant; i++) {
        $("#divs-cads" + i + "").hide();
    }
    $("#divs-cads1").html(tabela);

    return false;

}

function cadastrar() {
    var dados = $('#novo-cad').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/cad_user.php',
            data: dados,

            beforeSend: function() {

            }

        })
        .done(function(msg) {

            if (msg == "Cadastro Realizado com Sucesso!") {

                alert(msg);
                document.location.reload(true);

            } else {

                $("#resposta-busca").html(msg)

            }

        })

    .fail(function() {

        alert('OPS, algo deu de errado');


    })
    return false;
}

function altera_dados() {

    var dados = $('#form-altera-pf').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/altera_dados.php',
            data: dados,

            beforeSend: function() {

                $("#bt-alterar-pf").html('<div class="spinner-border" role="status"></div>');

            }

        })
        .done(function(msg) {

            $("#bt-alterar-pf").html('ALTERAR');

            alert(msg)

        })

    .fail(function() {

        alert('OPS, algo deu de errado');


    })
    return false;
}

function altera_explica() {

    var dados = $('#form-text-explica').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/altera_explica.php',
            data: dados,

            beforeSend: function() {


            }

        })
        .done(function(msg) {


            alert(msg)

        })

    .fail(function() {

        alert('OPS, algo deu de errado');


    })
    return false;
}

function altera_txt_soma(id) {

    var dados = $('#form-txt-somatotipo' + id).serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/altera_txt_somatotipos.php',
            data: dados,

            beforeSend: function() {


            }

        })
        .done(function(msg) {


            alert(msg)

        })

    .fail(function() {

        alert('OPS, algo deu de errado');


    })
    return false;
}

function file_img(id) {

    let foto = document.getElementById('img' + id);
    let arquivo = document.getElementById('input-img' + id);

    foto.addEventListener('click', () => {
        arquivo.click();
    });

    arquivo.addEventListener('change', () => {

        let reader = new FileReader();

        reader.onload = () => {
            foto.src = reader.result;
        }
        reader.readAsDataURL(arquivo.files[0]);
    })

}

function up_foto_soma(id) {

    var formData = new FormData(document.getElementById("up_soma_img" + id));
    $.ajax({
        type: 'POST',
        url: './PHP/altera_img.php',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {

        },
        success: function(msg) {

            alert(msg);


        }
    });


}