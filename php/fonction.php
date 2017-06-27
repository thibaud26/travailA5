<!-- <!DOCTYPE html>
<html lang="fr">

<head>

    
    <?php include ('../php/head.html'); ?>
    <?php include ('../php/background.php'); ?>
    
    <title>Develo'Pont - Partenaires</title>
    
</head>
    
    <body class="bodyFonction">
    -->
<?php
// Creation d'infomration personnel pour chaques personnes de la promo 2017
/* array = value */  
/*"joffrey=clé*/ 

/* $biteacul = array( "joffrey" => array ( "prenom" => "Joffrey",
                                       "nom" => "Alcaraz",
                                       'liens' => 'http://www.developont.fr/~joffrey/',
                                       "photo" => "<img src='../Photos/Joffrey1.jpg'>"
                                     ),
                  "thibaud" => array ("prenom" => "Thibaud",
                                      "nom" => "Bousquainaud",
                                      "liens" => 'http://www.developont.fr/~thibaud/',
                                      "photo" => "<img src='../Photos/Thibaud1.jpg'>"
                                     ),
                  "fanny" => array ("prenom" => "Fanny",
                                    "nom" => "Paulet",
                                    "liens" => 'http://www.developont.fr/~fanny/',
                                    "photo" => "<img src='../Photos/Fanny1.jpg'>"
                                     ),
                  "alan" => array ("prenom" => "Alan",
                                    "nom" => "Lazzarotto",
                                    "liens" => 'http://www.developont.fr/~alan/',
                                    "photo" => "<img src='../Photos/Alan1.jpg'>"
                                     ),
                  "stephane" => array ("prenom" => "Stephane",
                                      "nom" => "Pachot",
                                      "liens" => 'http://www.developont.fr/~stephane/',
                                      "photo" => "<img src='../Photos/Stephane1.jpg'>"
                                     ), 
                  "Benoit" => array ("prenom" => "Benoit",
                                      "nom" => "Liebard",
                                      "liens" => 'http://www.developont.fr/~bli/',
                                      "photo" => "<img src='../Photos/BenoitLi1.jpg'>"
                                     ), 
                   "benoit" => array ("prenom" => "Benoit",
                                      "nom" => "Lagrange",
                                      "liens" => 'http://www.developont.fr/~bla/',
                                      "photo" => "<img src='../Photos/BenoitLa1.jpg'>"
                                     ),
                   "fred" => array ("prenom" => "Fred",
                                      "nom" => "Willhelm",
                                      "liens" => 'http://www.developont.fr/~fred/',
                                      "photo" => "<img src='../Photos/Fred1.jpg'>"
                                     ),
                   "jordan" => array ("prenom" => "Jordan",
                                      "nom" => "Andrevon",
                                      "liens" => 'http://www.developont.fr/~jordan/',
                                      "photo" => "<img src='../Photos/Jordan1.jpg'>"
                                     ),
                   "kevin" => array ("prenom" => "Kevin",
                                      "nom" => "Landry",
                                      "liens" => 'http://www.developont.fr/~kevin/',
                                      "photo" => "<img src='../Photos/Kevin1.jpg'>"
                                     ),
                   "lise" => array ("prenom" => "Lise",
                                      "nom" => "Bernaille",
                                      "liens" => 'http://www.developont.fr/~lise/',
                                      "photo" => "<img src='../Photos/Lise-Claire1.jpg'>"
                                     ),
                   "mehdi" => array ("prenom" => "Mehdi",
                                      "nom" => "Sapet",
                                      "liens" => 'http://www.developont.fr/~mehdi/',
                                      "photo" => "<img src='../Photos/Mehdi1.jpg'>"
                                     ),
                   "mourad" => array ("prenom" => "Mourad",
                                      "nom" => "Betraoui",
                                      "liens" => 'http://www.developont.fr/~mourad/',
                                      "photo" => "<img src='../Photos/Mourad1.jpg'>"
                                     ),
                   "piotr" => array ("prenom" => "Piotr",
                                      "nom" => "Kiszczak",
                                      "liens" => 'http://www.developont.fr/~piotr/',
                                      "photo" => "<img src='../Photos/Piotr1.jpg'>"
                                     ),
                    "nolwenn" => array ("prenom" => "Nolwenn",
                                      "nom" => "Repellin",
                                      "liens" => 'http://www.developont.fr/~nolwenn/',
                                      "photo" => "<img src='../Photos/Nolwenn1.jpg'>"
                                     ),
                   "mylene" => array ("prenom" => "valentin",
                                      "nom" => "Dragon",
                                      "liens" => 'http://www.developont.fr/~mylene/',
                                      "photo" => "<img src='../Photos/Mylene1.jpg'>"
                                     ),
                   "nima" => array ("prenom" => "Nima",
                                      "nom" => "Pichou",
                                      "liens" => 'http://www.developont.fr/~nima/',
                                      "photo" => "<img src='../Photos/Nima1.jpg'>"
                                     ),
                   "quentin" => array ("prenom" => "Quentin",
                                      "nom" => "Henneaux",
                                      "liens" => 'http://www.developont.fr/~quentin/',
                                      "photo" => "<img src='../Photos/Quentin1.jpg'>"
                                     ),
                   "rita" => array ("prenom" => "Rita",
                                      "nom" => "Hagymasi-Ratkai",
                                      "liens" => 'http://www.developont.fr/~rita/',
                                      "photo" => "<img src='../Photos/Rita1.jpg'>"
                                     ),
                   "sylvain" => array ("prenom" => "Sylvain",
                                      "nom" => "Yang",
                                      "liens" => 'http://www.developont.fr/~/',
                                      "photo" => "<img src='../Photos/Sylvain1.jpg'>"
                                     ), 
                  
); */
function display_tableau ($array) {
    
   echo "<ul class='PROMO'>";
    
    foreach ($array as $key => $value ){
        
        
        echo "<li><a target='_blank' href=" . $value ['liens'] . ">" . $value ["photo"] . ">";  
        
        echo "<strong class='prenom_'>" . $value ["prenom"] . "<br>"; 
        
        echo $value ["nom"] . "<br>";
        
        echo "</a></strong></li>";
        
        
        /* foreach ($value as $identite => $info) {
            echo "<li><strong class='prenom_'>" . $identite . "</strong>";
            
            echo "<strong class='prenom_'>" . $info . "</strong></li>";
            
        }*/
         
   }
    
    echo "</ul>";
       
}  
/* echo display_tableau ($biteacul); */


//  print_r ($tableau);







?>
     
    
    