<?php

 //Import da Constante PATH e arquivo de conexão com o BD

 include "C:/xampp/htdocs/teleportal/config.php";
 require_once PATH . "/connection.php";


$user = filter_input(INPUT_POST,'user');
$data_inicio = filter_input(INPUT_POST,'data_inicio');
$data_fim = filter_input(INPUT_POST,'data_fim');
$grupo = filter_input(INPUT_POST,'grupo');

//Query de contagem de agendaentos, vendas e visitas
$sql = "SELECT (SELECT nome from tb_usuarios where cpf = ?) as tele,(SELECT count(id) from agendamentos where usuario = ? and date(reg_agendamentos) between '$data_inicio' and '$data_fim') as quant_agendamento, (SELECT count(id) from vendas where usuario = ? and date(reg_venda) between '$data_inicio' and '$data_fim') as quant_venda,(SELECT count(id) from controle where usuario = ? and  visita between '$data_inicio' and '$data_fim') as quant_visita";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user,$user,$user,$user]);
$data = $stmt->fetchAll();

$msg = "";
$msg .= "<table class='table nowrap'><thead class='table-title'>";
if($grupo == 'adm'){
$msg .= "<th>Tele</th><th>Quant. Agendamentos</th> <th>Quant. Vendas</th><th>Quant. Visitas</th>";
}else{
$msg .= "<th>Quant. Agendamentos</th> <th>Quant. Vendas</th><th>Quant. Visitas</th>";
}
$msg .= "</thead>";
$msg .= "<tbody>";
foreach($data as $dado):
    $msg .= "<tr>";
    if($grupo == 'adm'){
        $msg .= "<td>".$dado['tele']."</td>";
    }
    $msg .= "<td>".$dado['quant_agendamento']."</td>";
    $msg .= "<td>".$dado['quant_venda']."</td>";
    $msg .= "<td>".$dado['quant_visita']."</td>";
    $msg .="</tr>";
endforeach;
$msg .="</tbody></table>";

echo $msg;
?>
