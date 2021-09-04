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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
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
                <form action="./PHP/imc.php" method="post">
                    <div class="div-per form-floating mb-3">
                        <input type="date" class="input-perguntas form-control" id="nascimento" placeholder="name@example.com" name="data_nascimento">
                        <label for="floatingInput">Data de nascimento</label>
                    </div>

                    <div class="div-per form-floating mb-3">
                        <input type="text" class="input-perguntas form-control" id="altura" placeholder="1.40" name="altura">
                        <label for="floatingInput">Altura:</label>
                    </div>

                    <div class="div-per form-floating mb-3">
                        <input type="text" class="input-perguntas form-control" id="peso" placeholder="70" name="peso">
                        <label for="floatingInput">Peso:</label>
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
                            <option value="reco" name="int">Intensa</option>
                        </select>
                        <label for="floatingSelect">Rotinas de exercícios</label>
                    </div>

                    <div class="div-btn">
                        <button type="submit" class="btn-proximo" id="btn-prox">Próximo</button>
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