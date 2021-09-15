jQuery('#insert_vd_btn').on('click',function(){
    jQuery.ajax({
        type: 'post',
        url: '../../teleportal/app/vendas/insert_vendas.php',
        dataType: 'html',
        data:{
           'nome':jQuery('#vd_nome').val(),
           'data':jQuery('#vd_data').val(),
           'observacao':jQuery('#vd_obs').val(),
           'usuario': jQuery('#vd_user').val()
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
        error: (response)=>{
            jQuery.alert({
                title: 'ERROR',
                content: '<h3>Ocorreu um erro ao tentar salvar os dados.<br/> Tente novamente ou entre em conteto com um Administrador</h3>' + response,
                type: 'red'
            })
        }
    });
});