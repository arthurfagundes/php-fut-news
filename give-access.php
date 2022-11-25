<?php
$id = $_GET['id'];

try {
    $connect = new PDO("mysql:host=localhost;dbname=bdfutnews", "root", "");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->exec("set names utf8");
    echo 'Connected';
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}

$stmt = $connect->prepare("UPDATE users SET active = '1'  WHERE id = ?");
$stmt->bindParam(1, $id);
$stmt->execute();
header('Location: ../admin-panel.php');
