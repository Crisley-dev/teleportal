<?php

try
{
$pdo = new PDO('mysql:host=localhost;dbname=teleportal', 'root', '', array(PDO::MYSQL_ATTR_LOCAL_INFILE => true,));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
$error = 'Unable to connect to the database server' . $e ;
include 'error.html.php';
}
$pdo = null;

?>