<?php
session_start();

session_destroy();

session_unset(); // limpar as variáveis globais das sessões.

header("Location: login.php");