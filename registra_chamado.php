<?php

	session_start();

	$servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "kingscorpion";
    $conn = mysqli_connect($servidor, $usuario, $senha, $db);

	//trabalhando na montagem do texto
	//$titulo = str_replace('#', '-', $_POST['titulo']);
	//$categoria = str_replace('#', '-', $_POST['categoria']);
	//$descricao = str_replace('#', '-', $_POST['descricao']);

	$titulo = $_POST['titulo'];
	$categoria = $_POST['categoria'];
	$descricao = $_POST['descricao'];
	$idUser = (int)$_SESSION['id'];

	var_dump($idUser);
	echo "<br>";
	var_dump($titulo);
	echo "<br>";
	var_dump($categoria);
	echo "<br>";
	var_dump($descricao);
	echo "<br>";


	//INSERT INTO `chamados` (`protocolo`, `id`, `titulo`, `categoria`, `descricao`) VALUES (NULL, '1', 'teste', 'Criação Usuário', 'teste');
	$query = "INSERT INTO `chamados` (`protocolo`, `id`, `titulo`, `categoria`, `descricao`) VALUES (NULL,$idUser,'$titulo','$categoria','$descricao')";

	var_dump($query);
	echo "<br>";
	$result = mysqli_query($conn ,$query);

	var_dump($result);

	//$row = mysqli_fetch_array($result, MYSQLI_NUM);

	
	//$query2 = "SELECT * from chamados";
	//$testeselect = mysqli_query($conn ,$query2);
	//$testeresult = mysqli_fetch_array($testeselect, MYSQLI_NUM);
	//var_dump($testeresult);
	
	//implode('#', $_POST);
	//abrindo chamados via arquivo
	/*$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

	//abrindo o arquivo
	$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
	//escrevendo o texto
	fwrite($arquivo, $texto);
	//fechando o arquivo
	fclose($arquivo);
	*/
	//echo $texto;
	header('Location: consultar_chamado.php');
?>