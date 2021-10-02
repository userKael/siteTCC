<?php
session_start();

$email = $_SESSION['email'];

include './conexaobd.php';
require_once '../dompdf/autoload.inc.php';
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
    $tabela .= '<table>';
    $tabela .= ' <thead>';
    $tabela .= '<tr>';
    $tabela .= '<th>IMC</th>';
    $tabela .= '<th>Somatótipo</th>';
    $tabela .= '<th>Altura</th>';
    $tabela .= '<th>Idade</th>';
    $tabela .= '<th>Kg</th>';
    $tabela .= '<th>Sexo</th>';
    $tabela .= '<th>Data</th>';
    $tabela .= '</tr>';
    $tabela .= '</thead>';
    $tabela .= '<tbody>';

    while($dado = $result->fetch(PDO::FETCH_OBJ)){
          $dado2 = $teste->fetch(PDO::FETCH_OBJ);

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

// $teste = "TESTANDOOOOOOOOO";

// require_once '../dompdf/autoload.inc.php';
// use Dompdf\Dompdf;
// $dompdf = new Dompdf();
// $dompdf->load_Html('<h1 style="text-align: center;">Histórico de Testes</h1>'.$teste);
// $dompdf->setPaper('A4', 'portrait');
// $dompdf->render();
// $dompdf->stream("HistoricoTestes.pdf", array("Attachment" =>false));