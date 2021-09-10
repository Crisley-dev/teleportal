<?php
/**
 *@author CRISLEY DUARTE DA SILVA <crisley.dev@gmail.com>
 *@copyright 2021 - CRISLEY DUARTE DA SILVA
 *UPDATE DE AGENDAMENTOS.

 **/

require_once "connection.php";


$dia = filter_input(INPUT_POST,'dia');

$horario = filter_input(INPUT_POST,'horario');

$nome = filter_input(INPUT_POST,'nome');

$data_nasc = filter_input(INPUT_POST,'data_nasc');

$whats = filter_input(INPUT_POST,'whatsapp');

$obs = filter_input(INPUT_POST,'obs');

$feedback = filter_input(INPUT_POST,'feedback');

$user = filter_input(INPUT_POST,'usuario');


$sql = "UPDATE agendamentos set dia=?,horario=?,nome=?,data_nasc=?,whatsapp=?,obs=?,feedback=? WHERE usuario = ?";
echo $horario;
$stmt = $pdo->prepare($sql);
$stmt->execute([$dia,$horario,$nome,$data_nasc,$whats,$obs,$feedback,$user]);
$stmt = null;

?>