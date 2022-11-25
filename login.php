<?php
require 'init.php';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


if (empty($email) || empty($password)) {
    echo "E-mail ou senha incorretos!";
}

//$passwordHash = make_hash($password);
$PDO = db_connect();


$sql = "SELECT * FROM users WHERE email = :email AND password = :password";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
$user = $users[0];

if ($user['active'] == 0) {
    header('Location: access-denied.php');
} else if ($user['admin'] == 0) {
    header('Location: user-panel.php');
} else {
    header('Location:admin-panel.php');
}

if (count($users) <= 0) {
    echo "Email ou senha incorretos";
    exit;
}

// pega o primeiro usuário
$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];
