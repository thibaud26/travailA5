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
                <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <article>
            <h1>Voici les codes d'accès :</h1>
            <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
            
            <p>
            Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
            La NASA vous remercie de votre visite.
            </p>
        </article>
            <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
    ?>
        <article>
            <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
            <form class="barreRecherche" action="admin.php" method="post">
                <input id="search" type="password" name="mot_de_passe" />
                <input id="search-btn" type="submit" value="" />
            </form>
            <div class="w3-border">
            <div class="w3-grey" style="height:24px;width:20%"></div>
            </div> 
        </article>
        <?php
    }
    ?>
    </section>
        <?php include ('../php/reseauxsociaux.html'); ?>
    <aside>
    </aside> 
     
    
    <Footer>
        <?php include ('../php/copyright.html'); ?>
    </Footer>

    
    </body> 
    








</html>
