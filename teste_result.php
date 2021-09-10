<!DOCTYPE html>
<html lang="pt-br">

<head>
<?php include './PHP/head.php'?>
<link rel="stylesheet" href="./CSS/result.css">
</head>

<body id="corpo">

    <div class="shadow-none p-3 mb-5 bg-light rounded" id="progresso-div">
        <header id="progresso-header">
            <div class="position-relative m-4">
                <div class="progress" style="height: 1px;">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button type="button"
                    class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
                    style="width: 2rem; height:2rem;">1</button>
                <button type="button"
                    class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill"
                    style="width: 2rem; height:2rem;">2</button>
                <button type="button"
                    class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-primary rounded-pill"
                    style="width: 2rem; height:2rem;">3</button>
            </div>
        </header>
    </div>

    <div class="titulo-somatotipo">
        <h1 style="color:#06396b ;">
            Resultado
        </h1>
        <hr>
    </div>

    <div class="container">
        <div class="row row-cols-2 border border-primary" id="div-result">

            <div class="col" id="coluna1">
                <h3>IMC:</h3>
                <h3>Somatotipo:</h3>
                <hr style=" margin-top: 25px; margin-bottom: 30px;">
            </div>

            <div class="col" id="div-col-2">

            </div>

            <div class="col border border-dark" id="div-col-3">
                <div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi et ad aliquam beatae molestias sunt
                    minus quod voluptatibus hic, repudiandae facilis nam, minima quaerat dolor ipsum deleniti, error
                    nemo! Velit?
                </div>
            </div>

            <div class="col" id="div-col-4">

            </div>

        </div>
    </div>
</body>

</html>