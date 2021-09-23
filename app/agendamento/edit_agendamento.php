<?php
$dia = filter_input(INPUT_POST,'dia');
$dt = DateTime::createFromFormat('d/m/Y', $dia);
$dia = $dt->format('Y-m-d');

$horario = filter_input(INPUT_POST,'horario');

$nome = filter_input(INPUT_POST,'nome');

$data_nasc = filter_input(INPUT_POST,'data_nasc');
$date = DateTime::createFromFormat('d/m/Y', $data_nasc);
$data_nasc = $date->format('Y-m-d');

$whats = filter_input(INPUT_POST,'whats');

$obs = filter_input(INPUT_POST,'obs');

$feedback = filter_input(INPUT_POST,'feedback');

$user = filter_input(INPUT_POST,'user');

$id = filter_input(INPUT_POST,'id');



$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<input type='hidden' id='agd_user' name='agd_user' value='".$user."'>";
$msg .= "<input type='hidden' id='agd_id' name='agd_id' value='".$id."'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Dia</label></div><input type='date' class='form-control' id='agd_dia' name='agd_dia' value='$dia'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Horario</label></div><input type='time' class='form-control' id='agd_horario' name='agd_horario' value='$horario'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Nome</label></div><input type='text' class='form-control' id='agd_nome' name='agd_nome' value='$nome'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Data Nasc.</label></div><input type='date' class='form-control' id='agd_datanasc' name='agd_datanasc' value='$data_nasc'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><a class='whats' href='https://wa.me/+55$whats' target='_blank'><div class='cad-label lb-whats'><label style='color:#3a616b !important'>Whatsapp <i class='fa fa-whatsapp' aria-hidden='true'></i></label></div></a><input type='text' class='form-control' id='agd_whatsapp' name='agd_whatsapp' value='$whats'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Feedback</label></div><select class='form-select' name='agd_feedback' id='agd_feedback'><option value='$feedback'>$feedback</option><option value='Fechado'>Fechado</option><option value='Foi e nao fechou'>Visita sem Fechamento</option><option value='Confirmado'>Confirmado</option><option value='Retorno'>Retorno</option><option value='Cancelamento'>Cancelamento</option></select></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Observação</label></div><input type='text' class='form-control' id='agd_obs' name='agd_obs' value='$obs'></div>";
$msg .= "<div class='col col-sm-4 campo'></div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='edit_agd_btn'>Salvar</button></div>";
$msg .= "</div>";

$msg .= "<script src='../../teleportal/app/agendamento/js/edit.js'></script>";

echo $msg;

?>