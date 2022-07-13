<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Criar loja</title>
</head>
<body id="store-creation-page">

	<?php require_once 'header.php'; ?>

	<div class="main-container">
		<div class="store-creation-card card-light">
			<div class="card-header">
				<h3>Criar loja</h3>
			</div>
			<div class="card-content">
				<form action="" method="post">
					<input class="input-field" type="text" name="store_name" placeholder="Nome"><br>
					<input class="input-field" type="text" name="store_description" placeholder="Descrição"><br>
					<input class="input-field" type="text" name="store_address" placeholder="Endereço"><br>
					<input class="input-field" type="tel" name="store_phone" placeholder="Telefone"><br>
					<input type="submit" class="btn-dark" value="Criar">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
