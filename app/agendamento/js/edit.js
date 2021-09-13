/*
ARQUIVO DE CONTROLE DE ATUALIZAÇÃO DE AGENDAMENTOS 
UTILIZANDO JQUERY CONFIM PARA AS MENSAGENS DE RETORNO E AJAX PARA TRANPORTE DE DADOS.
*/

jQuery('#edit_agd_btn').on('click',function(){
    //Ajax de envio de dados para o arquivo responsavel por realizar a captura dos dados e executar 
    //a query de atualização de dados no banco.
    jQuery.ajax({
        type: 'post',
        url: '../../../teleportal/app/agendamento/update_agendamento.php',
        dataType: 'html',
        data:{
            'dia':jQuery('#agd_dia').val(),
            'horario':jQuery('#agd_horario').val(),
            'nome':jQuery('#agd_nome').val(),
            'data_nasc':jQuery('#agd_datanasc').val(),
            'whatsapp':jQuery('#agd_whatsapp').val(),
            'obs':jQuery('#agd_obs').val(),
            'feedback':jQuery('#agd_feedback').val(),
            'usuario': jQuery('#agd_user').val(),
            'id': jQuery('#agd_id').val()
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
        //Função que retorna a caixa de mensagem do jquery confim com uma mensagem de erro personalizada
        // e a resposta do php.
        error: (response)=>{
            jQuery.alert({
                title: 'ERROR',
                content: '<h3>Ocorreu um erro ao tentar salvar os dados.<br/> Tente novamente ou entre em conteto com um Administrador</h3>' + response,
                theme: 'red',
                type: 'red'
            })
        }
    });
});