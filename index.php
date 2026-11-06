<?php
$titrePage = 'Accueil';
require __DIR__ . '/header.php';
?>

<section id="accueil">
    <h2>Ton mème. Ton vote.</h2>
    <p>
        MEMEVOTE, l'application pour élire les meilleurs mèmes
        d'Internet.
    </p>
    <p>La culture Internet aux urnes.</p>
    <p>Découvrir les élections</p>
    <p>Un vote par personne. Résultats après clôture.</p>
</section>

<section id="themes">
    <h2>Exemples de thèmes d'élections</h2>
    <p>Les élections seront affichées ici lorsqu'elles seront disponibles.</p>
    <ul>
        <li>
            <article>
                <h3>Mèmes cultes</h3>
                <p>Élisez le mème le plus légendaire d'Internet.</p>
            </article>
        </li>
        <li>
            <article>
                <h3>Chats d'Internet</h3>
                <p>Quel chat mérite le titre de meilleur mème ?</p>
            </article>
        </li>
        <li>
            <article>
                <h3>Mèmes gaming</h3>
                <p>Votez pour le mème gaming le plus iconique.</p>
            </article>
        </li>
    </ul>
</section>

<section id="comment-ca-marche">
    <h2>Comment ça marche ?</h2>
    <ol>
        <li>Découvrez les mèmes proposés pour une élection.</li>
        <li>Connectez-vous pour participer au vote.</li>
        <li>Votez une seule fois pendant la période du scrutin.</li>
        <li>Consultez les résultats après la clôture du vote.</li>
    </ol>
</section>

<section id="contact">
    <h2>Une question ?</h2>
    <p><a href="contact.php">Nous contacter</a></p>
</section>

<?php require __DIR__ . '/footer.php'; ?>