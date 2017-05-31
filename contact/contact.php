<!DOCTYPE html>
<html>

<head>
        <?php include ('../php/head.html'); ?>
        <?php include ('../php/background.php'); ?>

        <title>Develo'Pont</title>
    
       
    
</head>
    
<body>
    
    <nav>
        <?php include ('../php/entete.html'); ?>
    </nav>
    
    <header>
        <?php include ('../php/header-logo.html'); ?>
    </header>

    
    <section>


                    
        
         <article>
        <?php
        // La variable $verif va nous permettre d'analyser si la sémantique de l'e-mail est bonne
        $verif="!^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$!";

        // On assigne et protège nos variables
        $votremail=$_POST["votremail"];
        $from=htmlspecialchars("From: ".$votremail."\r\n");
        $message=stripslashes(htmlspecialchars($_POST["message"]));

        // On met ici notre e-mail
        $destinataire="stef.pachot@gmail.com";

        /* On place le sujet du message qui, ici, sera toujours le même
        puisque dans la partie Html, on l'a mis en caché grâce au type="hidden"<gras><couleur nom="rouge">  </couleur></gras> avec comme valeur "Vous avez un nouveau message"  */
        $objet=$_POST['objet'];

        // C'est bon : on est ok, vérifions si l'e-mail est valide, grâce à notre sympathique REGEX

        if(trim($message)=="" & trim($votremail)=="")
            {
                print "";
            }

        elseif( !preg_match ($verif,$votremail))
            {
                print "Votre e-mail n'est pas valide";
            }
        // On vérifie s'il y a un message
        elseif (trim($message)=="")
            {
                echo "Y'en a marre des messages vides !";
            }

        // Si tout est ok, on envoie l'e-mail
        else
            {
                mail($destinataire,$objet,$message,$from);
                echo "Message envoyé au webmaster";
            }

        ?>
            <form method="post" action="contact.php">
 
                <h2>CONTACT</h2>
 
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
        </article>

    </section>
     <?php include ('../php/reseauxsociaux.html'); ?> 
    <aside>
    </aside> 
     
    
    <Footer>
        <?php include ('../php/copyright.html'); ?>
    </Footer>

    
    </body> 
    








</html>
