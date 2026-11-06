<?php
$titrePage = 'Contact';
$messageEnvoye = $_SERVER['REQUEST_METHOD'] === 'POST';
require __DIR__ . '/header.php';
?>

<section id="contact">
    <h2>Contact</h2>
    <p>Une question ou une remarque ? Écris-nous avec ce formulaire.</p>

    <?php if ($messageEnvoye): ?>
        <p>Message envoyé.</p>
    <?php endif; ?>

    <form action="contact.php" method="post">
        <p>
            <label for="nom">Nom</label><br>
            <input type="text" id="nom" name="nom" required>
        </p>
        <p>
            <label for="email">Adresse e-mail</label><br>
            <input type="email" id="email" name="email" required>
        </p>
        <p>
            <label for="sujet">Sujet</label><br>
            <input type="text" id="sujet" name="sujet" required>
        </p>
        <p>
            <label for="message">Message</label><br>
            <textarea id="message" name="message" required></textarea>
        </p>
        <button type="submit">Envoyer</button>
    </form>
</section>

<?php require __DIR__ . '/footer.php'; ?>