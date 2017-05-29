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
        <?php include ('../php/copyright.html'); ?>
    </Footer>

    
    </body> 
    








</html>
