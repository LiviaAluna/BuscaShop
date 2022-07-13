<!DOCTYPE html>
<html lang="pt-br">

	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Tela de Cadastro</title>
	</head>
	
	<body id="register-page">

		<?php require_once 'header.php'; ?>
	
		<div class="main-container">
			<div class="register-card card-light">
				<div class="card-header">
					<h3>Cadastrar</h3>
				</div>
				<div class="card-content">
					<form action ="">
						<input class="input-field" type="text" name="nome" placeholder="Seu Nome..." required><br>
						<input class="input-field" type="text" name="email" placeholder="Email" required><br>
						<input class="input-field" type="tel" name="telefone" placeholder="Telefone" required><br>
						<input class="input-field" type="password" name="senha" placeholder="Senha" required><br>
						<input class="btn-dark" type="submit" name="submit" class="btn_form"><br>
					</form>
				</div>
			</div>
		</div>
	
	</body>

</html>
