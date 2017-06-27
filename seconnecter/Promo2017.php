<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Develo'Pont - Promo 2017</title>
    <?php include ('../php/head.html'); ?>
    <?php include ('../php/background.php'); ?>
</head>

<body>

    <nav>
        <?php $nav_en_cours = 'medias'; ?>
        <?php include ('../php/entete.php'); ?>
    </nav>

    <header>
        <?php include ('../php/header-logo.html'); ?>
    </header>

    <section>
        <article>
            <h2>Pr<span>o</span>motion 2017</h2>
                <ul>Voici la première promotion de Devel<span>o</span>'Pont. Elle a commencée en mai 2017 et se terminera en Novembre de la même année. Elle est composée d'une vingtaine de personnes:<br><br>
                (Petite astuce: si vous passez votre curseur sur chaques photos, vous pouvez voir le prénom de la personne, c'est cool hein !)
                </ul>
                <?php include ('../php/fonction.php'); ?>


        <?php include ('../php/reseauxsociaux.html');
        $biteacul = array( "joffrey" => array ( "prenom" => "Joffrey",
  /*"joffrey=clé*/                     "nom" => "Alcaraz",
  /* array = value */                  'liens' => 'http://www.developont.fr/~joffrey/',
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
                                      "photo" => "<img src='../Photos/Mourad.jpg'>"
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
                   "mylene" => array ("prenom" => "Mylene",
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


);
      echo display_tableau ($biteacul);

        ?>
                </article>
    </section>

    <aside>

    </aside>


    <footer>
        <?php include ('../php/copyright.html'); ?>
    </footer>


</body>









</html>
