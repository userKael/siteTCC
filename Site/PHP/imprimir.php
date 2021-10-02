<?php
session_start();

$email = $_SESSION['email'];

include './conexaobd.php';
require_once '../dompdf/autoload.inc.php';
//include_once './ClassUsuario.php';
//$cad = new Usuario();
use Dompdf\Dompdf;
$dompdf = new Dompdf();


try{

    $result = $con->prepare("SELECT * FROM result_teste WHERE contato_cadastro = ?");
    $result->bindParam(1, $email);
    $result->execute();

    $teste = $con->prepare("SELECT * FROM teste WHERE contato_cadastro = ?");
    $teste->bindParam(1, $email);
    $teste->execute();

    $tabela ='';
    $tabela .= '<table class="table table-bordered border-primary">';
    $tabela .= ' <thead>';
    $tabela .= '<tr>';
    $tabela .= '<th scope="col">IMC</th>';
    $tabela .= '<th scope="col">Somatótipo</th>';
    $tabela .= '<th scope="col">Altura</th>';
    $tabela .= '<th scope="col">Idade</th>';
    $tabela .= '<th scope="col">Kg</th>';
    $tabela .= '<th scope="col">Sexo</th>';
    $tabela .= '<th scope="col">Data</th>';
    $tabela .= '</tr>';
    $tabela .= '</thead>';
    $tabela .= '<tbody>';

    while($dado = $result->fetch(PDO::FETCH_OBJ)){
          $dado2 = $teste->fetch(PDO::FETCH_OBJ);
       // $idade = $cad->idade($dado->data_nascimento);

        $tabela .= '<tr>';
        $tabela .= '<td>'.$dado->imc.'</td>';
        $tabela .= '<td>'.$dado->somatotipo.'</td>';
        $tabela .= '<td>'.$dado2->altura.'</td>';
        $tabela .= '<td>'.$dado->data_nascimento.'</td>';
        $tabela .= '<td>'.$dado2->peso.'</td>';
        $tabela .= '<td>'.$dado2->sexo.'</td>';
        $tabela .= '<td>'.$dado2->data_teste.'</td>';
        $tabela .= '</tr>';
    }
    $tabela .= '</tbody>';
    $tabela .= '</table>';

    $dompdf->load_Html('<h1 style="text-align: center;">Histórico de Testes</h1>' .$tabela);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("HistoricoTestes.pdf", array("Attachment" =>false));



}catch(PDOException $erro){
    
    $retorno = "Erro " . $erro->getMessage();
    echo "<script> alert($retorno)</script>";

}
