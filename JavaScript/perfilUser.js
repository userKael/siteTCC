function arquivo_file() {

    let foto = document.getElementById('img-foto');
    let arquivo = document.getElementById('formFileSm');

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

function up_foto() {

    var formData = new FormData(document.getElementById("up_perfil_img"));
    $.ajax({
        type: 'POST',
        url: './PHP/upimg.php',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {

        },
        success: function(msg) {

            $("#resposta-img").html(msg);


        }
    });


}

function del_foto() {

    var formData = new FormData(document.getElementById("up_perfil_img"));
    $.ajax({
        type: 'POST',
        url: './PHP/delimg.php',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {

        },
        success: function(msg) {

            $("#resposta-img2").html(msg);


        }
    });

}

function alter_foto() {

    var formData = new FormData(document.getElementById("up_perfil_img"));
    $.ajax({
        type: 'POST',
        url: './PHP/alterimg.php',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {

        },
        success: function(msg) {

            $("#resposta-img").html(msg);

        }
    });

}

function time(time) {

    setTimeout("location.reload(true);", time);

}

function altera_dados() {

    var dados = $('#form-altera').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/altera_dados.php',
            data: dados,

            beforeSend: function() {

                $("#bt-alterar").html('<div class="spinner-border" role="status"></div>');

            }

        })
        .done(function(msg) {

            $("#bt-alterar").html('Alterar');

            $("#resposta-altera").html(msg);

        })

    .fail(function() {

        $("#Resposta-imc").html('OPS, algo deu de errado');


    })
    return false;
}


function apaga_dados() {

    var dados = $('#form-deleta').serialize();
    $.ajax({
            method: 'POST',
            url: './PHP/apaga_dados.php',
            data: dados,

            beforeSend: function() {


            }

        })
        .done(function(msg) {

            if (msg == "") {

                location.href = "./index.php";

            } else {

                alert(msg);

            }

        })

    .fail(function() {

        alert('OPS, algo deu de errado');


    })
    return false;
}