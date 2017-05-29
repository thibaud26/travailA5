<?php
$fp = fopen ("compteur.txt", "r");/*ouvre le fichier compteur.txt, en lecture seule et place le pointeur au début du fichier*/
$contenu_fichier = fgets ($fp, 255);/*transfère le contenu de compteur.txt dans contenu_fichier 
($fp, contient l'emplacement du curseur)*/
fclose ($fp);/*ferme le fichier compteur.txt*/
$i = 0;

while ($i == 0) {
	$nb_min = 10;/*nombre minimum au hasard (on commence a 10 car fputs remplace que les caractere qu'il a besoin) ex"13 -> fputs(6) -> 63" seul 1 a êtait remplacer par 6*/
	$nb_max = 19;/*nombre maximum au hasard*/
	$number = mt_rand($nb_min,$nb_max);/*variable contenant le numéros entre nb_min et nb_max*/
	if ($contenu_fichier == $number) {/*teste si le nombre contenue dans notre fichier est egale a $number*/
		$i = 0;
	}
	else {
		$i = 1;
	}
}
$fp = fopen ("compteur.txt", "r+");/*ouvre le fichier compteur.txt, en lecture et ecriture et place le pointeur au début du fichier*/
fseek ($fp, 0);/* on place le pointeur du fichier à l'offset 0 grâce à l'instruction fseek(). En clair, on se positionne au tout début de notre fichier*/
fputs ($fp, $number);/*grâce à l'instruction fputs(), on écrit dans notre fichier la nouvelle valeur correspondant a $number*/
fclose ($fp);/*ferme le fichier compteur.txt*/
?>
<style type="text/css">
html {
    background-image: url(../background/background<?php echo $number; ?>.jpg);/*charge une image au hasard en rajoutant un numéro a background ex"background12.jpg"*/
}
</style>