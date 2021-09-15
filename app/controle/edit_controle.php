<?php
$dia = filter_input(INPUT_POST,'dia');
$date = DateTime::createFromFormat('d/m/Y', $dia);
$dia = $date->format('Y-m-d');


$agendamento = filter_input(INPUT_POST,'agendamento');
$agd = DateTime::createFromFormat('d/m/Y', $agendamento);
$agendamento = $agd->format('Y-m-d');

$visita = filter_input(INPUT_POST,'visita');
$vis = DateTime::createFromFormat('d/m/Y', $visita);
$visita = $vis->format('Y-m-d');

$venda = filter_input(INPUT_POST,'venda');
$sell = DateTime::createFromFormat('d/m/Y', $venda);
$venda = $sell->format('Y-m-d');

$user = filter_input(INPUT_POST,'user');

$id = filter_input(INPUT_POST,'id');



$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<input type='hidden' id='cont_user' name='cont_user' value='".$user."'>";
$msg .= "<input type='hidden' id='cont_id' name='cont_id' value='".$id."'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Dia</label></div><input type='date' class='form-control' id='cont_dia' name='cont_dia' value='$dia'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Agendamento</label></div><input type='date' class='form-control' id='cont_agend' name='cont_agend' value='$agendamento'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Visita</label></div><input type='date' class='form-control' id='cont_visita' name='cont_visita' value='$visita'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Venda</label></div><input type='date' class='form-control' id='cont_venda' name='cont_venda' value='$venda'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='edit_cont_btn'>Salvar</button></div>";
$msg .= "</div>";
$msg .= "<script src='../../teleportal/app/controle/js/edit.js'></script>";


echo $msg;

?>