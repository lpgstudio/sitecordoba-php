<?php
require_once("config.php");

date_default_timezone_set('America/Sao_Paulo');

$database = "heroku_93b6f8386c612fb";
; 		$host = 'us-cdbr-east-05.cleardb.net';
; 		$username = "bde521d256ce9e";
; 		$password = "a9477394";
		


try {
	$pdo = new PDO("mysql:dbname=$database;host=$host;charset=utf8", "$username", "$password");

	//CONEXAO MYSQLI PARA O BACKUP
	$conn = mysqli_connect(
		$host,
		$username,
		$password,
		$database
	);

} catch (Exception $e) {
	echo "Erro ao conectar com o banco de dados! " . $e;
}

?>