<?php


$admin = new adminLogin($pdo);
$login = $admin->adminConnect($_POST["email"], $_POST["pwd"]);