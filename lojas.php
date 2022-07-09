<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stores.css">
    <title>Criar Lojas</title>
</head>

<body>

<div class="header" id="header">
      <div class="site_name">
        <h1>BuscaShop</h1>
      </div>
      <div class="navigation_header">
        <a href="inicio.php">Sair</a>
      </div>
    </div>
    <main>
<div class="card_stores">
<form action ="">
<h2>Criar Lojas</h2>
<div class="textfield">
<label for="nome">Nome: </label>
<input type="text" name="nome" placeholder="Seu Nome..." required>
</div>
<br>
<div class="textfield">
<label for="text">Descrição: </label>
<input type="text" name="descricao" placeholder="Descreva sua loja..." required>
</div>
<br>
<div class="textfield">
<label for="endereco">Endereço: </label>
<input type="text" name="endereco" placeholder="Endereço da loja..." required>
</div>
<br>
<div class="textfield">
<label for="telefone">Telefone: </label>
<input type="tel" name="telefone" placeholder="(XX) XXXXX-XXXX" required>
</div>
<br>
<input type="submit" name="submit" class="btn_stores">
</form>
 </div>
    </main>
</body>
</html>