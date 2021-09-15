jQuery('#edit_ct_btn').on('click',function(){
    jQuery.ajax({
        type: 'post',
        url: '../../teleportal/app/contatos/update_contatos.php',
        dataType: 'html',
        data:{
            'contato':jQuery('#ct_contato').val(),
            'fonte':jQuery('#ct_fonte').val(),
            'nome':jQuery('#ct_nome').val(),
            'feedback':jQuery('#ct_feedback').val(),
            'usuario': jQuery('#ct_user').val(),
            'id':jQuery('#ct_id').val()
        },
        success: function (response) {
            console.log(response);
            jQuery.alert({
                title: 'Sucesso',
                content: '<h3>Agendamento salvo com sucesso!</h3>',
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