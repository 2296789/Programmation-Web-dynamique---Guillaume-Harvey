<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tests unitaires des fonctions du modèle</title>
</head>

<body>

<h1>Test de obtenir_articles</h1>
<?php 
    require_once("modele.php");

    $articles = obtenir_articles();
    var_dump($articles);
?>    

<h1>Test de obtenir_article_par_id($id)</h1>
<?php 
    $idArticle = obtenir_article_par_id(1);
    var_dump($idArticle);
?>

<h1>Test de authentifier_usager($nom, $mot_passe)</h1>
<?php 
    $usager = authentifier_usager("AA", "aaaa");
    var_dump($usager);
?>

<h1>Test de modifie_article($titre, $texte, $id)</h1>
<?php 
    $test = insere_equipe("ABCD", "abcd", $idArticle);
    var_dump($test);
?>

<h1>Test de cree_article($titre, $texte, $auteur)</h1>
<?php 
    $idCreeArticle = cree_article("CCCC", "cccc", $usager);
    var_dump($idCreeArticle);
?>

<h1>Test de supprime_article($id)</h1>
<?php 
    $test = supprime_article($idCreeArticle);
    var_dump($test);
?>    
</body>
</html>

