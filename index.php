

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regular Brasil ~ Login</title>
    <link rel="icon" href="images/wallpaper/icons/RBRPng.ico" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
 <body>
    <div class="tela-login-wallpaper">
    <div id="login-screen" class="tela-login-backsquare">
        <h2 style="font: bolder; color: rgb(99, 99, 99);"> Bem Vindo a Regular BR</h2>
        <img src="images/wallpaper/icons/RBRPng.ico" alt="Logo Regular Brasil" width="100px" height="100px">
        <br><br>
        <h2 style="color: rgb(116, 116, 116);"">Login</h2><br>
        <input type="text" id="usuario" class="input-login" placeholder="Usuário">
        <br><br>
        <input type="password" class="input-login" id="senha" placeholder="Senha">
        <br><br>
        <a href="inicio.php">
        <button onclick="login()" class="button-login button-login:hover">Entrar</button>
        </a>
    </div>
    <div id="main-content" style="display:none;">
        <h1> Bem Vindo ao Site Regular Brasil!</h1>
        <button onclick="logout()">Sair</button>
    </div>
    </div>
    <script src="ScriptsJS/login.js"></script>  
 </body>