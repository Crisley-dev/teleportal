<?php

/**
 *@author CRISLEY DUARTE DA SILVA <crisley.dev@gmail.com>
 *@copyright 2021 - CRISLEY DUARTE DA SILVA
 
 *ARQUIVO DE GERENCIAMENTO DE INCLUSÃO DE NOVOS RETORNOS

 **/

 //Import da Constante PATH e arquivo de conexão com o BD

 include "C:/xampp/htdocs/teleportal/config.php";
 require_once PATH . "/connection.php";

 $nome = filter_input(INPUT_POST,'nome');

 $dia = filter_input(INPUT_POST,'dia');
 
 $horario = filter_input(INPUT_POST,'horario');

 $user = filter_input(INPUT_POST,'usuario');


 $sql = "INSERT INTO retorno (dia,horario,nome,usuario) VALUES (?,?,?,?)";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([$dia,$horario,$nome,$user]);
 $stmt = null;
 ?>