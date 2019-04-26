<?php
    session_start();
    
    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        echo "Area restrita...";
        echo '<br><br>';
        echo "<a href='logout.php'>Sair</a>";
    } else {
        header("Location: login.php");
    }

?>