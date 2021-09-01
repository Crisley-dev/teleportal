<?php
/**
 *@author CRISLEY DUARTE DA SILVA <crisley.dev@gmai.com>
 *@copyright 2021 - CRISLEY DUARTE

 */
require_once "../../teleportal/connection.php";


$dia = filter_input(INPUT_POST,'dia');

$horario = filter_input(INPUT_POST,'horario');

$nome = filter_input(INPUT_POST,'nome');

$data_nasc = filter_input(INPUT_POST,'data_nasc');

$whats = filter_input(INPUT_POST,'whatsapp');

$obs = filter_input(INPUT_POST,'obs');

$feedback = filter_input(INPUT_POST,'feedback');

$sql = $pdo->prepare("insert into agendamentos(dia,horario,nome,data_nasc,whatsapp,obs,feedback) values(?,?,?,?,?,?,?)");
$sql->execute([$dia,$horario,$nome,$data_nasc,$whats,$obs,$feedback]));
$sql = null;

?>