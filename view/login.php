<!DOCTYPE html>
<html>

	<body id="login-page">
		<?php require_once 'header.php'; ?>

		<div class="main-container">

			<div class="login-card">
				<div class="form-info"><h1>Entrar</h1></div>

				<div class="form-container">
					<form action="" method="POST">
						<div class="input-container">
							<label for="client_email"><i>E-mail</i>:</label><br>
							<input name="client_email" id="client_email" type="email" class="text-fields">
						</div>
						<div class="input-container">
							<label for="client_password">Senha:</label><br>
							<input name="client_password" id="client_password" type="password" class="text-fields">
						</div>
						<input type="submit" class="button-dark" value="Entrar">
					</form>
				</div>

				<div class="other-options">
					<a href="#" class="link-dark">Criar conta?</a>
				</div>

			</div>

		</div>

	</body>

</html>
