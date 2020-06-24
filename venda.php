<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Venda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/bootstrap.js"></script>

</head>
<body>
	<form method="POST"	 action="inserir.php" class="d-block m-auto text-center">
		
		<!-- <div class="form-group ">
			<label for="id">Código</label>
			<input type="number" class="form-control" id="id" name="id" placeholder="001" required hidden="">
		</div> -->

		<div class="form-group">
			<label for="valor">Valor Vendido</label>
			<input type="number" class="form-control" id="valor" name="valor" placeholder="10" required>
		</div>

		<div class="form-group">
			<label for="data">Data</label>
			<input type="date" class="form-control" id="data" name="data" placeholder="16/06/2020" required>
		</div>
            
		<button type="submit" class="btn btn-outline-success">Cadastrar</button>
		<button type="reset" class="btn btn-outline-danger">Limpar</button>
	</form>
</body>
</html>
