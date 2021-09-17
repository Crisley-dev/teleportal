<?php

/**
 *@author CRISLEY DUARTE DA SILVA <crisley.dev@gmail.com>
 *@copyright 2021 - CRISLEY DUARTE DA SILVA
 
 *ARQUIVO DE GERENCIAMENTO DE ATUALIZAÇÃO DE RETORNOS

 **/

 //Import da Constante PATH e arquivo de conexão com o BD

 include "C:/xampp/htdocs/teleportal/config.php";
 require_once PATH . "/connection.php";

 $nome = filter_input(INPUT_POST,'nome');

 $dia = filter_input(INPUT_POST,'dia');

 $horario = filter_input(INPUT_POST,'horario');

 $user = filter_input(INPUT_POST,'usuario');

 $id = filter_input(INPUT_POST,'id');

 $sql = "UPDATE retorno SET nome = ?, dia = ?, horario = ? where usuario =? and id = ?";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([$nome,$dia,$horario,$user,$id]);
 $stmt = null;

 ?>