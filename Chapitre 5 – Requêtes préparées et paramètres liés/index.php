<?php
require 'connexion.php';

$stmt = $pdo->prepare("INSERT INTO user (name, email) VALUES (:name, :email)");
$stmt->execute([
    'name' => 'chiara',
    'email' => 'chiara@gmail.com'
]);
echo "Utilisateur ajouté.";



$name = 'Bob';
$email = 'bob@gmail.com';
$stmt = $pdo->prepare("INSERT INTO user (name, email) VALUES (:name, :email)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->execute();



$stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email");
$stmt->execute(['email' => 'chiara@gmail.com']);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
echo "Nom : " . $user['name'];

$stmt = $pdo->prepare("SELECT * FROM user WHERE id = ?");
$stmt->execute([3]);
