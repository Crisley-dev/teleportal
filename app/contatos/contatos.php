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

$sql = "SELECT id,nome,contato,fonte,feedback FROM contatos where usuario = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user]);
$data = $stmt->fetchAll();

?>

<body>
<input type="hidden" name="user" id="user" value="<?php echo $user;?>">
    <div class="container main">

        <table class="table table-hover nowrap" id="tb_contatos">
                <thead class='table-title'>
                        <th>NOME</th>
                        <th>CONTATO</th>
                        <th>FONTE</th>
                        <th>FEEDBACK</th>
                        <th style='display:none;'>ID</th>
                </thead>
                <tbody>
                        <?php
                        foreach($data as $dado):

                        ?>
                        <tr name='tr-contatos'>
                                <td><?php echo $dado['nome'];?></td>
                                <td><?php echo $dado['contato'];?></td>
                                <td><?php echo $dado['fonte'];?></td>
                                <td><?php echo $dado['feedback'];?></td>
                                <td style='display:none;'><?php echo $dado['id'];?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                </tbody>
               <footer>
                   <div class="row">
                       <div class="col col-sm-10"></div>
                       <div class="col col-sm-2">
                        
                    <a href="#" class="float" id="ct-novo">
                    <i class="fa fa-plus my-float"></i>
                    </a>
                       </div>
                   </div>
               </footer>
        </table>
        </div>

</body>
