<?php
//tis is canexao.php
	try {

		$HOST = "localhost";
		$DATABASE = "database";
		$USUARIO = "root";
		$SENHA ="";

		$PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $DATABASE .";charset=utf8", $USUARIO, $SENHA);

	}catch(PDOException $erro){

	//echo "string";		 
	 echo "conexao_erro";
		}
?>
