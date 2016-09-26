<?php $titrePage = 'Accueil'; ?>

<?php ob_start(); ?>

<h1>Bienvenue</h1>

<?php $contenuPage = ob_get_clean(); ?>

<?php require 'gabarit.view.php'; ?>