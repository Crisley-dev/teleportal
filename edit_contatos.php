<?php
$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Nome</label></div><input type='text' class='form-control' id='ct_nome' name='ct_nome'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Contato</label></div><input type='text' class='form-control' id='ct_contato' name='ct_contato'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Fonte</label></div><input type='text' class='form-control' id='ct_fonte' name='ct_fonte'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Feedback</label></div><input type='text' class='form-control' id='ct_feedback' name='ct_feedback'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='botao-enviar'>Enviar</button></div>";
$msg .= "</div>";

echo $msg;

?>