<?php

$user = filter_input(INPUT_POST,'user');

$msg = "";
$msg .="<div class='container corpo'>";

$msg .= "<form id='form_agd' method='post' action=''>";
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
$msg .="<script>
jQuery(function(){
    jQuery('#agd_whatsapp').mask('(00) 90000-0000');
})
jQuery('#insert_agd_btn').on('click',function(){
    jQuery.ajax({
        type: 'post',
        url: '../../teleportal/insert_agd.php',
        dataType: 'html',
        data:{
            'dia':jQuery('#agd_dia').val(),
            'horario':jQuery('#agd_horario').val(),
            'nome':jQuery('#agd_nome').val(),
            'data_nasc':jQuery('#agd_datanasc').val(),
            'whatsapp':jQuery('#agd_whatsapp').val(),
            'obs':jQuery('#agd_obs').val(),
            'feedback':jQuery('#agd_feedback').val(),
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