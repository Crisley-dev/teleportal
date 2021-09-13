<?php

$user = filter_input(INPUT_POST,'user');

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
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='insert_ct_btn'>Enviar</button></div>";
$msg .= "</div>";

$msg .="<script>
jQuery(function(){
    jQuery('#ct_contato').mask('(00) 00000-0000');
})
jQuery('#insert_ct_btn').on('click',function(){
    jQuery.ajax({
        type: 'post',
        url: '../../teleportal/insert_contact.php',
        dataType: 'html',
        data:{
            'nome':jQuery('#ct_nome').val(),
            'contato':jQuery('#ct_contato').val(),
            'fonte':jQuery('#ct_fonte').val(),
            'feedback':jQuery('#ct_feedback').val(),
            'usuario': '$user'
        },
        success: function (response) {
            jQuery.alert({
                title: 'Sucesso',
                content: 'Agendamento salvo com sucesso!',
                theme: 'green',
                type: 'green',
                buttons:{
                    'OK':{
                        text:'OK',
                        action: function(){
                            location.reload();
                        }
                    }
                }
            })
        },
        error: ()=>{
            jQuery.alert({
                title: 'ERROR',
                content: 'Ocorreu um erro ao tentar salvar os dados.<br/> Tente novamente ou entre em conteto com um Administrador' + response,
                theme: 'red',
                type: 'red'
            })
        }
    });
});

</script>";

echo $msg;

?>