<?php
/**
 *@author CRISLEY DUARTE DA SILVA <crisley.dev@gmail.com>
 *@copyright 2021 - CRISLEY DUARTE DA SILVA

 *UPDATE DE AGENDAMENTOS.

 **/

//Importação da constante PATH e arquivo de conexão ao BD
include "C:/xampp/htdocs/teleportal/config.php";
require_once PATH . "/connection.php";


$nome = filter_input(INPUT_POST,'nome');

$contato = filter_input(INPUT_POST,'contato');

$fonte = filter_input(INPUT_POST,'fonte');

$feedback = filter_input(INPUT_POST,'feedback');

$user = filter_input(INPUT_POST,'usuario');

$id = filter_input(INPUT_POST,'id');

var_dump($user);



$sql = "UPDATE contatos set nome=?,contato=?,fonte=?,feedback=? WHERE usuario = ? and id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome,$contato,$fonte,$feedback,$user,$id]);
$stmt = null;

?>