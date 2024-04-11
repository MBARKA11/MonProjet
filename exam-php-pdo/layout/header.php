<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title><?php echo $title ?? "Recipes"; ?></title>
</head>
<body>
    <header>
        <?php require_once __DIR__ . '/nav.php'; ?>
    </header>
    <?php
    if (isset($_GET['error'])) {
    $errorMsg = getErrorMessage(intval($_GET['error']));
    require_once 'templates/error_notification.php';
    
}
?>
    <main>