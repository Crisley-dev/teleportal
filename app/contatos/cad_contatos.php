<?php

$user = filter_input(INPUT_POST,'user');

$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<input type='hidden' id='ct_user' name='ct_user' value='".$user."'>";
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
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='insert_ct_btn'>Enviar</button></div>";
$msg .= "</div>";
$msg .= "<script src='../../teleportal/app/contatos/js/insert.js'></script>";
echo $msg;

?>