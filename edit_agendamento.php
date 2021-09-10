<?php
$dia = filter_input(INPUT_POST,'dia');
$aux = strtotime($dia);
$dia = date('Y-m-d',$aux);
$horario = filter_input(INPUT_POST,'horario');

$nome = filter_input(INPUT_POST,'nome');

$data_nasc = filter_input(INPUT_POST,'data_nasc');
$date = DateTime::createFromFormat('d/m/Y', $data_nasc);
$data_nasc = $date->format('Y-m-d');

$whats = filter_input(INPUT_POST,'whats');

$obs = filter_input(INPUT_POST,'obs');

$feedback = filter_input(INPUT_POST,'feedback');

$user = filter_input(INPUT_POST,'user');



$msg = "";
$msg .="<div class='container corpo'>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Dia</label></div><input type='date' class='form-control' id='agd_dia' name='agd_dia' value='$dia'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Horario</label></div><input type='time' class='form-control' id='agd_horario' name='agd_horario' value='$horario'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Nome</label></div><input type='text' class='form-control' id='agd_nome' name='agd_nome' value='$nome'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Data Nasc.</label></div><input type='date' class='form-control' id='agd_datanasc' name='agd_datanasc' value='$data_nasc'></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Whatsapp</label></div><input type='text' class='form-control' id='agd_whatsapp' name='agd_whatsapp' value='$whats'></div>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Feedback</label></div><select class='form-select' name='agd_feedback' id='agd_feedback'><option value='$feedback'>$feedback</option><option value='Fechado'>Fechado</option><option value='Foi e nao fechou'>Visita sem Fechamento</option><option value='Confirmado'>Confirmado</option><option value='Retorno'>Retorno</option><option value='Cancelamento'>Cancelamento</option></select></div>";
$msg .= "</div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-4 campo'><div class='cad-label'><label>Observação</label></div><input type='text' class='form-control' id='agd_obs' name='agd_obs' value='$obs'></div>";
$msg .= "<div class='col col-sm-4 campo'></div>";
$msg .= "<div class='row'>";
$msg .= "<div class='col col-sm-10 campo'></div>";
$msg .= "<div class='col col-sm-2 campo'><button type='button' class='btn botao btn-outline-success' id='edit_agd_btn'>Salvar</button></div>";
$msg .= "</div>";

$msg .= "<script>
    jQuery('#edit_agd_btn').on('click',function(){
    jQuery.ajax({
        type: 'post',
        url: '../../teleportal/edit_agd.php',
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
                content: '<h3>Agendamento salvo com sucesso!</h3>'+response,
                theme: 'green',
                type: 'green',
                buttons:{
                    'OK':{
                        text:'OK',
                        btnClass: 'btn-green',
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
                content: '<h3>Ocorreu um erro ao tentar salvar os dados.<br/> Tente novamente ou entre em conteto com um Administrador</h3>' + response,
                theme: 'red',
                type: 'red'
            })
        }
    });
});

</script>";
echo $msg;

?>