<?php
include "imports.php";
require "connection.php";
$current_user = wp_get_current_user();
$user = $current_user->data->user_login;

$sql = "SELECT nome,contato,fonte,feedback FROM contatos where usuario = ?";
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
                </thead>
                <tbody>
                        <?php
                        foreach($data as $dado){

                        ?>
                        <tr name='tr-contatos'>
                                <td><?php echo $dado['nome'];?></td>
                                <td><?php echo $dado['contato'];?></td>
                                <td><?php echo $dado['fonte'];?></td>
                                <td><?php echo $dado['feedback'];?></td>
                        </tr>
                        <?php
                        }
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
