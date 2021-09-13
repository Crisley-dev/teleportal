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

//Querry SQL para recuperação de dados do Banco.

$sql = "SELECT id, date_format(dia, '%d/%m/%Y') as dia,horario,nome,date_format(data_nasc,'%d/%m/%Y') as data_nasc,whatsapp,obs,feedback FROM agendamentos where usuario = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user]);
$data = $stmt->fetchAll();
?>~

<?= //Montagem da tabela utilizando HTML5 e PHP ?>

<body>
<input type="hidden" name="user" id="user" value="<?= $user;?>">
    <div class="container main">

        <table class="table table-hover nowrap" id="tb_agendamento">
                <thead class='table-title'>
                        <th>DIA</th>
                        <th>HORARIO</th>
                        <th>NOME COMPLETO</th>
                        <th>DATA NASC.</th>
                        <th>WHATSAPP</th>
                        <th>OBSERVAÇÃO</th>
                        <th>FEEDBACK</th>
                        <th style='display:none;'>ID</th>
                </thead>
                <tbody>
                       <?php
                       //foreach de popular a tabela.

                       foreach($data as $dado):
                               ?>
                        <tr name='tr-agend'>
                                <td><?= $dado['dia'];?></td>
                                <td><?= $dado['horario'];?></td>
                                <td><?= $dado['nome'];?></td>
                                <td><?= $dado['data_nasc'];?></td>
                                <td><?= $dado['whatsapp'];?></td>
                                <td><?= $dado['obs'];?></td>
                                <td><?=$dado['feedback'];?></td>
                                <td style='display:none;'><?= $dado['id'];?></td>
                        </tr>
                        <?php
                        //Finaliza o foreach.

                       endforeach;
                        ?>
                </tbody>
               <footer>
                       <?= //Cria o Botão Flutuante no canto da tela ?>
                       
                       <a href="#" class="float" id="novo">
                       <i class="fa fa-plus my-float"></i>
                       </a>
               </footer>
        </table>
        </div>

</body>
