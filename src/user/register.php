<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Usuário</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    
    <h1>Novo Usuário</h1>

    
    <div class="box-body">
        <form method="POST" action="submit_register.php">
            
            <strong>Nome:</strong><br/>
            <input type="text" class="input" name="name" /><br/><br/>

            <strong>E-mail:</strong><br/>
            <input type="text" class="input" name="email" /><br/><br/>

            <strong>Senha:</strong><br/>
            <input type="password" class="input" name="password" /><br/><br/>
            
            <input type="submit" class="button" value="Adicionar" />
            
        </form>

        <br><br>

        <a href="login.php">Voltar</a>
    </div>

</body>
</html>