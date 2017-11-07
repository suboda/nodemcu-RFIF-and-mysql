<?php
//this is slavar.php
	include('conexao.php');

	$user = $_GET['user'];


	$sql = "INSERT INTO tddados (user) VALUES (:user)";

	$stmt =  $PDO->prepare($sql);

	$stmt-> bindParam(':user',$user);
	

	if($stmt->execute()){
		echo "ok data save";

	}else{
		echo "erro_ao_salvar";
	}
?>