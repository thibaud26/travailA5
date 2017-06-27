<!DOCTYPE html>
<html lang="fr">

<head>
        <?php include ('../php/head.html'); ?>
        <?php include ('../php/background.php'); ?>
    
        <title>Actualités</title>  
    
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>

</head>
    
<body>
    
     <nav>
        
        <?php include ('../php/entete.html'); ?>
        
    </nav>
    
    <header>
        
        <?php include ('../php/header-logo.html'); ?> 
        
    </header>

    
    <h2>Les news</h2>
    <section class="sectionNews">
        
        
        
        <?php 
        
        $post = file_get_contents ("../admin/news.txt", "r");
        echo $post;
        ?>

       
  
    </section>

    <aside>
        
        <?php include ('../php/reseauxsociaux.html'); ?>
   
    </aside>
    
    <footer>
        
        <?php include ('../php/copyright.html'); ?>
       
    </footer>
    
</body> 
    
</html>
