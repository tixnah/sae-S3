<!-- Cristina BURLA - header -->

<?php
// Utilise le titre de la page ou « Accueil » par défaut 
$titrePage = isset($titrePage) ? htmlspecialchars($titrePage, ENT_QUOTES, 'UTF-8') : 'Accueil';
$dossierProjet = '/sae_s3';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $dossierProjet ?>/style.css">
    <title><?= $titrePage ?> - MEMEVOTE</title>
</head>

<body>
    <header>
        <h1 class="nom"><a href="<?= $dossierProjet ?>/index.php">MEMEVOTE</a></h1>

        <!-- Navigation principale avec les liens vers l’accueil et la page de contact -->
        <nav aria-label="Navigation principale">
            <ul>
                <li><a href="<?= $dossierProjet ?>/index.php">Accueil</a></li>
                <li><a href="<?= $dossierProjet ?>/contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <a href="<?= $dossierProjet ?>/candidat.php">Se présenter</a>
            <a href="<?= $dossierProjet ?>/connexion.php">Se connecter</a>
        </div>
    </header>

    <main>
