<?php 
function conecta_bd(){
	// session_start inicia a sessão
	
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "metas";
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
	// $select = mysql_select_db('lanchonete') or die("Sem acesso ao DB, Entre em contato com o Administrador");

	if (mysqli_connect_errno($con)) {
		echo "Erro ao conectar ao banco de dados!";
		die();
	}
	return $con;
}
 ?>