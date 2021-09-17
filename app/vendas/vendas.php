<?php
/**
 *@author CRISLEY DUARTE DA SILVA <crisley.dev@gmail.com>
 *@copyright 2021 - CRISLEY DUARTE DA SILVA
 */

 //Importa a constante de diretorio 'PATH' do arquivo config

 include "C:/xampp/htdocs/teleportal/config.php";
 include_once PATH . "/imports.php";
 require_once PATH . "/connection.php";
 
 //Função wordpress de recuperar o login do usuario logado
 
 $current_user = wp_get_current_user();
 $user = $current_user->data->user_login;

$sql = "SELECT id,nome,date_format(reg_venda,'%Y-%m-%d') as reg_venda,date_format(data_venda, '%d/%m/%Y') as data,observacao from vendas where usuario = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user]);
$data = $stmt->fetchAll();
?>
<body>
    <div class="container main">
    <input type="hidden" name="user" id="user" value="<?php echo $user;?>">
    <table>
           <thead>
                   <th>Data Inicio</th>
                   <th>-</th>
                   <th>Data Fim</th>
           </thead>
           <tbody>
                   <tr>
                   <td> <input type="date" id="min-date" class="date-range-filter-vd"></td>
                   <td></td>
                   <td> <input type="date" id="max-date" class="date-range-filter-vd"></td>
                   </tr>
           </tbody>
   </table> 
        <table class="table table-hover nowrap" id="tb_vendas">
                <thead class='table-title'>
                        <th>NOME</th>
                        <th>DATA</th>
                        <th>OBSERVAÇÃO</th>
                        <th style='display:none;'>ID</th>
                        <th style='display:none;'>Reg Venda</th>
                </thead>
                <tbody>
                        <?php foreach($data as $dado):?>
                        <tr name='tr-vendas'>
                                <td><?php echo $dado['nome'];?></td>
                                <td><?php echo $dado['data'];?></td>
                                <td><?php echo $dado['observacao'];?></td>
                                <td style="display:none;"><?php echo $dado['id'];?></td>
                                <td style="display:none;"><?php echo $dado['reg_venda'];?></td>
         
                        </tr>
                        <?php endforeach;?>
                </tbody>
               <footer>
                   <div class="row">
                       <div class="col col-sm-10"></div>
                       <div class="col col-sm-2">
                        
                    <a href="#" class="float" id="vendas-novo">
                    <i class="fa fa-plus my-float"></i>
                    </a>
                       </div>
                   </div>
               </footer>
        </table>
        </div>

</body>
