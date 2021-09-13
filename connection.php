<?php
/**
 * ARQUIVO DE CONEXÃO COM BANCO DE DADOS USANDO PDO;
 */
try
{
    $pdo = new PDO("mysql:dbname=teleportal;host=localhost;charset=utf8;","root","");
}
catch(PDOException $e)
{
    throw new PDOException($e);
} 

?>