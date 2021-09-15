<?php
$nome = filter_input(INPUT_POST,'nome');
$contato = filter_input(INPUT_POST,'contato');
$fonte = filter_input(INPUT_POST,'fonte');
$feedback = filter_input(INPUT_POST,'feedback');
$user = filter_input(INPUT_POST,'user');
$id = filter_input(INPUT_POST,'id');

$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<input type='hidden' id='ct_user' name='ct_user' value='".$user."'>";
$msg .= "<input type='hidden' id='ct_id' name='ct_id' value='".$id."'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Nome</label></div><input type='text' class='form-control' id='ct_nome' name='ct_nome' value='$nome'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Contato</label></div><input type='text' class='form-control' id='ct_contato' name='ct_contato' value='$contato'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Fonte</label></div><input type='text' class='form-control' id='ct_fonte' name='ct_fonte' value='$fonte'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Feedback</label></div><input type='text' class='form-control' id='ct_feedback' name='ct_feedback' value='$feedback'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='edit_ct_btn'>Salvar</button></div>";
$msg .= "</div>";
$msg .= "<script src='../../teleportal/app/contatos/js/edit.js'></script>";
echo $msg;

?>