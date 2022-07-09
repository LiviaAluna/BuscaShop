<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css">
    <title>Tela de Cadastro</title>
</head>

<body>

<div class="header" id="header">
      <div class="site_name">
        <h1>BuscaShop</h1>
      </div>
      <div class="navigation_header">
        <a href="entrar.php">Entrar</a>
        <a href="cadastro.php">Cadastrar</a>
      </div>
    </div>
    <main>
 <div class="card_form">
<form action ="">
<h2>Cadastrar</h2>
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
</main>

</body>

</html>