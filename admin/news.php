<form method="post" action="news.php">
    <label for="title">TITRE: </label>
    <input type="text" name="title" value="Titre de votre news" onfocus="this.value='';">
    <label for="nom">NOM: </label>
    <input type="text" name="nom" value="Votre nom" onfocus="this.value='';">
    <label for="textarea">News: </label>
    <textarea rows="10" cols="40" name="textarea" onfocus="this.value='';">Entrez votre texte</textarea>
    <input type="submit" value="Envoyer">
</form>


<?php 

$title = false;
$nom = false;
$textarea =false;
$date = date('d/m/Y h:i:s');
$POSTtitle = false;
$POSTnom = false;
$POSTtexte = false;

if (empty($_POST["title"])) {
        echo "";
    } elseif ($_POST["title"] === "Titre de votre news") {
        echo "";
    } else {
    $title = $_POST["title"];
        echo "";
    $POSTtitle = true;
}


if (empty($_POST["nom"])) {
        echo "";
    } elseif ($_POST["nom"] === "Votre nom"){
        echo "";
    } else  {
    $nom = $_POST["nom"];
        echo "";
    $POSTnom = true;
    }


if (empty($_POST["textarea"])) {
        echo"";
    } elseif ($_POST["textarea"] === "Entrez votre texte") {
        echo "";
    } else {
    $textarea = $_POST["textarea"];
        echo "";
    $POSTtexte = true;
    }

if ($POSTtitle == true and $POSTnom == true and $POSTtexte == true) {
    $post = "<article class='phpNews'><h2 class='h2news'> $title </h2><p class='pNews'> $textarea </p><div class= 'signature'> Posté par $nom le $date </div></article>";

    $fp = fopen ("news.txt", "a+");
        fwrite ($fp, $post);
        fclose ($fp);
    echo "Merci";
    } 

    else {
        echo "Remplissez tous les champs svp";
    }

    

?>
