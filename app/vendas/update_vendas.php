<?php

/**
 *@author CRISLEY DUARTE DA SILVA <crisley.dev@gmail.com>
 *@copyright 2021 - CRISLEY DUARTE DA SILVA
 
 *ARQUIVO DE GERENCIAMENTO DE ATUALIZAÇÃO DE VENDAS

 **/

 //Import da Constante PATH e arquivo de conexão com o BD

 include "C:/xampp/htdocs/teleportal/config.php";
 require_once PATH . "/connection.php";

 $nome = filter_input(INPUT_POST,'nome');

 $data = filter_input(INPUT_POST,'data');

 $obs = filter_input(INPUT_POST,'observacao');

 $user = filter_input(INPUT_POST,'usuario');

 $id = filter_input(INPUT_POST,'id');

 $sql = "UPDATE vendas SET nome = ?, data_venda = ?, observacao = ? where usuario =? and id = ?";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([$nome,$data,$obs,$user,$id]);
 $stmt = null;

 ?>