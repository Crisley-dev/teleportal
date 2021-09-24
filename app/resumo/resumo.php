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

//Query de seleção do nome e grupo do usuario logado
$sql = "SELECT nome,grupo from tb_usuarios where cpf = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user]);
$data = $stmt->fetch();
$grupo = $data['grupo'];


//Query de seleção de todos os cpfs e nomes da tabela de usuarios
$sql2 = "SELECT cpf,nome from tb_usuarios";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$tele = $stmt2->fetchAll();


?>
<input type="hidden" name="user" id="user" value="<?php echo $user;?>">
<input type="hidden" name="grupo" id="grupo" value="<?php echo $grupo;?>">
<table>
           <thead>
                   <th>Data Inicio</th>
                   <th>-</th>
                   <th>Data Fim</th>
                   <th>-</th>
                   <?php
                   //Adiciona o campo 'tele' caso o grupo do usuario logado seja adm
                    if($grupo == 'adm'): ?>
                   <th>Tele</th>
                   <th>-</th>
                   <th></th>
                   <?php endif; ?>
           </thead>
           <tbody>
                   <!-- Campo de filtro por data -->
                   <tr>
                   <td> <input type="date" id="data-inicio"></td>
                   <td></td>
                   <td> <input type="date" id="data-fim"></td>
                   <td></td>
                   <?php
                   //Verifica se o grupo é adm e adiciona uma select box com todos so usuarios cadastrados como tele 
                   if($grupo == 'adm'):?>
                        <td><select class="form-control" style="height:55px;border:solid;border-width: 1px; width:150px; text-align: center; font-size: 20px;" name="tele" id="tele">
                       <option value=""></option>
                       <?php
                       foreach($tele as $dados):
                       ?>
                       <option value="<?php echo $dados['cpf']; ?>"><?php echo $dados['nome']; ?></option>
                       <?php endforeach; endif; ?>
                       <td></td>
                   <td><button class="botao_gerar" id="gerar-relat">Gerar</button></td>
                   </tr>
           </tbody>
   </table>            
<!-- Div onde é adicionada a tabela resultado da busca. -->
   <div class="tb-relat">
       
   </div>