
jQuery('#insert_cont_btn').on('click',function(){
    jQuery.ajax({
        type: 'post',
        url: '../../teleportal/app/controle/insert_controle.php',
        dataType: 'html',
        data:{
            'dia':jQuery('#cont_dia').val(),
            'agendamento':jQuery('#cont_agend').val(),
            'visita':jQuery('#cont_visita').val(),
            'venda':jQuery('#cont_venda').val(),
            'usuario': jQuery('#cont_user').val()
        },
        success: function (response) {
            console.log(response);
            jQuery.alert({
                title: 'Sucesso',
                content: '<h3>Agendamento salvo com sucesso!</h3>',
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
                content: '<h4>Ocorreu um erro ao tentar salvar os dados.<br/> Tente novamente ou entre em conteto com um Administrador</h4>' + response,
                type: 'red'
            })
        }
    });
});