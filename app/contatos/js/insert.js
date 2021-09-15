jQuery(function(){
    jQuery('#ct_contato').mask('(00) 00000-0000');
})
jQuery('#insert_ct_btn').on('click',function(){
    jQuery.ajax({
        type: 'post',
        url: '../../teleportal/app/contatos/insert_contatos.php',
        dataType: 'html',
        data:{
            'nome':jQuery('#ct_nome').val(),
            'contato':jQuery('#ct_contato').val(),
            'fonte':jQuery('#ct_fonte').val(),
            'feedback':jQuery('#ct_feedback').val(),
            'usuario':jQuery('#ct_user').val()
        },
        success: function (response) {
            jQuery.alert({
                title: 'Sucesso',
                content: '<h3>Agendamento salvo com sucesso!</h3>',
                type: 'green',
                buttons:{
                    'OK':{
                        text:'OK',
                        btnClass: 'green',
                        action: function(){
                            location.reload();
                        }
                    }
                }
            })
        },
        error: (response)=>{
            jQuery.alert({
                title: 'ERROR',
                content: '<h4>Ocorreu um erro ao tentar salvar os dados.<br/> Tente novamente ou entre em conteto com um Administrador</h4>' + response,
                type: 'red'
            })
        }
    });
});