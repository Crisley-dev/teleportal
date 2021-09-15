<?php

$nome = filter_input(INPUT_POST,'nome');

$data = filter_input(INPUT_POST,'data');

$dt = DateTime::createFromFormat('d/m/Y', $data);

$data = $dt->format('Y-m-d');

$obs = filter_input(INPUT_POST,'observacao');

$user = filter_input(INPUT_POST,'user');

$id = filter_input(INPUT_POST,'id');


$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<input type='hidden' id='vd_user' name='vd_user' value='".$user."'>";
$msg .= "<input type='hidden' id='vd_id' name='vd_id' value='".$id."'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Nome</label></div><input type='text' class='form-control' id='vd_nome' name='vd_nome' value='$nome'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Data</label></div><input type='date' class='form-control' id='vd_data' name='vd_data' value='$data'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Observação</label></div><textarea class='form-control' col='10' row='30' id='vd_obs' name='vd_obs' value='$obs'>$obs</textarea></div>";
$msg .= "<div class='col col-sm-4 campo'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='edit_vd_btn'>Salvar</button></div>";
$msg .= "</div>";
$msg .= "<script src='../../teleportal/app/vendas/js/edit.js'></script>";;

echo $msg;

?>