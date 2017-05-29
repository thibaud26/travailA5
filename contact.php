<!DOCTYPE html>
<html>

<head>
        <?php include ('head.html'); ?>
        <?php include ('background.php'); ?>

        <title>Develo'Pont</title>
</head>
    
<body>
    
    <nav>
        <?php include ('entete.html'); ?>
    </nav>
    
    <header>
        <?php include ('header-logo.html'); ?>
    </header>

    
    <section>


                    <h2>Contact</h2>
        
         <article>
             
                <form method="post" action="cible.php">
                    
                    <p>
                        <input type="text" name="nom" />
                    </p>
                    
                    <p>
                        <textarea name="message" rows="8" cols="45" >
                            Votre message.
                        </textarea>
                        <input type="submit" value="valider" />
                    </p>
                    
             
                </form>
             
        </article>

    </section>
    
    <aside>
    </aside> 
     
    
    <Footer>
        <?php include ('copyright.html'); ?>
    </Footer>

    
    </body> 
    








</html>
