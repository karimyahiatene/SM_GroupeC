<?php

$pdo = new PDO('mysql:host=localhost;dbname=db_speedymarket; charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$term = $_GET['term'];

$requete = $pdo->prepare('SELECT * FROM tb_article WHERE libelleA LIKE :term');
$requete->execute(array('term' => '%'.$term.'%'));

$array = array(); // on crיי le tableau

while($donnee = $requete->fetch())
{
    array_push($array, $donnee['libelleA']);
}

echo json_encode($array);
?>