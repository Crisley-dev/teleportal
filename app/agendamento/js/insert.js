/*
*ARQUIVO DE CONTROLE DE INSERÇÃO DE NOVOS AGENDAMENTOS
*UTILIZANDO O JQUERYCONFIRM PARA GERAR AS CAIXAS DE MENSAGEM REFERENTES A SUCESSO E FALHA DOS RETORNOS DO AJAX
*/


jQuery(function(){
//Função de Criar mascara para o campo de Telefone utilizando o Jquery Mask
    jQuery('#agd_whatsapp').mask('(00) 90000-0000');
})
jQuery('#insert_agd_btn').on('click',function(){
    //Ajax de envio de dados para o Arquivo responsavel por realizar a captura dos dados e a query de inserção
    //no banco de dados
    jQuery.ajax({
        type: 'post',
        url: '../../teleportal/app/agendamento/insert_agendamento.php',
        dataType: 'html',
        data:{
            'dia':jQuery('#agd_dia').val(),
            'horario':jQuery('#agd_horario').val(),
            'nome':jQuery('#agd_nome').val(),
            'data_nasc':jQuery('#agd_datanasc').val(),
            'whatsapp':jQuery('#agd_whatsapp').val(),
            'obs':jQuery('#agd_obs').val(),
            'feedback':jQuery('#agd_feedback').val(),
            'usuario': jQuery('#agd_user').val()
        },
        success: function (response) {
            console.log(response);
            //Função Alert que retorna mensagem de confirmação quando os dados são adicionados no banco com sucesso.
            jQuery.alert({
                title: 'Sucesso',
                content: 'Agendamento salvo com sucesso!',
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
        //retorna a caixa de mensagem com uma mensagem de erro junto ao erro do php.
        error: (response)=>{
            jQuery.alert({
                title: 'ERROR',
                content: 'Ocorreu um erro ao tentar salvar os dados.<br/> Tente novamente ou entre em conteto com um Administrador' + response,
                type: 'red'
            })
        }
    });
});
