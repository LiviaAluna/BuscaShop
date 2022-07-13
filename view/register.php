<!DOCTYPE html>
<html lang="pt-br">

	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href="/view/css/default.css">
	    <title>Tela de Cadastro</title>
	</head>
	
	<body id="register-page">

		<?php require_once 'header.php'; ?>
	
		<div class="main-container">
			<h2>Cadastrar</h2>
			<form action ="">
				<div class="textfield">
					<label for="nome">Nome: </label>
					<input type="text" name="nome" placeholder="Seu Nome..." required>
				</div>
				<br>
				<div class="textfield">
					<label for="email">E-mail: </label>
					<input type="text" name="email" placeholder="Email" required>
				</div>
				<br>
				<div class="textfield">
					<label for="telefone">Telefone: </label>
					<input type="tel" name="telefone" placeholder="(XX) XXXXX-XXXX" required>
				</div>
				<br>
				<div class="textfield">
					<label for="senha">Senha: </label>
					<input type="password" name="senha" placeholder="Senha" required>
				</div>
				<br>
				<input type="submit" name="submit" class="btn_form">
			</form>
		</div>
	
	</body>

</html>
