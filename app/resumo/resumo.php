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

?>
<input type="hidden" name="user" id="user" value="<?php echo $user;?>">
<table>
           <thead>
                   <th>Data Inicio</th>
                   <th>-</th>
                   <th>Data Fim</th>
                   <th>-</th>
                   <th></th>
           </thead>
           <tbody>
                   <tr>
                   <td> <input type="date" id="data-inicio"></td>
                   <td></td>
                   <td> <input type="date" id="data-fim"></td>
                   <td></td>
                   <td><button class="botao_gerar" id="gerar-relat">Gerar</button></td>
                   </tr>
           </tbody>
   </table>            

   <div class="tb-relat">
       
   </div>