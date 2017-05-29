<!DOCTYPE html>
<html>

<head>
        <?php include ('../php/head.html'); ?>
        <?php include ('../php/background.php'); ?>
        <?php include ('head.html'); ?>
        <?php include ('background.php'); ?>

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
                    
                    <p>
                        <label for="comments">Message : </label>
                        <textarea id="comments" rows="5" cols="25"></textarea>
                    </p>
                    
                
                        <div>
                            <p>
                            <input type="submit" value="Envoyer" />
                            <input type="reset" value="Reset" />
                            </p>
                        </div>
                    
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
