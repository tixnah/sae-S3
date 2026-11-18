<?php
// Raphaël BODIN-LEHMANN
// Page de contact
$titrePage = 'Contact';
// Vérifie si le formulaire a été soumis en POST
$messageEnvoye = $_SERVER['REQUEST_METHOD'] === 'POST';
require __DIR__ . '/header.php';
?>

<section id="contact">
    <h2>Contact</h2>
    <p>Une question ou une remarque ? Écris-nous avec ce formulaire.</p>

    <div class="contact-contenu">
        <div>
            <!-- Affiche une confirmation si la page reçoit une requête POST -->
            <?php if ($messageEnvoye): ?>
                <p>Message envoyé.</p>
            <?php endif; ?>

            <!-- Envoie le formulaire en POST à cette même page -->
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
        </div>

        <aside class="faq">
            <h3>Questions fréquentes</h3>
            <details>
                <summary>Comment participer à une élection ?</summary>
                <p>Choisis un meme et vote pendant la période de l'élection.</p>
            </details>
            <details>
                <summary>Peut-on voter plusieurs fois ?</summary>
                <p>Non, chaque personne ne peut voter qu'une seule fois par élection.</p>
            </details>
            <details>
                <summary>Quand voir les résultats ?</summary>
                <p>Les résultats sont disponibles après la clôture du vote.</p>
            </details>
        </aside>
    </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>