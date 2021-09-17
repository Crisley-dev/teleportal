<?php

$user = filter_input(INPUT_POST,'user');

$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<input type='hidden' id='ret_user' name='ret_user' value='".$user."'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Dia</label></div><input type='date' class='form-control' id='ret_dia' name='ret_dia'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Horario</label></div><input type='time' class='form-control' id='ret_horario' name='ret_horario'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Nome</label></div><input type='text' class='form-control' id='ret_nome' name='ret_nome'></div>";
$msg .= "<div class='col col-sm-4 campo'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='insert_ret_btn'>Enviar</button></div>";
$msg .= "</div>";
$msg .= "<script src='../../teleportal/app/retorno/js/insert.js'></script>";

echo $msg;

?>