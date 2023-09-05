<?php
if(isset($_SESSION["username"]))
{
    echo "Bienvenue : " . $_SESSION["username"];
}
?>

<h1>Liste d'Articles</h1>

<form method="GET" action="index.php">
    <input type="text" name="contenu"/>
    <input type="submit" value="Rechercher"/>
    <input type="hidden" name="commande" value="Cherche"/>
<form>
<br><br>
<p><?php if(isset($_REQUEST["message"])) echo $_REQUEST["message"]; ?></p>
<?php
    while($rangee = mysqli_fetch_assoc($article))
    {
?> 
    <h2>Titre : <?= $rangee["titre"] ?></h2>
    <p><?= $rangee["texte"] ?></p>
    <p>Auteur : <?= $rangee["auteur"] ?></p>    
<?php
    if(isset($_SESSION["username"]))
    {
        if($_SESSION["username"] == $rangee["auteur"])
        {
?>
    <a href='index.php?commande=FormModifieArticle&id=<?= $rangee["id"] ?>'>
        Modifier cet article / 
    </a>

    <a href='index.php?commande=SupprimeArticle&id=<?= $rangee["id"] ?>'>
        Supprimer cet article
    </a>
<?php 
        }
    }
}
?>
    <br>
    <a href='index.php?commande=FormCreeArtciel'>Ecrire un article </a>?? avec lien de log in si sans log in, c'est bon??
    <br>
    <a href='index.php'>Retourner à l'accueil</a><br>
<?php
    if(isset($_SESSION["username"]))
    {
?>
        <a href="index.php?commande=Logout">Log out</a>
<?php
    }
    else
    {
?>
        <a href="index.php?commande=FormLogin">Log in</a>
<?php
    }
?>