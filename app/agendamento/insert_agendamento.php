<?php
/**
 *@author CRISLEY DUARTE DA SILVA <crisley.dev@gmail.com>
 *@copyright 2021 - CRISLEY DUARTE DA SILVA
 
 *ARQUIVO DE GERENCIAMENTO DE INCLUSÃO DE NOVOS AGENDAMENTOS

 **/

 //Import da Constante PATH e arquivo de conexão com o BD

include "C:/xampp/htdocs/teleportal/config.php";
require_once PATH . "/connection.php";


//Captura de Dados Enviados pelo Ajax

$dia = filter_input(INPUT_POST,'dia');

$horario = filter_input(INPUT_POST,'horario');

$nome = filter_input(INPUT_POST,'nome');

$data_nasc = filter_input(INPUT_POST,'data_nasc');

$whats = filter_input(INPUT_POST,'whatsapp');

$obs = filter_input(INPUT_POST,'obs');

$feedback = filter_input(INPUT_POST,'feedback');

$user = filter_input(INPUT_POST,'usuario');

//

//Query de Inserção de dados no BD
/**
 * TODO(VERIFICAÇÃO DADOS VAZIOS)
 */
$sql = "INSERT INTO agendamentos (dia,horario,nome,data_nasc,whatsapp,obs,feedback,usuario) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$dia,$horario,$nome,$data_nasc,$whats,$obs,$feedback,$user]);
$stmt = null;

?>