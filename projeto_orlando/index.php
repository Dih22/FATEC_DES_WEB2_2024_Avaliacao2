
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vagas de Estágio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="box"> <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Logo_fatec_araras.png" alt=""><h2 class="textlogin">Login</h2>
    <form action="login.php" method="POST">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" placeholder="Insira seu login"required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Insira sua senha"required><br><br>
        <input class="botaoentrar" type="submit" value="Entrar">
    </form>
    </div>
    </div>
    <div>
        <center>
                <?php  
                    session_start();
                    if(isset($_SESSION['message'])){
                    $mensagem = $_SESSION['message'];
                    echo "<p style='color: red;'>$mensagem</p>";
                    unset($_SESSION['message']);
                    } 
                ?>
        </center>
    </div>
</body>
</html>