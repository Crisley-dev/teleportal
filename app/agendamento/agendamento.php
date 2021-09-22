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

$sql = "SELECT id,date_format(dia,'%d/%m/%Y') as dia,date_format(reg_agendamentos,'%Y-%m-%d') as reg_agendamentos,horario,nome,date_format(data_nasc,'%d/%m/%Y') as data_nasc,whatsapp,obs,feedback FROM agendamentos where usuario = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user]);
$data = $stmt->fetchAll();
?>

<?php //Montagem da tabela utilizando HTML5 e PHP ?>

<body>
<input type="hidden" name="user" id="user" value="<?php echo $user;?>">
    <div class="container main">
   <table>
           <thead>
                   <th>Data Inicio</th>
                   <th>-</th>
                   <th>Data Fim</th>
           </thead>
           <tbody>
                   <tr>
                   <td> <input type="date" id="min-date" class="date-range-filter-agd"></td>
                   <td></td>
                   <td> <input type="date" id="max-date" class="date-range-filter-agd"></td>
                   </tr>
           </tbody>
   </table>             
       

        
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
                        <th style='display:none;'>reg</th>
                </thead>
                <tbody>
                       <?php
                       //foreach de popular a tabela.

                       foreach($data as $dado):
                                if($dado['feedback'] == 'Fechado'):
                               ?>
                        <tr name='tr-agend' style='background-color:#06a10e; color: #FFF'>
                                <?php endif;
                                if($dado['feedback'] == 'Foi e nao fechou'):
                                ?>
                        <tr name='tr-agend' style='background-color:#d62d82'>
                                <?php endif;
                                if($dado['feedback'] == 'Confirmado'):
                                ?>
                        <tr name='tr-agend' style='background-color:#e1e813'>
                                <?php endif;
                                if($dado['feedback'] == 'Retorno'):
                                ?>
                        <tr name='tr-agend' style='background-color:#cf0ca1; color: #FFF'>
                                <?php endif;
                                if($dado['feedback'] == 'Cancelamento'):
                                ?>
                        <tr name='tr-agend' style='background-color:#cc1208; color: #FFF'>
                                <?php endif; ?>
                                <td><?php echo $dado['dia'];?></td>
                                <td><?php echo $dado['horario'];?></td>
                                <td><?php echo $dado['nome'];?></td>
                                <td><?php echo $dado['data_nasc'];?></td>
                                <td><a href="https://wa.me/+55<?php echo  preg_replace('/[^a-zA-Z0-9]+/', '', $dado['whatsapp']);?>" target="_blank"><?php echo $dado['whatsapp'];?></a></td>
                                <td><?php echo $dado['obs'];?></td>
                                <td><?php echo $dado['feedback'];?></td>
                                <td style='display:none;'><?php echo $dado['id'];?></td>
                                <td style='display:none;'><?php echo $dado['reg_agendamentos'];?></td>
                        </tr>
                        <?php
                        //Finaliza o foreach.
                       endforeach;
                        ?>
                </tbody>
               <footer>
                       <?php //Cria o Botão Flutuante no canto da tela ?>
                       
                       <a href="#" class="float" id="novo">
                       <i class="fa fa-plus my-float"></i>
                       </a>
               </footer>
        </table>
        </div>

</body>
