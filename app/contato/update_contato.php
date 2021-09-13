<?php
/**
 *@author CRISLEY DUARTE DA SILVA <crisley.dev@gmail.com>
 *@copyright 2021 - CRISLEY DUARTE DA SILVA

 **/

require_once "connection.php";


$nome = filter_input(INPUT_POST,'nome');

$contato = filter_input(INPUT_POST,'contato');

$fonte = filter_input(INPUT_POST,'fonte');

$feedback = filter_input(INPUT_POST,'feedback');

$user = filter_input(INPUT_POST,'usuario');



$sql = "UPDATE contatos set nome=?,contato=?,fonte=?,feedback=? WHERE usuario = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome,$contato,$fonte,$feedback,$user]);
$stmt = null;

?>