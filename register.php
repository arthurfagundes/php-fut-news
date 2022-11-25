<?php
require 'init.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$birthdate = $_POST['birthdate'];

$passwordHash = make_hash($password);

try {
    $conexao = new PDO("mysql:host=localhost;dbname=bdfutnews", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
    echo 'Connected';
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}

$stmt = $conexao->prepare("INSERT INTO users(name, email, password, birthdate) VALUES (?, ?, ?, ?)");
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $passwordHash);
$stmt->bindParam(4, $birthdate);

$stmt->execute();
header('Location: login-form.php');
