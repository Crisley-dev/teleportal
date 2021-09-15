<?php

/**
 *@author CRISLEY DUARTE DA SILVA <crisley.dev@gmail.com>
 *@copyright 2021 - CRISLEY DUARTE DA SILVA
 
 *ARQUIVO DE GERENCIAMENTO DE INCLUSÃO DE NOVOS COMTROLES

 **/

 //Import da Constante PATH e arquivo de conexão com o BD

 include "C:/xampp/htdocs/teleportal/config.php";
 require_once PATH . "/connection.php";


$dia = filter_input(INPUT_POST,'dia');

$agendamento = filter_input(INPUT_POST,'agendamento');

$visita = filter_input(INPUT_POST,'visita');

$venda = filter_input(INPUT_POST,'venda');

$user = filter_input(INPUT_POST,'usuario');

var_dump($_POST);


$sql = "INSERT INTO controle (dia,agendamento,visita,venda,usuario) VALUES (?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$dia,$agendamento,$visita,$venda,$user]);
$stmt = null;

?>