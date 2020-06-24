<?php 
	include('banco/conexao.php');
	$conexao = conecta_bd();

	$id = $_POST['id'];
	$valor = $_POST['valor'];
	$data = $_POST['data'];

	

				$query = "SELECT *
				From venda
				Where id = '$id'";

			$resultado = mysqli_query($conexao, $query);
			$contagem = mysqli_num_rows($resultado);

	
	if ( $contagem > 0 ) {

		echo "Erro ao Cadastrar!";

	} else{
		$cadastrar = mysqli_query($conexao, "INSERT INTO venda ( valor_venda, data) VALUES ( '$valor', '$data')"); //insere os campos na tabela
		header("Location:index.html");

	}
	

 ?>