<?php 
session_start();

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
        <link rel="stylesheet" href="./CSS/teste1.css">
        <link rel="stylesheet" href="./CSS/responsive.css">
        <script src="./JavaScript/scriptmain.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
         
</head>
<title>GUDER SAÚDE - TESTE SOMATOTIPO</title>

<body id="corpo">
    <div class="shadow-none p-3 mb-5 bg-light rounded" id="progresso-div">
        <header id="progresso-header">
            <div class="position-relative m-4">
                <div class="progress" style="height: 1px;">
                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
            </div>
        </header>
    </div>
    <div class="titulo-somatotipo">
        <h1>
            Teste de Somatotipo
        </h1>
        <hr>
    </div>

    <div class="container">
        <div class="row">
            <div class="col " id="div-txt-ex">
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
            <div class="col  ">
                <img src="https://pratofitness.blog/wp-content/uploads/2019/03/teste-do-pulso-1200x580.png?189db0&189db0" alt="" style="width: inherit;">
            </div>
        </div>
    </div>

    <form action="" method="post">
        <div class="container" style="margin-top: 90px;">
            <div class="row row-cols-3" style="--bs-gutter-x: 7.5rem;">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.lance.com.br/files/article_main/uploads/2020/10/14/5f877029190dc.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Opção 1.</p>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="ecto">
                            <label class="form-check-label" for="flexRadioDefault1">
                           
                          </label>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.lance.com.br/files/article_main/uploads/2020/10/14/5f877029190dc.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Opção 2.</p>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="meso">
                            <label class="form-check-label" for="flexRadioDefault1">
                            
                          </label>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.lance.com.br/files/article_main/uploads/2020/10/14/5f877029190dc.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Opção3.</p>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="endo">
                            <label class="form-check-label" for="flexRadioDefault1">
                        </label>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div id="div-perguntas">
            <div class="shadow p-3 mb-5 bg-light rounded">
                <h4 class="text-center">
                    Questionario
                </h4>

                <ul class="q-items list-group mt-4 mb-4 ?>">
                    <li class="q-field list-group-item">
                        <strong>1. Sempre escuto as pessoas me dizerem:</strong>
                        <br>
                        <ul class='list-group mt-4 mb-4'>

                            <li class="answer list-group-item list-group-item p-pointer" onclick="pergunta('li1','input1')" id="li1">
                                <label class="p-pointer"><input type="radio" name="pergunta1" value="1" class="p-pointer" id="input1"> Que preciso "Engordar"</label>
                            </li>

                            <li class="answer list-group-item list-group-item p-pointer" onclick="pergunta('li2','input2')" id="li2">
                                <label class="p-pointer"><input type="radio" name="pergunta1" value="2" class="p-pointer" id="input2">  Que preciso "Emagrecer"</label>
                            </li>

                            <li class="answer list-group-item list-group-item p-pointer" onclick="pergunta('li3','input3')"  id="li3">
                                <label class="p-pointer"><input type="radio" name="pergunta1" value="3" class="p-pointer" id="input3">  Que eu estava bem</label>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="q-items list-group mt-4 mb-4 ?>">
                    <li class="q-field list-group-item">
                        <strong>2. Considero meu metabolismo:</strong>
                        <br>
                        <ul class='list-group mt-4 mb-4'>

                            <li class="answer list-group-item list-group-item p-pointer" onclick="pergunta('li4','input4')" id="li4">
                                <label class="p-pointer"><input type="radio" name="pergunta2" value="1" class="p-pointer" id="input4"> Lento</label>
                            </li>

                            <li class="answer list-group-item list-group-item p-pointer" onclick="pergunta('li5','input5')" id="li5">
                                <label class="p-pointer"><input type="radio" name="pergunta2" value="2" class="p-pointer" id="input5"> Normal</label>
                            </li>

                            <li class="answer list-group-item list-group-item p-pointer" onclick="pergunta('li6','input6')"  id="li6">
                                <label class="p-pointer"><input type="radio" name="pergunta2" value="3" class="p-pointer" id="input6"> Rapido</label>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="q-items list-group mt-4 mb-4 ?>">
                    <li class="q-field list-group-item">
                        <strong>3. Meu corpo tem tendência a: </strong>
                        <br>
                        <ul class='list-group mt-4 mb-4'>

                          
                           <li class="answer list-group-item list-group-item p-pointer" onclick="pergunta('li7','input7')" id="li7">
                                <label class="p-pointer"><input type="radio" name="pergunta3" value="1" class="p-pointer" id="input7"> Armazenar gordura      </label>
                            </li>

                            <li class="answer list-group-item list-group-item p-pointer" onclick="pergunta('li8','input8')"  id="li8">
                                <label class="p-pointer"><input type="radio" name="pergunta3" value="3" class="p-pointer" id="input8"> Sempre ficar magro     </label>
                            </li>

                            <li class="answer list-group-item list-group-item p-pointer" onclick="pergunta('li9','input9')"  id="li9">
                                <label class="p-pointer"><input type="radio" name="pergunta3" value="3" class="p-pointer" id="input9"> Ficar magro e musculoso</label>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="div-btn">
                    <button type="submit" class="btn-proximo" id="btn-prox">Finalizar</button>
                </div>

            </div>
        </div>
    </form>

</body>
</html>





<?php 
}
