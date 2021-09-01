<?php
$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Dia</label></div><input type='text' class='form-control' id='cont_dia' name='cont_dia'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Agendamento</label></div><input type='text' class='form-control' id='cont_agend' name='cont_agend'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Visita</label></div><input type='text' class='form-control' id='cont_visita' name='cont_visita'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Venda</label></div><input type='text' class='form-control' id='cont_venda' name='cont_venda'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='botao-enviar'>Enviar</button></div>";
$msg .= "</div>";

echo $msg;

?>