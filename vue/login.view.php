<?php $titrePage = 'Connexion'; ?>

<?php ob_start(); ?>
<div id="cadreProduits">
    <h1>Connexion</h1>
    <form id="formLogin">
        <label for="pseudo">Nom d'utilisateur: </label>
        <input type="text" name="pseudo"/>
        <br />
        <br />
        <label for="pass">Mot de passe: </label>
        <input type="password" name="pass" />
        <br />
        <br />
        <input type="submit" name="connect" value="Connexion" />
    </form>
</div>
<?php $contenuPage = ob_get_clean(); ?>

<?php require 'gabarit.view.php'; ?>
