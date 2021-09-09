jQuery(function(){
    let path =  '../../teleportal/';
    jQuery('#tb_agendamento,#tb_contatos,#tb_vendas,#tb_retorno,#tb_controle').DataTable();

    function jqDialog(url, type,method,title){
        jQuery.dialog({
            content: function () {
                var self = this;
                return jQuery.ajax({
                    url: path+url,
                    dataType: type,
                    method: method,
                    data: {'user':jQuery('#user').val()},
                }).done(function (response) {
                    self.setContent(response);
                    self.setTitle(title);
                }).fail(function(){
                  
                    self.setContent('Something went wrong.');
                });
            },
            boxWidth: '70%',
            useBootstrap: false,
            type: 'orange'
        });
        console.log(jQuery('#user').val());
    }
    jQuery('#novo').on('click',function(e){
     
       jqDialog('cad_agendamento.php','html','POST','Cadastrar Agendamentos');

    })
    
    jQuery('#ct-novo').on('click',function(){
        jqDialog('cad_contato.php','html','GET','Cadastrar Contatos');
   })

   jQuery('#vendas-novo').on('click',function(){
        jqDialog('cad_vendas.php','html','GET','Cadastrar Vendas');
   })
   jQuery('#ret-novo').on('click', function () {
       jqDialog('cad_retorno.php','html','GET','Cadastrar Retorno');
     })
    jQuery('#cont-novo').on('click',function(){
        jqDialog('cad_controle.php','html','GET','Cadastrar Controle');
    })

jQuery('tr').on('click', function () { 
    let tipo = jQuery(this).attr("name");
    let dia = jQuery(this).find("td:eq(0)").text();
    let horario = jQuery(this).find("td:eq(1)").text();
    let nome = jQuery(this).find("td:eq(2)").text();
    let data_nasc = jQuery(this).find("td:eq(3)").text();
    let whats = jQuery(this).find("td:eq(4)").text();
    let obs = jQuery(this).find("td:eq(5)").text();
    let feed = jQuery(this).find("td:eq(6)").text();
    let user = jQuery('#user').val();
    console.log(data_nasc);
    switch (tipo){
        case 'tr-agend':
            jQuery.dialog({
                content: function () {
                    var self = this;
                    return jQuery.ajax({
                        url: path+'edit_agendamento.php',
                        dataType: 'html',
                        method: 'post',
                        data: {
                            'dia':dia,
                            'horario':horario,
                            'nome':nome,
                            'data_nasc':data_nasc,
                            'whats':whats,
                            'obs':obs,
                            'feedback':feed,
                            'user':user
                     }
                    }).done(function (response) {
                        self.setContent(response);
                        self.setTitle('Editar Agendamento');
                    }).fail(function(){
                      
                        self.setContent('Something went wrong.');
                    });
                },
                boxWidth: '70%',
                useBootstrap: false,
                type: 'orange'
            });
            break;
        
        case 'tr-contatos':
            jqDialog('edit_contatos.php','html','GET','Editar Contatos');
            break;
        
        case 'tr-vendas':
            jqDialog('edit_vendas.php','html','GET','Editar Agendamentos');
            break;
        case 'tr-retorno':
            jqDialog('edit_retorno.php','html','GET','Editar Retornos');
            break;
        case 'tr-controle':
            jqDialog('edit_controle.php','html','GET','Editar Controle');
            break;
    }
    console.log(tipo);
 })
})
''

