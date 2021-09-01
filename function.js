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
                    method: method
                }).done(function (response) {
                    console.log(path+'cad_agendamento.php');
                    self.setContent(response);
                    self.setTitle(title);
                }).fail(function(){
                    console.log(path+'cad_agendamento.php');
                    self.setContent('Something went wrong.');
                });
            },
            boxWidth: '70%',
            useBootstrap: false,
            type: 'orange'
        });
    }
    jQuery('#novo').on('click',function(e){
     
       jqDialog('cad_agendamento.php','html','GET','Cadastrar Agendamentos');
    })

    jQuery('#bt-cad-agd').on('click',function(){
        jQuery.ajax({
            type: "post",
            url: path+"insert_agd.php",
          //  data: "bla",
            dataType: "html",
            success: function (response) {
                alert(response)
            }
        });
    });


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
    let val = jQuery(this).find("td:eq(0)").text();
    switch (tipo){
        case 'tr-agend':
            jqDialog('edit_agendamento.php','html','GET','Editar Agendamentos');
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

