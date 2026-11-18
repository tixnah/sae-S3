<?php
// Raphaël BODIN-LEHMANN
// Page d'accueil
$titrePage = 'Accueil';
require __DIR__ . '/header.php';
?>

<!-- Présente le projet -->
<section id="accueil">
    <div>
        <h2>Ton meme. Ton vote.</h2>
        <p>
            MEMEVOTE, l'application pour élire les meilleurs memes
            d'Internet.
        </p>
        <p>La culture Internet aux urnes.</p>
        <p>Découvrir les élections</p>
        <p>Un vote par personne. Résultats après clôture.</p>
    </div>
    <img src="<?= $dossierProjet ?>/Images/image_index.png" alt="Chat avec des lunettes de soleil" class="meme">
</section>

<!-- Donne des exemples de thèmes d’élections -->
<section id="themes">
    <h2>Élections à découvrir.</h2>
    <p>Les élections seront affichées ici lorsqu'elles seront disponibles.</p>
    <ul>
        <li>
            <article>
                <h3>Memes cultes</h3>
                <p>Élisez le meme le plus légendaire d'Internet.</p>
                <a class="bouton-fleche" href="<?= $dossierProjet ?>/themes/cultes.php" aria-label="Découvrir les memes cultes">&rarr;</a>
            </article>
        </li>
        <li>
            <article>
                <h3>Chats d'Internet</h3>
                <p>Quel chat mérite le titre de meilleur meme ?</p>
                <a class="bouton-fleche" href="<?= $dossierProjet ?>/themes/chats.php" aria-label="Découvrir les chats d'Internet">&rarr;</a>
            </article>
        </li>
        <li>
            <article>
                <h3>Memes gaming</h3>
                <p>Votez pour le meme gaming le plus iconique.</p>
                <a class="bouton-fleche" href="<?= $dossierProjet ?>/themes/gaming.php" aria-label="Découvrir les memes gaming">&rarr;</a>
            </article>
        </li>
    </ul>
</section>

<!-- Explique le déroulement d’une élection -->
<section id="comment-ca-marche">
    <h2>Comment ça marche ?</h2>
    <ol>
        <li>Découvrez les memes proposés pour une élection.</li>
        <li>Connectez-vous pour participer au vote.</li>
        <li>Votez une seule fois pendant la période du scrutin.</li>
        <li>Consultez les résultats après la clôture du vote.</li>
    </ol>
</section>

<!-- Lien vers la page de contact -->
<section id="contact">
    <h2>Une question ?</h2>
    <p><a href="contact.php">Nous contacter</a></p>
</section>

<?php require __DIR__ . '/footer.php'; ?>