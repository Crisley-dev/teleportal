
<link rel="stylesheet" href="../../teleportal/style.css">

<script src="https://kit.fontawesome.com/c2d6a5c364.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<script src="../../teleportal/function.js"></script>
<?php
require_once "connection.php";
$current_user = wp_get_current_user();
$user = $current_user->data->user_login;

$sql = "SELECT date_format(dia, '%d/%m/%Y') as dia,horario,nome,date_format(data_nasc,'%d/%m/%Y') as data_nasc,whatsapp,obs,feedback FROM agendamentos where usuario = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user]);
$data = $stmt->fetchAll();
?>
<body>
        <input type="hidden" name="user" id="user" value="<?php echo $user;?>">
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
                </thead>
                <tbody>
                       <?php
                       foreach($data as $dado){
                               ?>
                        <tr name='tr-agend'>
                                <td><?php echo $dado['dia'];?></td>
                                <td><?php echo $dado['horario'];?></td>
                                <td><?php echo $dado['nome'];?></td>
                                <td><?php echo $dado['data_nasc'];?></td>
                                <td><?php echo $dado['whatsapp'];?></td>
                                <td><?php echo $dado['obs'];?></td>
                                <td><?php echo $dado['feedback'];?></td>
                        </tr>
                        <?php
                       }
                        ?>
                </tbody>
               <footer>
                       <a href="#" class="float" id="novo">
                       <i class="fa fa-plus my-float"></i>
                       </a>
               </footer>
        </table>
        </div>

</body>
