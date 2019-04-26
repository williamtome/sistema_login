<?php
require '../../config/connect.php';
if (isset($_POST['name']) && !empty($_POST['name'])) {
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        if (isset($_POST['password']) && !empty($_POST['password'])) {
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $password = md5(addslashes($_POST['password']));
            try {
                $sql = $pdo->prepare("INSERT INTO users SET `name` = :name, `email` = :email, `pass` = :password");
                $sql->bindValue(':name', $name);
                $sql->bindValue(':email', $email);
                $sql->bindValue(':password', $password);
                $sql->execute();
            } catch (PDOException $e) {
                echo "ERRO: ".$e->getMessage();
            }
            header("Location: ../../login.php");
            exit();
        }
    }
}