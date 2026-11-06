<?php
$titrePage = isset($titrePage) ? htmlspecialchars($titrePage, ENT_QUOTES, 'UTF-8') : 'Accueil';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= $titrePage ?> - MEMEVOTE</title>
</head>
<body>
    <header>
        <h1>MEMEVOTE</h1>
        <nav aria-label="Navigation principale">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <hr>
    </header>

    <main>
