<!DOCTYPE html>
<html lang="fr">

<head>
    
    <?php include ('../php/head.html'); ?>
    <?php include ('../php/background.php'); ?>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    
    <title>Develo'Pont - Galerie</title>
    
</head>
    
<body>
    
    <nav>
        
        <?php include ('../php/entete.html'); ?>
        
    </nav>
    
    <header>
        
        <?php include ('../php/header-logo.html'); ?> 
        
    </header>
      
    <section>
        
        <article class="couleur_galerie">
            
         
                <div id="imgdex">
	               <figure>
                        <img src="../Photos/1.jpg" alt="Photo" >
                        <figcaption>Photo Groupe</figcaption>
                   </figure>
                    
	               <figure>
                        <img src="../Photos/2.jpg" alt="Atelier" >
                        <figcaption>Atelier Lego</figcaption>
	               </figure>
            
	               <figure>
                        <img src="../Photos/3.jpg" alt="Atelier">
                        <figcaption>Atelier Lego</figcaption>
	               </figure>
                
                
	               <figure>
                       <img src="../Photos/5.jpg" alt="Sortie" >
                       <figcaption>Mediatheque</figcaption>
                    </figure>
                    
                
	               <figure>
                       <img src="../Photos/11.jpg" alt="Sortie" >
                       <figcaption>Mediatheque</figcaption>
                    </figure>

            
	               <figure>
                       <img src="../Photos/15.jpg" alt="Boulot" >
                       <figcaption>Au Boulot</figcaption>
                    </figure>
                
            
	               <figure>
                       <img src="../Photos/18.jpg" alt="Boulot" >
                       <figcaption>Au Boulot</figcaption>
                    </figure>
        
            
	               <figure style="transform: rotateX(8deg);">
                       <img src="../Photos/13.jpg" alt="Dab" >
                       <figcaption>Dab Groupe</figcaption>
                    </figure>
                    

                    <input type="range" min="1" onfocus="this.oldvalue = this.value;" oninput="updateImage(this);this.oldvalue = this.value;" id="ranger">

                </div>
        </article>
       
        <script>
            
            var imgdex = document.getElementById('imgdex'),
                figs = imgdex.querySelectorAll('figure'),
                imgcount = figs.length;
                ranger.max = imgcount;
                ranger.value = imgcount;
                

            for(var i=0;i<(imgcount -1);i++) {
	        var rotation = parseFloat(-92 + "." + (imgcount - i));
	        figs[i].style.transform = 'rotateX(' + rotation + 'deg)';
            }
            
            document.querySelector('#imgdex figure:last-child figcaption').style.opacity = 1;


            function updateImage(slider) {
	           var currentimg = document.querySelector('#imgdex figure:nth-child('+slider.value+')');
	           if (slider.oldvalue !== undefined) {
		       var oldimg = document.querySelector('#imgdex figure:nth-child('+(slider.oldvalue)+')');
	           }      
               
               else {
		       slider.oldvalue = imgcount;
		       var oldimg = document.querySelector('#imgdex figure:nth-child('+(slider.oldvalue)+')');
	           }
	
               if (slider.value < slider.oldvalue) { 
		       currentimg.style.transform = 'rotateX('+slider.value+'deg)';
	           } 
	
               if (slider.value > slider.oldvalue) {
		       var rotation = parseFloat(-92 + "." + (imgcount - slider.value));
		       oldimg.style.transform = 'rotateX(' + rotation + 'deg)';
               }
   
               if (slider.value !== slider.oldvalue) {
	           currentimg.querySelector('figcaption').style.opacity = 1;
	           oldimg.querySelector('figcaption').style.opacity = 0;
               }
            }
            
        </script>    
    
    </section>
    
    <aside>
        
        <?php include ('../php/reseauxsociaux.html'); ?> 
        
    </aside> 
     
    
    <Footer>
        
        <?php include ('../php/copyright.html'); ?>
        
    </Footer>

    
    </body> 
    

</html>
