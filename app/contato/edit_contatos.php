<?php
$nome = filter_input(INPUT_POST,'nome');
$contato = filter_input(INPUT_POST,'contato');
$fonte = filter_input(INPUT_POST,'fonte');
$feedback = filter_input(INPUT_POST,'feedback');
$user = filter_input(INPUT_POST,'user');

$msg = "";
$msg .="<div class='container corpo'>";
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

$msg .= "<script>
    jQuery('#edit_ct_btn').on('click',function(){
    jQuery.ajax({
        type: 'post',
        url: '../../teleportal/update_contact.php',
        dataType: 'html',
        data:{
            'contato':jQuery('#ct_contato').val(),
            'fonte':jQuery('#ct_fonte').val(),
            'nome':jQuery('#ct_nome').val(),
            'feedback':jQuery('#ct_feedback').val(),
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