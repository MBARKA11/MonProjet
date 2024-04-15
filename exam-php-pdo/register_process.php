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

require_once 'functions/email.php';
require_once 'functions/error.php';
require_once 'functions/redirect.php';

if (!isset($_POST['email'])) {
    // Redirige l'utilisateur vers index.php
    redirect('index.php');
}

$email = $_POST['email'];

if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    redirect('templates/error_notification.php?error=' . EMAIL_INVALID);
}

if (isSpam($email)) {
    redirect("templates/register_spam.php?error=" . EMAIL_SPAM);
}
$emailsFilePath = __DIR__ . '/register.php';
// Vérifier qu'il n'existe pas déjà dans un fichier donné
if (filesize($emailsFilePath) > 0){
    $emails = file($emailsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $isDuplicate = in_array($email, $emails);
}else{
    $isDuplicate = false;
}
// S'il existe déjà, j'affiche un message d'erreur
if($isDuplicate){
    redirect('templates/register_duplicate.php?error=' . EMAIL_DUPLICATE);
}else{
    // Sinon, j'enregistre l'email dans le fichier donné
    redirect('index.php?success=1');
}

}