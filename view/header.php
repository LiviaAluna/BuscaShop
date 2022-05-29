<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prototype</title>
	<link rel="stylesheet" href="css/default.css">
</head>

<div id="reusable-header">
	<!-- Logo -->
	<div class="logo-area"><h1>BuscaShop</h1></div>

	<!-- Barra de pesquisa -->
	<div class="search-area">
		<form action="" method="POST">
			<input name="filter-button" type="button" value="Filtro" class="button-light">
			<input name="search-field" type="text" placeholder="produtos, lojas, preços..." class="text-fields">
			<input type="submit" value="Pesquisar" class="button-light">
		</form>	
	</div>

	<!-- Opções -->
	<!-- Estas opções devem mudar dependendo do estado do usuário -->
	<div class="options-area">
		<ul>
			<li id="login-option"><a href="#" class="link-light">Entrar</a></li>
			<li id="register-option"><a href="#" class="link-light">Cadastrar</a></li>
		</ul>
	</div>
</div>
