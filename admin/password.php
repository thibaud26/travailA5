<!DOCTYPE html>
<html>

<head>
    <?php include ('../php/head.html'); ?>
    <?php include ('../php/background.php'); ?>
    <title>Admin</title>  
    
    
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    
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
            <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
            <form action="admin.php" method="post">
                <p>
                <input type="password" name="mot_de_passe" />
                <input type="submit" value="" />
                </p>
            </form>
        </article>
    
    </section>
    
    <aside>
    </aside> 
     
    
    <Footer>
    </Footer>

    
    </body> 
    








</html>