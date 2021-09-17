<?php
$dia = filter_input(INPUT_POST,'dia');
$dt = DateTime::createFromFormat('d/m/Y', $dia);
$dia = $dt->format('Y-m-d');

$nome = filter_input(INPUT_POST,'nome');

$horario = filter_input(INPUT_POST,'horario');

$user = filter_input(INPUT_POST,'user');

$id = filter_input(INPUT_POST,'id');

$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<input type='hidden' id='ret_user' name='ret_user' value='".$user."'>";
$msg .= "<input type='hidden' id='ret_id' name='ret_id' value='".$id."'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Dia</label></div><input type='date' class='form-control' id='ret_dia' name='ret_dia' value='$dia'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Horario</label></div><input type='time' class='form-control' id='ret_horario' name='ret_horario' value='$horario'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Nome</label></div><input type='text' class='form-control' id='ret_nome' name='ret_nome' value='$nome'></div>";
$msg .= "<div class='col col-sm-4 campo'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='edit_ret_btn'>Salvar</button></div>";
$msg .= "</div>";
$msg .= "<script src='../../teleportal/app/retorno/js/edit.js'></script>";

echo $msg;

?>