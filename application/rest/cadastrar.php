<?php
require_once 'get_conexao.php';
use br\com\lcobucci\utils\conexao\ConexaoMysql;

$con = ConexaoMysql::getInstance();

$statement = $con->prepare("INSERT INTO autor (nome) VALUES (?)");

$statement->bindValue(1, $_POST['nome']);
 
 try {
 	$statement->execute();
 	echo json_encode(array("status" => true));
 } catch (PDOException $e) {
 	echo json_encode(array("status" => false));
 }