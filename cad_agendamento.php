<?php
$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Dia</label></div><input type='date' class='form-control' id='agd_dia' name='agd_dia'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Horario</label></div><input type='time' class='form-control' id='agd_horario' name='agd_horario'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Nome</label></div><input type='text' class='form-control' id='agd_nome' name='agd_nome'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Data Nasc.</label></div><input type='date' class='form-control' id='agd_datanasc' name='agd_datanasc'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Whatsapp <i class='fa fa-whatsapp' aria-hidden='true'></i></label></div><input type='text' class='form-control' id='agd_whatsapp' name='agd_whatsapp' placeholder='(__)_____-____'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Feedback</label></div><select class='form-select' name='agd_feedback' id='agd_feedback'><option value='Fechado'>Fechado</option><option value='Foi e nao fechou'>Visita sem Fechamento</option><option value='Confirmado'>Confirmado</option><option value='Retorno'>Retorno</option><option value='Cancelamento'>Cancelamento</option></select></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='bt-cad-agd'>Enviar</button></div>";
$msg .= "</div>";

echo $msg;

?>