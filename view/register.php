<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link rel="stylesheet" href="css/default.css">
</head>
<body id="register-page">
   <?php require_once "header.php"; ?>
   <div class="main-container">

        <div class="register-card">
            <!-- Titulo do formulário -->
            <div class="form-info">
                <h1>Cadastre-se</h1>  
            </div>  
            
            <!-- Formulário -->
            <div class="form-container">

                <form method="POST action" action="cadastra.php">
                    <div class="input-container">
                        <label>Nome: </label><br>
                        <input type="text" name="name" placeholder="Seu primeiro nome..." required><br><br>
                    </div>

                    <div class="input-container">
                        <label>Sobrenome: </label><br>
                        <input type="text" name="last name" placeholder="Seu sobrenome..." required><br><br>
                    </div>

                    <div class="input-container">
                        <label>E-mail: </label><br>
                        <input type="email" name="email" placeholder="Seu e-mail..." required><br><br>
                    </div>

                    <div class ="input-container">
                        <label>Senha: </label><br>
                        <input type="password" name="senha" placeholder="Crie uma senha..." required><br><br>
                    </div>

                    <div class="input-container">
                        <label>Confirmar senha: </label><br>
                        <input type="password" name="confirmar senha" placeholder="Confirme sua senha..." required><br><br>
                    </div>
                    <input type="submit" class="button-dark" value="Cadastrar">

                </form>
            </div>

            <!-- Outras opções -->
            <div class="other-options">
                <a href="#" class="link-dark">Entre</a>
            </div>
            
        </div>
     
    </div>
</body>
</html>