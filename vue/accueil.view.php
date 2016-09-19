<?php $titrePage = 'Accueil'; ?>

<?php ob_start(); ?>

<h1>ACCEUIL</h1>
<p>Bienvenue Welcome Ongi etorri Bienvenido
<br />
<br />
A nuestra fantastica tienda virtual
<br />

Super rebajas!
</p>

<?php $contenuPage = ob_get_clean(); ?>

<?php require 'gabarit.view.php'; ?>