<?php
    session_start();
    require 'config/connect.php';

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $password = md5(addslashes($_POST['password']));      
        
        try {
            $sql = $pdo->query("SELECT * FROM users WHERE email = '$email' AND pass = '$password'");
            
            if ($sql->rowCount() > 0) {
                $data = $sql->fetch();
                $_SESSION['id'] = $data['id'];
                header("Location: index.php");
            }
        } catch (PDOException $e) {
            echo "Falhou a conexão: ".$e->getMessage();
        }

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistema</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <h1>Sistema - Login</h1><br>
    <h2>Bem-vindo</h2><br/><br/>

    <div class="box-body">
        <form method="POST">
            
            <strong>E-mail:</strong><br/>
            <input type="text" class="input" name="email" /><br/><br/>
            <strong>Senha:</strong><br/>
            <input type="password" class="input" name="password" /><br/><br/>
            
            <input type="submit" class="button" value="Entrar" />
            
        </form>
        <a href="src/user/register.php">Criar uma conta</a>
    </div>

</body>
</html>