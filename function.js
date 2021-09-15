jQuery(function(){
    let path =  '../../teleportal/app/';
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

    }
    jQuery('#novo').on('click',function(e){
     
       jqDialog('agendamento/cad_agendamento.php','html','POST','Cadastrar Agendamentos');

    })
    
    jQuery('#ct-novo').on('click',function(){
        jqDialog('contatos/cad_contatos.php','html','POST','Cadastrar Contatos');
   })

   jQuery('#vendas-novo').on('click',function(){
        jqDialog('vendas/cad_vendas.php','html','POST','Cadastrar Vendas');
   })
   jQuery('#ret-novo').on('click', function () {
       jqDialog('retorno/cad_retorno.php','html','POST','Cadastrar Retorno');
     })
    jQuery('#cont-novo').on('click',function(){
        jqDialog('controle/cad_controle.php','html','POST','Cadastrar Controle');
    })

jQuery('tr').on('click', function () { 
    let tipo = jQuery(this).attr("name");
    let user = jQuery('#user').val();
    switch (tipo){
        case 'tr-agend':
            let dia = jQuery(this).find("td:eq(0)").text();
            let horario = jQuery(this).find("td:eq(1)").text();
            let nome = jQuery(this).find("td:eq(2)").text();
            let data_nasc = jQuery(this).find("td:eq(3)").text();
            let whats = jQuery(this).find("td:eq(4)").text();
            let obs = jQuery(this).find("td:eq(5)").text();
            let feed = jQuery(this).find("td:eq(6)").text();
            let id = jQuery(this).find("td:eq(7)").text();
            jQuery.dialog({
                content: function () {
                    var self = this;
                    return jQuery.ajax({
                        url: path+'agendamento/edit_agendamento.php',
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
                            'user':user,
                            'id':id
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
            let ct_nome = jQuery(this).find("td:eq(0)").text();
            let ct_contato = jQuery(this).find("td:eq(1)").text();
            let ct_fonte = jQuery(this).find("td:eq(2)").text();
            let ct_feedback = jQuery(this).find("td:eq(3)").text();
            let ct_id = jQuery(this).find("td:eq(4)").text();
            
            jQuery.dialog({
                content: function () {
                    var self = this;
                    return jQuery.ajax({
                        url: path+'contatos/edit_contatos.php',
                        dataType: 'html',
                        method: 'post',
                        data: {
                            'nome':ct_nome,
                            'contato':ct_contato,
                            'fonte':ct_fonte,
                            'feedback':ct_feedback,
                            'user':user,
                            'id':ct_id
                     }
                    }).done(function (response) {
                        self.setContent(response);
                        self.setTitle('Editar Contatos');
                    }).fail(function(){
                      
                        self.setContent('Something went wrong.');
                    });
                },
                boxWidth: '70%',
                useBootstrap: false,
                type: 'orange'
            });
            break;
        
        case 'tr-vendas':
            let vd_nome = jQuery(this).find("td:eq(0)").text();
            let vd_data = jQuery(this).find("td:eq(1)").text();
            let vd_obs = jQuery(this).find("td:eq(2)").text();
            let vd_id = jQuery(this).find("td:eq(3)").text();
            jQuery.dialog({
                content: function () {
                    var self = this;
                    return jQuery.ajax({
                        url: path+'vendas/edit_vendas.php',
                        dataType: 'html',
                        method: 'post',
                        data: {
                            'nome':vd_nome,
                            'data':vd_data,
                            'observacao':vd_obs,
                            'user':user,
                            'id':vd_id
                     }
                    }).done(function (response) {
                        self.setContent(response);
                        self.setTitle('Editar Controle');
                    }).fail(function(){
                      
                        self.setContent('Something went wrong.');
                    });
                },
                boxWidth: '70%',
                useBootstrap: false,
                type: 'orange'
            });
            break;
        case 'tr-retorno':
            jqDialog('retorno/edit_retorno.php','html','GET','Editar Retornos');
            break;
        case 'tr-controle':
            let cont_dia = jQuery(this).find("td:eq(0)").text();
            let cont_agend = jQuery(this).find("td:eq(1)").text();
            let cont_visita = jQuery(this).find("td:eq(2)").text();
            let cont_venda = jQuery(this).find("td:eq(3)").text();
            let cont_id = jQuery(this).find("td:eq(4)").text();
            jQuery.dialog({
                content: function () {
                    var self = this;
                    return jQuery.ajax({
                        url: path+'controle/edit_controle.php',
                        dataType: 'html',
                        method: 'post',
                        data: {
                            'dia':cont_dia,
                            'agendamento':cont_agend,
                            'visita':cont_visita,
                            'venda':cont_venda,
                            'user':user,
                            'id':cont_id
                     }
                    }).done(function (response) {
                        self.setContent(response);
                        self.setTitle('Editar Controle');
                    }).fail(function(){
                      
                        self.setContent('Something went wrong.');
                    });
                },
                boxWidth: '70%',
                useBootstrap: false,
                type: 'orange'
            });
            break;
    }
 })
})
''

