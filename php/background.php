<?php
$fp = fopen ("../php/compteur.txt","r");/*ouvre le fichier compteur.txt, en lecture seule et place le pointeur au début du fichier*/
$contenu_fichier = fgets ($fp, 255);/*transfère le contenu de compteur.txt dans contenu_fichier 
($fp, contient l'emplacement du curseur)*/
fclose ($fp);/*ferme le fichier compteur.txt*/
$i = 0;

while ($i == 0) {
	$nb_min = 10;/*nombre minimum au hasard (on commence a 10 car fputs remplace que les caractere qu'il a besoin) ex"13 -> fputs(6) -> 63" seul 1 a êtait remplacer par 6*/
	$nb_max = 25;/*nombre maximum au hasard*/
	$number = mt_rand($nb_min,$nb_max);/*variable contenant le numéros entre nb_min et nb_max*/
	if ($contenu_fichier == $number) {/*teste si le nombre contenue dans notre fichier est egale a $number*/
		$i = 0;
	}
	else {
		$i = 1;
	}
}
$fp = fopen ("../php/compteur.txt","r+");/*ouvre le fichier compteur.txt, en lecture et ecriture et place le pointeur au début du fichier*/
fseek ($fp, 0);/* on place le pointeur du fichier à l'offset 0 grâce à l'instruction fseek(). En clair, on se positionne au tout début de notre fichier*/
fputs ($fp, $number);/*grâce à l'instruction fputs(), on écrit dans notre fichier la nouvelle valeur correspondant a $number*/
fclose ($fp);/*ferme le fichier compteur.txt*/


if ($number < 15) {
    echo "  <style type='text/css'>
            
            .logo img
            {
                    filter: invert(1);
                    -webkit-filter: invert(1);
                    -moz-filter: invert(1);
                    -o-filter: invert(1);
                    -ms-filter: invert(1);
                    max-width: 100%;
            }
            .logo img:hover
            {
                    filter: invert(0);
                    -webkit-filter: invert(0);
                    -moz-filter: invert(0);
                    -o-filter: invert(0);
                    -ms-filter: invert(0);
                    animation: fadein 0.7s;
                    -moz-animation: fadein 0.7s;
                    -webkit-animation: fadein 0.7s;
                    -o-animation: fadein 0.7s;
                    -ms-animation: fadin 0.7s;
            } </style> ";
} else {
    echo "  <style type='text/css'>
            
            .logo img
            {
                    filter: invert(0);
                    -webkit-filter: invert(0);
                    -moz-filter: invert(0);
                    -o-filter: invert(0);
                    -ms-filter: invert(0);
                    max-width: 100%;
            }
            .logo img:hover
            {
                    filter: invert(1);
                    -webkit-filter: invert(1);
                    -moz-filter: invert(1);
                    -o-filter: invert(1);
                    -ms-filter: invert(1);
                    animation: fadein 0.7s;
                    -moz-animation: fadein 0.7s;
                    -webkit-animation: fadein 0.7s;
                    -o-animation: fadein 0.7s;
                    -ms-animation: fadin 0.7s;
            } </style> ";
}
?>



<style type="text/css">
html {
    background-image: url(../background/background<?php echo $number; ?>.jpg);/*charge une image au hasard en rajoutant un numéro a background ex"background12.jpg"*/
    animation: backFadeIn 10s;
}
    
@keyframes backFadeIn{
    0% {background-color: rgba(255,255,255,1);}
    10% {background-color: rgba(255,255,255,0.5);}
    100% {background-color: rgba(255,255,255,0);}
}
    
</style>
