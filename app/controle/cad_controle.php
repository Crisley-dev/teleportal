<?php

$user = filter_input(INPUT_POST,'user');


$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<input type='hidden' id='cont_user' name='cont_user' value='".$user."'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Dia</label></div><input type='date' class='form-control' id='cont_dia' name='cont_dia'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Agendamento</label></div><input type='date' class='form-control' id='cont_agend' name='cont_agend'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Visita</label></div><input type='date' class='form-control' id='cont_visita' name='cont_visita'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Venda</label></div><input type='date' class='form-control' id='cont_venda' name='cont_venda'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='insert_cont_btn'>Enviar</button></div>";
$msg .= "</div>";
$msg .= "<script src='../../teleportal/app/controle/js/insert.js'></script>";

echo $msg;
?>