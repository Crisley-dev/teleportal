<?php
/**
 *@author CRISLEY DUARTE DA SILVA <crisley.dev@gmail.com>
 *@copyright 2021 - CRISLEY DUARTE DA SILVA
 *Arquivo responsavel por gerar os campos de data inicio e data fim para filtro do relatorio.
 */

 //Importa a constante de diretorio 'PATH' do arquivo config

include "C:/xampp/htdocs/teleportal/config.php";
include_once PATH . "/imports.php";
require_once PATH . "/connection.php";

//Função wordpress de recuperar o login do usuario logado

$current_user = wp_get_current_user();
$user = $current_user->data->user_login;

$sql = "SELECT nome from tb_usuarios";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll();

?>
<input type="hidden" name="user" id="user" value="<?php echo $user;?>">
<table>
           <thead>
                   <th>Data Inicio</th>
                   <th>-</th>
                   <th>Data Fim</th>
                   <th></th>
                   <th>Tele</th>
                   <th></th>
           </thead>
           <tbody>
                   <tr>
                   <td> <input type="date" id="data-inicio"></td>
                   <td></td>
                   <td> <input type="date" id="data-fim"></td>
                   <td></td>
                   <td><select name="tele" id="tele">
                       <option value=""></option>
                       <?php
                       foreach($data as $dados):
                       ?>
                       <option value="<?php echo $dados['nome']; ?>"><?php echo $dados['nome']; ?></option>
                       <?php endforeach; ?>
                   </select></td>
                   <td></td>
                   <td><button class="botao_gerar" id="gerar-relat">Gerar</button></td>nd
                   </tr>
           </tbody>
   </table>            

   <div class="tb-relat-adm">
       
   </div>