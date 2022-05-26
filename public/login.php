<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prototype</title>
	<link rel="stylesheet" href="css/default.css">
</head>

<body id="login-page">
	<?php require_once 'header.php'; ?>

	<div class="main-container">

		<div class="login-card">
			<div class="form-info"><h1>Entrar</h1></div>

			<div class="form-container">
				<form action="" method="POST">
					<div class="input-container">
						<label for="client_email"><i>E-mail</i>:</label><br>
						<input name="client_email" id="client_email" type="email">
					</div>
					<div class="input-container">
						<label for="client_password">Senha:</label><br>
						<input name="client_password" id="client_password" type="password">
					</div>
					<input type="submit" value="Entrar">
				</form>
			</div>

			<div class="other-options">
				<a href="#">Criar conta?</a>
			</div>

		</div>

	</div>

</body>

</html>
