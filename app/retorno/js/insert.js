jQuery('#insert_ret_btn').on('click',function(){
    jQuery.ajax({
        type: 'post',
        url: '../../teleportal/app/retorno/insert_retorno.php',
        dataType: 'html',
        data:{
           'nome':jQuery('#ret_nome').val(),
           'dia':jQuery('#ret_dia').val(),
           'horario':jQuery('#ret_horario').val(),
           'usuario': jQuery('#ret_user').val()
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