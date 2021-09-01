<?php
$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Nome</label></div><input type='text' class='form-control' id='vd_nome' name='vd_nome'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Data</label></div><input type='date' class='form-control' id='vd_data' name='vd_data'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Observação</label></div><textarea class='form-control' col='10' row='30' id='vd_obs' name='vd_obs'></textarea></div>";
$msg .= "<div class='col col-sm-4 campo'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='botao-enviar'>Enviar</button></div>";
$msg .= "</div>";

echo $msg;

?>