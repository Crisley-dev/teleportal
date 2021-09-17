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

$sql = "SELECT id,date_format(dia, '%d/%m/%Y') as dia, nome, horario from retorno where usuario = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user]);
$data = $stmt->fetchAll();
?>
<body>
    <div class="container main">
    <input type="hidden" name="user" id="user" value="<?php echo $user;?>">

        <table class="table table-hover nowrap" id="tb_retorno">
                <thead class='table-title'>
                        <th>DIA</th>
                        <th>HORARIO</th>
                        <th>NOME COMPLETO</th>
                        <th style='display:none;'>ID</th>
                </thead>
                <tbody>
                        <?php foreach($data as $dado): ?>
                        <tr name='tr-retorno'>
                             <td><?php echo $dado['dia'];?></td>
                             <td><?php echo $dado['horario'];?></td>
                             <td><?php echo $dado['nome'];?></td>
                             <td style='display:none;'><?php echo $dado['id'];?></td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
               <footer>
                   <div class="row">
                       <div class="col col-sm-10"></div>
                       <div class="col col-sm-2">
                        
<a href="#" class="float" id="ret-novo">
<i class="fa fa-plus my-float"></i>
</a>
                       </div>
                   </div>
               </footer>
        </table>
        </div>

</body>
