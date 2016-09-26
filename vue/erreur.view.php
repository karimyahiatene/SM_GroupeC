<?php $titrePage = 'Erreur'; ?>
<?php ob_start(); ?>
<div id="cadreProduits">
<?php
if ($codeErreur == 1)
    echo "<h1>La page demandé n'existe pas.</h1>";
?>
</div>
<?php $contenuPage = ob_get_clean(); ?>

<?php require 'gabarit.view.php'; ?>