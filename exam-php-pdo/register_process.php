<?php
session_start();
if(isset($_POST['name']) && !empty($_POST['name'])
&& isset($_POST['firstname']) && !empty($_POST['firstname'])
&& isset($_POST['email']) && !empty($_POST['email'])
&& isset($_POST['password']) && !empty($_POST['password'])
) {

require_once __DIR__ . '/functions/db.php';

$name = strip_tags($_POST['name']);
$firstname = strip_tags($_POST['firstname']);
$email = strip_tags($_POST['email']);   
$password = strip_tags($_POST['password']);


$pdo = getConnection();

$query = "INSERT INTO users (name, firstname, email, `password`) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($query);

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$stmt->execute([$name, $firstname, $email, $hashedPassword]);


header('Location:admin/admin.php?action=add_recipe');

}