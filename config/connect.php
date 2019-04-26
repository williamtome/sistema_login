<?php

$con = "mysql:dbname=sistema_login;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($con, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
}