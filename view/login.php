<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="/view/css/default.css">
		<title>Tela de Login</title>
	</head>

	<body id="login-page">

		<?php require_once 'header.php'; ?>

		<div class="main-container">
			<div class="login-card card-light">
				<div class="card-header">
					<h3>Entrar</h3>
				</div>
				<div class="card-content">
					<form action="" method="post">
						<label for="email"><i>E-mail:</i></label><br>
						<input class="input-field" type="email" name="email" placeholder="Email"><br>
						<label for="password">Senha:</label><br>
						<input class="input-field" type="password" name="password" placeholder="Senha"><br>
						<input type="submit" class="btn-dark" value="Entrar">
					</form>
				</div>
			</div>
		</div>

	</body>

</html>
