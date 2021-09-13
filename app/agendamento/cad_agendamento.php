<?php
/**
 * PAGINA DE MONTAGEM DO FURMILARIO DE CADASTRO DE AGENDAMENTOS. UTILIZANDO PHP, HTML E BOOTSTRAP
 * PARA RETORNAR NUM JQUER.DIALOG DO PLUGIN jQueryConfirm.
 */

//Recebe o valor do campo User quando o usuario aciona o Botão de Novo Agendamento

$user = filter_input(INPUT_POST,'user');

//Montagem de formulario utilizando Strings PHP


$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<form id='form_agd' method='post' action=''>";
$msg .= "<input type='hidden' id='agd_user' name='agd_user' value='".$user."'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Dia</label></div><input type='date' class='form-control' id='agd_dia' name='agd_dia'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Horario</label></div><input type='time' class='form-control' id='agd_horario' name='agd_horario'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Nome</label></div><input type='text' class='form-control' id='agd_nome' name='agd_nome'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Data Nasc.</label></div><input type='date' class='form-control' id='agd_datanasc' name='agd_datanasc'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Whatsapp <i class='fa fa-whatsapp' aria-hidden='true'></i></label></div><input type='text' class='form-control' id='agd_whatsapp' name='agd_whatsapp' required></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Feedback</label></div><select class='form-select' name='agd_feedback' id='agd_feedback'><option value='Fechado'>Fechado</option><option value='Foi e nao fechou'>Visita sem Fechamento</option><option value='Confirmado'>Confirmado</option><option value='Retorno'>Retorno</option><option value='Cancelamento'>Cancelamento</option></select></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Observação</label></div><input type='text' class='form-control' id='agd_obs' name='agd_obs'></div>";
$msg .= "<div class='col col-sm-4 campo'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='insert_agd_btn'>Enviar</button></div>";
$msg .= "</form>";
$msg .= "</div>";
//chama o arquivo JS responsavel pelo controle do formulario.
$msg .= "<script src='../../teleportal/app/agendamento/js/insert.js'></script>";

//Retorna o formulario


echo $msg;

?>