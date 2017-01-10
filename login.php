<?php
    session_start();
    if (isset($_POST['email']) && empty($_POST['email']) == false) {
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));
        
        $dsn = "mysql:dbname=blog;host=localhost";
        $dbuser = "root";
        $dbpass = "";
        
        try {
            $pdo = new PDO($dsn, $dbuser, $dbpass);
            
            $sql = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
            
            if ($sql->rowCount() > 0) {
                $dado = $sql->fetch();
                $_SESSION['id'] = $dado['id'];
                header("Location: index.php");
            }
        } catch (PDOException $e) {
            echo "Falhou a conexão: ".$e->getMessage();
        }

    }
?>
<H1>Pagina de login.</H1><br/><br/>

<form method="POST">
    
    E-mail:<br/>
    <input type="text" name="email" /><br/><br/>
    Senha:<br/>
    <input type="password" name="senha" /><br/><br/>
    
    <input type="submit" value="Entrar" />
    
</form>