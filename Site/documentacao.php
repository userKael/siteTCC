<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include './PHP/head.php' ?>
    <title>GUDER SAUDE - DOCUMENTAÇÃO</title>
</head>

<body id="corpo">
    <?php include './PHP/cabecalho.php' ?>

    <div id="integrantes">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="titulo" style="margin-top: 20px;">
                        <h4>Integrantes do Grupo</h4>
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Kael Alves de Sousa</th>
                            </tr>
                            <tr>
                                <th scope="row">Nykollas Eduardo Lira Miguel</th>
                            </tr>
                            <tr>
                                <th scope="row">Eduardo Souza</th>
                            </tr>
                            <tr>
                                <th scope="col">Adryel Porto Zamin</th>
                            </tr>
                            <tr>
                                <th scope="row">Luigi Cauã Dias Pereira</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <div id="titulo" style="margin-top: 20px;">
                        <h4>Tema</h4>
                    </div>
                    <h6 style="text-align: justify;">
                        Construção de um site para <br> conhecimento do corpo através do<br> biotipo e IMC.
                    </h6>
                </div>
                <div class="col">
                    <div id="titulo" style="margin-top: 20px;">
                        <h4>Resumo</h4>
                    </div>
                    <h6 style="text-align: justify;">
                        Com o desenvolvimento de um site que visa como aprendizado a descoberta do IMC e do respectivo biotipo do usuário, será feito um sistema onde possam calcular tais propostas e se questionarem se devem ou não procurarem ajuda médica, assim ganhando aprendizado
                        sobre seu próprio corpo, seus resultados serão armazenados em seu perfil, para aos que quiserem, observarem sua evolução.

                    </h6>
                </div>
            </div>
        </div>
    </div>
    <div id="titulo" style="margin-top: 30px;">
        <h1 class="text-center">Rascunho de Telas:</h1>
    </div>
    <div id="rascunhos">
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner border border-success border-3 rounded-3">
                <div class="carousel-item active">
                    <img src="./IMGs/index.png" class="d-block w-100" alt="INDEX">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">1 - INDEX tela antiga :(</h5>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./IMGs/login2.png" class="d-block w-100" alt="LOGIN ">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">2- LOGIN </h5>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./IMGs/login.png" class="d-block w-100" alt="LOGIN ">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">3- LOGIN2 </h5>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./IMGs/Cadastro.png" class="d-block w-100" alt="CADASTRO">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">4- CADASTRO </h5>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./IMGs/Dicas_exercicio.png" class="d-block w-100" alt="DICAS DE EXERCÍCIO">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">5- DICAS DE EXERCÍCIO </h5>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./IMGs/Cada_biotipo.png" class="d-block w-100" alt="SOBRE CADA BIOTIPO">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">6- SOBRE CADA BIOTIPO </h5>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./IMGs/Perfil_usuario.png" class="d-block w-100" alt=".PERFIL DO USUARIO.">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">7- PERFIL DO USUARIO </h5>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./IMGs/Sobre_nos.png" class="d-block w-100" alt="SOBRE NÓS.">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">8- SOBRE NÓS </h5>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./IMGs/teste_biotipo.png" class="d-block w-100" alt="SOBRE NÓS.">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">9- Teste-Somatotipo </h5>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./IMGs/Teste_imc.png" class="d-block w-100" alt="SOBRE NÓS.">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">10- Teste-IMC </h5>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./IMGs/teste_resultado.png" class="d-block w-100" alt="SOBRE NÓS.">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">12- Resultado-Teste</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div id="titulo" style="margin-top: 30px;">
        <h1 class="text-center">Dicionário de dados</h1>
    </div>

    <div id="rascunhos">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner border border-success border-3 rounded-3">
                <div class="carousel-item active">
                    <img src="./IMGs/dicionario_dados.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div id="rascunhos">
        <div class="mb-3">
            <h1 class="text-center">Estrutura do banco</h1>
            <form action="../BancoGuder_Saude/siteTCC - Guder_saude.sql">
                <div class="vstack gap-2 col-md-5 mx-auto">
                    <button type="submit" class="btn btn-outline-success">Baixar código</button>
                </div>
                <br>
            </form>
            <div class="vstack gap-2 col-md-5 mx-auto">
                <button type="submit" class="btn btn-outline-success" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Ver código</button>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <textarea name="" id="" cols="20" rows="66">
                        create database guder_saude;
                        use guder_saude;
                        drop database guder_saude;

                        create table cadastro(
                        email varchar(30) not null primary key,
                        senha varchar(15) not null,
                        nome varchar(40) not null
                        );

                        create table teste(
                        id int not null primary key auto_increment,
                        peso decimal(4,1) not null,
                        altura decimal(3,2) not null,
                        data_nascimento date not null,
                        sexo enum ('Feminino', 'Masculino') not null,
                        data_teste date not null,
                        contato_cadastro varchar(30) not null,
                        foreign key (contato_cadastro) references cadastro(email)
                        on update cascade
                        on delete cascade
                        );

                        create table result_teste(
                        id int not null primary key auto_increment,
                        imc varchar (100) not null,
                        somatotipo enum('Endomorfo', 'Mesomorfo', 'Ectomorfo') not null,
                        contato_cadastro varchar(30) not null,
                        foreign key (contato_cadastro) references cadastro(email)
                        on update cascade
                        on delete cascade
                        );

                        create table img_perfil(
                        id int not null primary key auto_increment,
                        imagem varchar(40) not null,
                        contato_cadastro varchar(30) not null unique,
                        foreign key (contato_cadastro) references cadastro(email)
                        on update cascade
                        on delete cascade
                        );

                        create table text_result(
                        id int primary key,
                        texto text not null
                        );

                        insert into text_result values ('1','ectomorfo - IMC baixo','ectomorfo - IMC baixo r');
                        insert into text_result values ('2','ectomorfo - IMC normal','ectomorfo - IMC normal r');
                        insert into text_result values ('3','ectomorfo - IMC sobrepeso','ectomorfo - IMC sobrepeso r');
                        insert into text_result values ('4','ectomorfo - IMC obesidade','ectomorfo - IMC obesidade r');
                        insert into text_result values ('5','ectomorfo - IMC sobrepeso musculos','ectomorfo - IMC sobrepeso musculos r');

                        insert into text_result values ('6','mesomorfo - IMC baixo','mesomorfo - IMC baixo r');
                        insert into text_result values ('7','mesomorfo - IMC normal','mesomorfo - IMC normal r');
                        insert into text_result values ('8','mesomorfo - IMC sobrepeso','mesomorfo - IMC sobrepeso r');
                        insert into text_result values ('9','mesomorfo - IMC obesidade','mesomorfo - IMC obesidade r');
                        insert into text_result values ('10','mesomorfo - IMC sobrepeso musculos','mesomorfo - IMC sobrepeso musculos r');

                        insert into text_result values ('11','endomorfo - IMC baixo','endomorfo - IMC baixo r');
                        insert into text_result values ('12','endomorfo - IMC normal','endomorfo - IMC normal r');
                        insert into text_result values ('13','endomorfo - IMC sobrepeso','endomorfo - IMC sobrepeso r');
                        insert into text_result values ('14','endomorfo - IMC obesidade','endomorfo - IMC obesidade r');
                        insert into text_result values ('15','endomorfo - IMC sobrepeso musculos','endomorfo - IMC sobrepeso musculos r');
                                                

                        </textarea>
            </div>
        </div>
    </div>
    </div>
    <div id="titulo" style="margin-top: 30px;">
        <h1 class="text-center">Sprints:</h1>
    </div>
    <div id="sprints">
        <h3>
            Semana 11/08->18/08 v01
        </h3>
        <h6>
            Rascunho das telas feita no figma;<br> Estilização da tela inicial, login e cadastro, usando o bootstrap;<br> Estrutura do banco em mysql temporaria feita;<br> Tela de login alterada;

        </h6>
        <h3>
            Semana 19/08->25/08 v02
        </h3>
        <h6>
            Tela do perfil do usuário feita;<br> Back-end do cadastro realizado;<br>Campo 'idade' da tabela 'dados_teste', alterado para 'data_nascimento';<br>Campo 'altura' da tabela 'dados_teste', teve o tipo mudado para 'decimal(2,2)';

        </h6>
        <h3>
            Semana 26/08->02/09 v03
        </h3>
        <h6>
            Tela de teste do Biotipo feita; <br> Tela teste de imc feita; <br> Back-end de login com session feita; <br> Texto introdutivo temporario feito; <br> 3 perguntas do questionario incrementada; <br> Inicio do sistema de teste, com os dados de
            IMC já indo para o banco de dados; <br> Houve nescidade de modificar o banco de dados, dividindo a tabela 'dados_teste', em duas tabelas 'teste' e 'result_teste';
        </h6>
        <h3>
            Semana 03/09->09/09 v04
        </h3>
        <h6>
            Criação da tabela 'img_perfil' no banco de dados, para armazenamento da foto de perfil; <br>Sistema crud na para a foto de perfil realizado; <br> Estilização da tela de somatotipos feita;<br>

        </h6>
        <h3>
            Semana 10/09->16/09 v05
        </h3>
        <h6>
            Inclusão nos campos com chave estrangeira 'on update cascade';<br> Crud de imagens agora feita com Jquery; <br> Dados do usuario agora podem ser alterados e excluidos;<br> Calculo do teste e tela de resultados, todos já funcionando;<br> Histórico de testes feito;
        </h6>
        <h3>
            Semana 17/09->22/09 v06
        </h3>
        <h6>
            Incio do sistema web; <br> Deletar cadastros do sistema web feito; <br> tabela 'text_result' criada para armazenar os textos dos resultados; <br> Sistema de resultados buscando no banco de dados realizada; <br> Crud de Alteração e consulta dos textos de resultados realizado;<br> Consulta e alteração de textos específicos agora é possível 

        </h6>
        <h3>
            Semana 23/09->7/10 v07
        </h3>
        <h6>
           Alteração de textos de resultado no SistemaWeb finalizado; <br> Cadastro e exclusão de usuarios no SistWeb agora é possivel; <br> Busca de um cadastro especifico feita; <br> Tela index repaginada; <br> Opção de imprimir Histórico feita; <br> Grafico com o peso do usuario ao passar dos testes; <br> Texto instrodutivo realizado
        </h6>
    </div>
    <footer id="rodape">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <p style="padding-top: 10px;">© 2021 Guder Saúde - Todos os direitos reservados</p>
                <a class="nav-link" href="./index.php">Voltar</a>
            </div>
        </nav>
    </footer>
</body>

</html>