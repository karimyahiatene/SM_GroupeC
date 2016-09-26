<?php $titrePage = 'Erreur'; ?>
<?php ob_start(); ?>
<?php
if ($codeErreur == 1)
    echo "<h1>La page demandé n'existe pas.</h1>";
?>
<?php $contenuPage = ob_get_clean(); ?>

<?php require 'gabarit.view.php'; ?>