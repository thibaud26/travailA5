<!DOCTYPE html>
<html lang="fr">

<head>
        <?php include ('../php/head.html'); ?>
        <?php include ('../php/background.php'); ?>

        <title>Develo'Pont - contact</title>

</head>

<body>

    <nav>
      <?php $nav_en_cours = 'contact'; ?>
      <?php include ('../php/entete.php'); ?>
    </nav>

    <header>
        <?php include ('../php/header-logo.html'); ?>
    </header>

    <section>

        <article>

            <h2>C<span>O</span>NTACT</h2>

                <div class="articleContact">

                        <div class="sectionContact">

                            <h3>Nous contacter</h3>

                            <p>Mail: <a href="mailto:developont@gmail.com"><span>developont@gmail.com</span></a>.<br>
                            Tel: 04 76 64 19 96</p>

                        <?php
                        // La variable $verif va nous permettre d'analyser si la sémantique de l'e-mail est bonne
                        $verif="!^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$!";

                        // On assigne et protège nos variables
                        if(isset($_POST["votremail"])) {
                            $votremail=$_POST["votremail"];
                            $from=htmlspecialchars("From: ".$votremail."\r\n");
                        }

                        if(isset($_POST["message"])) {
                            $message=stripslashes(htmlspecialchars($_POST["message"]));
                        }

                        // On met ici notre e-mail
                        $destinataire="stef.pachot@gmail.com";

                        /* On place le sujet du message qui, ici, sera toujours le même
                        puisque dans la partie Html, on l'a mis en caché grâce au type="hidden"<gras><couleur nom="rouge">  </couleur></gras> avec comme valeur "Vous avez un nouveau message"  */
                        if(isset($_POST["objet"])) {
                            $objet=$_POST['objet'];
                        }

                        // C'est bon : on est ok, vérifions si l'e-mail est valide, grâce à notre sympathique REGEX
                        if (isset($message) && isset($votremail)) {
                            if(trim($message)=="" & trim($votremail)=="")
                                {
                                    print "";
                                }

                            elseif( !preg_match ($verif,$votremail))
                                {
                                    print "<p class='msgContact'>Votre e-mail n'est pas valide</p>";
                                }
                            // On vérifie s'il y a un message
                            elseif (trim($message)=="")
                                {
                                    echo "<p class='msgContact'>Y'en a marre des messages vides !</p>";
                                }

                            // Si tout est ok, on envoie l'e-mail
                            else
                                {
                                    mail($destinataire,$objet,$message,$from);
                                    echo "<p class='msgContact'>Message envoyé au webmaster</p>";
                                }
                        }

                        ?>


                                <form method="post" action="contact.php">

                                    <p>
                                    Votre Email <br />
                                    <input type="text" name="votremail"/>

                                    <!-- Valeur par défaut de l'objet du mail -->
                                    <input type="hidden" name="objet" value="Vous avez un nouveau message"/>
                                    </p>

                                    <p>
                                    Votre message <br />
                                    <textarea cols="50" rows="10" name="message"></textarea>
                                    </p>

                                    <p>
                                    <button type="submit">Envoyer</button>
                                    </p>

                                </form>
                 <!-- On ferme la balise form, notre formulaire est fini -->
                        </div>

                        <div class="sectionContactMap">

                            <h3>Nous trouver</h3>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2818.213054152995!2d5.341972315816723!3d45.061188979098176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478abb7fe41772ef%3A0x25f34dd863b4056e!2sGrande+Rue%2C+38680+Pont-en-Royans!5e0!3m2!1sfr!2sfr!4v1496353224246" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                </div>

        </article>

        </section>

        <aside>

            <?php include ('../php/reseauxsociaux.html'); ?>

        </aside>


        <footer>

            <?php include ('../php/copyright.html'); ?>

        </footer>


</body>


</html>
