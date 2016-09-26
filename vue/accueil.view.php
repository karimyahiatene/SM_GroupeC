<?php $titrePage = 'Accueil'; ?>

<?php ob_start(); ?>
<div id="cadreProduits">
    <h1>Bienvenue</h1>
    <p>
        <br />
        Faites vos courses sur notre boutique en ligne et choisissez quand vous souhaitez les récupérer avec notre Drive! 
    </p>
    </div>
    <?php $contenuPage = ob_get_clean(); ?>

    <?php require 'gabarit.view.php'; ?>
