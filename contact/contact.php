<!DOCTYPE html>
<html>

<head>
<<<<<<< HEAD:contact/contact.php
        <?php include ('../php/head.html'); ?>
        <?php include ('../php/background.php'); ?>
=======
        <?php include ('head.html'); ?>
        <?php include ('background.php'); ?>

        <title>Develo'Pont</title>
>>>>>>> master:contact.php
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
             
                <form action="mailto:joffrey@developont.fr" method="post"
                       name="contact" class="formulaire">
                    
                    <p>
                        <label for="user">Nom : </label>
                        <input type="text" id="user" value="" />
                    </p>
                    
                    <p>
                        <label for="emailaddress">Email : </label>
                        <input type="text" id="emailaddress" value="" />
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
             
                
                <a href="https://www.facebook.com/developont/" target="_blank"> 
                    <img class="contact" src="img/facebook.png" alt="facebook">
                </a> 
             
                <a href="https://twitter.com/developont" target="_blank">
                   <img class="contact" src="img/twitter.png" alt="twitter"> 
                </a>
            
             <a href="mailto:developont@gmail.com"
               target="_blank"> <img class="contact" src="img/mail.jpg" alt="icone mail"> 
             </a>
             
        </article>

    </section>
    
    <aside>
    </aside> 
     
    
    <Footer>
        <?php include ('../php/copyright.html'); ?>
    </Footer>

    
    </body> 
    








</html>
