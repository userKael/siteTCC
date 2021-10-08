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
    $tabela .= '<table width="300" >';
    $tabela .= '<thead>';
    $tabela .= '<tr>';
    $tabela .= '<th  width="140" height="40" bgcolor="#98cbff">IMC</th>';
    $tabela .= '<th width="90" height="40" bgcolor="#98cbff">Somatótipo</th>';
    $tabela .= '<th width="50" height="40" bgcolor="#98cbff">Altura</th>';
    $tabela .= '<th width="50" height="40" bgcolor="#98cbff">Kg</th>';
    $tabela .= '<th width="80" height="40" bgcolor="#98cbff">Sexo</th>';
    $tabela .= '<th width="101" height="40" bgcolor="#98cbff">Data do Teste</th>';
    $tabela .= '</tr>';
    $tabela .= '</thead>';
    $tabela .= '<tbody>';

    while($dado = $result->fetch(PDO::FETCH_OBJ)){
          $dado2 = $teste->fetch(PDO::FETCH_OBJ);
          $data = implode("/",array_reverse(explode("-",$dado2->data_teste)));

        $tabela .= '<tr >';
        $tabela .= '<td style="border-bottom: solid;">'.$dado->imc.'</td>';
        $tabela .= '<td style="border-bottom: solid;">'.$dado->somatotipo.'</td>';
        $tabela .= '<td style="border-bottom: solid;">'.$dado2->altura.'</td>';
        $tabela .= '<td style="border-bottom: solid;">'.$dado2->peso.'</td>';
        $tabela .= '<td style="border-bottom: solid;">'.$dado2->sexo.'</td>';
        $tabela .= '<td style="border-bottom: solid;">'.$data .'</td>';
        $tabela .= '</tr>';
    }
    $tabela .= '</tbody>';
    $tabela .= '</table>';
    
   // echo '<h1 style="text-align: center;">Histórico de Testes</h1>' .$tabela .'<img src="http://localhost/siteTCC/Site/IMGs/logo.png"  alt="" width="200">';

    $dompdf->load_Html('<h1 style="text-align: center;">Histórico de Testes</h1>' .$tabela .'<img src=""  alt="" width="200">');
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("HistoricoTestes.pdf", array("Attachment" =>false));

}catch(PDOException $erro){
    
    $retorno = "Erro " . $erro->getMessage();
    echo "<script> alert($retorno)</script>";

}

?>


