<!DOCTYPE html>
<html lang="pt-br">
<?php include './PHP/head.php' ?>
<link rel="stylesheet" href="../Site/CSS/teste.css">

<body id="corpo">

    <header role="navigation" class="fixed" id="cabecalho">
        <nav class="navbar navbar-light bg-light navbar-expand shadow" id="navbar">
            <a href="./conteudo.php">
                <button type="button" class="btn btn-outline-success ms-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z" />
                    </svg>
                </button>
            </a>
            <div class="container" style="justify-content: center;">
                <a class="navbar-brand" href="#">
                    <img src="./IMGs/logo.png" alt="logo" id="logo">
                </a>
            </div>
        </nav>
    </header>
    <div class="titulo-somatotipo">
        <h1 style="color:#06396b ;">
            Teste de IMC
        </h1>
        <hr>
    </div>


    <div class="container">
        <div class="row">
            <div class="col " id="div-txt-imc">
                <textarea name="" id="" cols="160" rows="10">
                <h3>
                    Mas o que é IMC?
                </h3>
                <h5>
                    O Índice de Massa Corporal (IMC), refere-se ao teste feito para identificar por meio de uma fórmula matemática se você está com o peso condizente coma sua altura, e também para certificar que você não está abaixo do peso, com sobrepeso ou até mesmo com índice de obesidade.
                    <br>
                    Por meio do teste a seguir você saberá como está a situação de sua saúde segundo a matemática, mas... a seguir faremos mais testes

                </h5>


                </textarea>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" onclick="altera_explica()">Alterar</button>
                </div>
                <hr class="mb-5">

            </div>
        </div>
    </div>
  
    <div class="titulo-somatotipo mt-5">
        <h1 style="color:#06396b ;">
            Teste de Somatotipo
        </h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col " id="div-txt-ex">
                <textarea name="" id="" cols="70" rows="10">

                <h3>
                    Texto Explicativo
                </h3>
                <h5>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex necessitatibus quis non! Fuga enim iure ipsam magni voluptas quibusdam similique doloribus deserunt ab. Ex iusto a, illum eligendi neque fuga! Lorem,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quod, Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatum Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit a, poss
                </h5>
                </textarea>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" onclick="altera_explica()">Alterar</button>
                </div>
                <hr>

            </div>
            <div class="col  ">
                <img src="https://pratofitness.blog/wp-content/uploads/2019/03/teste-do-pulso-1200x580.png?189db0&189db0" alt="" style="width: inherit;">
            </div>
        </div>
    </div>
</body>

</html>