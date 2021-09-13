<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include './PHP/head.php' ?>
    <link rel="stylesheet" href="./CSS/result.css">
</head>

<body id="corpo">

    <div class="shadow-none p-3 mb-5 bg-light rounded" id="progresso-div">
        <header id="progresso-header">
            <div class="position-relative m-4">
                <div class="progress" style="height: 1px;">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">3</button>
            </div>
        </header>
    </div>

    <div class="titulo-somatotipo">
        <h1 style="color:#06396b ;">
            Resultado
        </h1>
        <hr>
    </div>

    <div class="container" id="div-container">
        <div class="row row-cols-2 border border-primary" id="div-result">

            <div class="col" id="div-col-1">
                <h3 class="H3-col-1">IMC:</h3>
                <h3 class="H3-col-1">Somatotipo:</h3>
                <hr style=" margin-top: 25px; margin-bottom: 30px;">
            </div>

            <div class="col" id="div-col-2" style="background-color: gray;">

            </div>

            <div class="col" id="div-col-3">
                <div class="border border-dark" id="relaciona-result">
                   <h5 style="margin: 10px;">Relacionando resultados</h5>
                </div>
            </div>

            <div class="col" id="div-col-4">

            </div>

        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end" id="btn-volt-pg">
            <button class="btn btn-primary" type="button">Voltar para Home</button>
        </div>

    </div>
</body>

</html>