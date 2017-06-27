<!DOCTYPE html>
<html lang="fr">

<head>
    
    <?php include ('../php/head.html'); ?>
    <?php include ('../php/background.php'); ?>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    
    <title>Galerie</title>
    
</head>
    
<body>
    
    <nav>
        <?php $nav_en_cours = 'medias'; ?>
        <?php include ('../php/entete.php'); ?>
        
    </nav>
    
    <header>
        
        <?php include ('../php/header-logo.html'); ?> 
        
    </header>
      
    <section>
        
        <article>
            
            <p><center>Ci dessous, quelques photos de la promotion 2017 en formation à <span>Develo'Pont</span> a Pont en Royans :-)</center></p>
            
             <div class='galeriePhoto'>
                <img class="slides" src="../Photos/1.jpg">
                <img class="slides" src="../Photos/2.jpg">
                <img class="slides" src="../Photos/3.jpg">
                <img class="slides" src="../Photos/20.jpg">
                <img class="slides" src="../Photos/16.jpg">
                <img class="slides" src="../Photos/6.jpg">
                <img class="slides" src="../Photos/21.jpg">
                <img class="slides" src="../Photos/22.jpg">
                <img class="slides" src="../Photos/9.jpg">
                <img class="slides" src="../Photos/10.jpg">
                <img class="slides" src="../Photos/24.jpg">
                <img class="slides" src="../Photos/12.jpg">
                <img class="slides" src="../Photos/13.jpg">
                <img class="slides" src="../Photos/14.jpg">
                <img class="slides" src="../Photos/17.jpg">
                <img class="slides" src="../Photos/15.jpg">
                <img class="slides" src="../Photos/18.jpg">
                <img class="slides" src="../Photos/25.jpg">
             </div>
             <div>
                <button class="left_button" onclick="plusDivs(-1)">&#10094;</button>
                <button class="right_button" onclick="plusDivs(1)">&#10095;</button>
            </div>
            
             <script>
                 var slideIndex = 1;
                 showDivs(slideIndex);

                 function plusDivs(n) {
                     showDivs(slideIndex += n);
                 }

                 function showDivs(n) {
                     var i;
                     var x = document.getElementsByClassName("slides");
                     if (n > x.length) {slideIndex = 1}    
                     if (n < 1) {slideIndex = x.length}
                     for (i = 0; i < x.length; i++) {
                         x[i].style.display = "none";  
                     }
                     x[slideIndex-1].style.display = "block";  
                 }
             </script>
            
            <br><br>
            
        </article>
    
    </section>
    
    <aside>
        
        <?php include ('../php/reseauxsociaux.html'); ?> 
        
    </aside> 
     
    
    <Footer>
        
        <?php include ('../php/copyright.html'); ?>
        
    </Footer>

    
    </body> 
    

</html>
