<!DOCTYPE html>
<html>
    
    <html lang="fr">

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
             
            <h2>C<span>O</span>NTACT</h2>
             
                <div class="articleContact">
             
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
                     
                        <div class="sectionContact">
            
                            <h3>Nous contacter</h3>
                 
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
                        
                        <div class="sectionContact"> 
                
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
