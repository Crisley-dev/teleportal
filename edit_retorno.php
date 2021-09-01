<?php
$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Dia</label></div><input type='date' class='form-control' id='agd_dia' name='agd_dia'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Horario</label></div><input type='time' class='form-control' id='agd_horario' name='agd_horario'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Nome</label></div><input type='text' class='form-control' id='agd_nome' name='agd_nome'></div>";
$msg .= "<div class='col col-sm-4 campo'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='botao-enviar'>Enviar</button></div>";
$msg .= "</div>";

echo $msg;

?>