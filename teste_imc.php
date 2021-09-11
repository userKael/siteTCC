<?php session_start();

if (!isset($_SESSION['email'])) {
    header("location: index.php");
    
} else {
?>
    <!DOCTYPE html>
    <html lang="pt-br">
       

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./CSS/estilo.css">
        <link rel="stylesheet" href="./CSS/teste.css">
        <link rel="stylesheet" href="./CSS/responsive.css">
        <script src="./JavaScript/scriptmain.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                var $altura = $("#altura");
                $altura.mask('0.00', {
                    reverse: true
                });
                var $peso = $("#peso");
                $peso.mask('000.0', {
                    reverse: true
                });
            });
        </script>
        <title>GUDER SAUDE - TESTE</title>
    </head>

    <body id="corpo">
  

  
        <div class="shadow-none p-3 mb-5 bg-light rounded" id="progresso-div">
            <header id="progresso-header">
                <div class="position-relative m-4">
                    <div class="progress" style="height: 1px;">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                    <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                    <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
                </div>
            </header>
        </div>
        <div class="titulo-somatotipo">
            <a href="./index.php">
                <button type="button" class="btn btn-outline-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z" />
                    </svg>
                </button>
            </a>
        </div>

        <div class="titulo-somatotipo">
            <h1 style="color:#06396b ;">
                Teste de IMC
            </h1>
            <hr>
        </div>
      

        <div class="container">
            <div class="row">
                <div class="col " id="div-txt-imc">
                    <h5>
                        Texto Explicativo
                    </h5>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex necessitatibus quis non! Fuga enim iure ipsam magni voluptas quibusdam similique doloribus deserunt ab. Ex iusto a, illum eligendi neque fuga! Lorem, ipsum dolor sit amet consectetur adipisicing
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quod, voluptates qui ipsa dolorum id mollitia nam vitae quas alias, consequuntur harum sapiente nostrum doloribus excepturi non ullam. Voluptatum, soluta. elit. Illo
                        provident aut exercitationem voluptatibus ullam? Repudiandae amet
                    </p>

                    <hr>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-4">
                <div class="div-perguntas-imc col">
                    <form action="./PHP/imc.php" method="post" id="form-imc">
                        <div class="div-per form-floating mb-3">
                            <input type="date" class="input-perguntas form-control" id="nascimento" placeholder="name@example.com" name="data_nascimento">
                            <label for="floatingInput">Data de nascimento</label>
                        </div>

                        <div class="div-per form-floating mb-3">
                            <input type="text" class="input-perguntas form-control" id="altura" placeholder="1.40" name="altura">
                            <label for="floatingInput">Altura em M:</label>
                        </div>

                        <div class="div-per form-floating mb-3">
                            <input type="text" class="input-perguntas form-control" id="peso" placeholder="70" name="peso">
                            <label for="floatingInput">Peso em Kg:</label>

                        </div>

                        <div class="div-per form-floating mb-3">
                            <select class="select-perguntas form-select" id="sexo" aria-label="Floating label select example" name="sexo">

                                <option value="f" name="feminino">Feminino</option>
                                <option value="m" name="masculino">Masculino</option>
                            </select>
                            <label for="floatingSelect">Sexo</label>
                        </div>

                        <div class="div-per form-floating mb-3">
                            <select class="select-perguntas form-select" id="rotinas" aria-label="Floating label select example" name="rotina_exercicios">

                                <option value="mode" name="mode">Moderada</option>
                                <option value="sede" name="sede">Sedentaria</option>
                                <option value="inte" name="int">Intensa</option>
                            </select>
                            <label for="floatingSelect">Rotinas de exercícios</label>
                        </div>

                        <div class="div-btn">
                            <button type="button" class="btn-proximo" id="btn-prox" onclick="teste_imc()">Próximo</button>

                            <p id="Resposta-imc">

                            </p>
                        </div>

                    </form>

                </div>

                <div id="div-img-imc" class="col">
                    <img src="./IMGs/Imagem_imc.jpg" alt="" width="190%">
                </div>
            </div>
        </div>
    </body>
    </html>
<?php
}
