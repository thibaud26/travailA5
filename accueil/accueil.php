<!DOCTYPE html>
<html lang="fr">

<head>
        <?php include ('../php/head.html'); ?>
        <?php include ('../php/background.php'); ?>
    
        <title>Develo'Pont - Accueil</title>  
    
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
        
        <h2>Accueil</h2>

           
        <article>
            
            <h2>La formation developpeur web a <a href="http://simplon.co/" target="_blank"><span class="span-simplon">SIMPL<span>O</span>N.CO</span></a> c'est quoi?</h2>
            
            <ul>
                <li>Apprendre à créer des sites Internet, des applications web, et en faire son métier.</li>
                <li>En intensif, sur un cycle de 7 mois.</li>
                <li>Un apprentissage par la pratique, par projets.</li>
                <li>Une formation gratuite.</li>
                <li>Une formation ouverte à tous, et en priorité à des profils encore peu représentés dans le domaine : non-diplômés, demandeurs d’emploi, bénéficiaires de minima sociaux, personnes originaires de quartiers prioritaires, zones rurales, objectif de parité hommes-femmes. Et ce car il n’y a plus besoin d’être ingénieur ou très diplômé pour programmer</li>
                <li>Une formation dont la sélection se fait sur la motivation et l’envie de travailler en équipe !</li>
                <li>Un écosystème riche comprenant une communauté de mentors, de professionnels, des partenaires publics, privés et non-marchands…</li>
            </ul>
            
<!------------------------------------Programme------------------------------------->            
            <p>Pendant ces 6 mois intensif, vous allez découvrir et explorer les languages ci-dessous:</p>
            <div>
                <div class="Module-Tableau-container">

                    <article class="Module-Tableau-bar Module-Tableau-green">
                        <button class="Module-Tableau-bar-item Module-Tableau-button tablink Module-Tableau-activ" onclick="openCity(event,'FullStack JS')">FullStack JS</button>
                        <button class="Module-Tableau-bar-item Module-Tableau-button tablink" onclick="openCity(event,'PHP')">PHP</button>
                        <button class="Module-Tableau-bar-item Module-Tableau-button tablink" onclick="openCity(event,'Rubis')">Ruby</button>
                        <button class="Module-Tableau-bar-item Module-Tableau-button tablink" onclick="openCity(event,'Python')">Python</button>
                    </article>
  
                    <article id="FullStack JS" class="Module-Tableau-container Module-Tableau-border city " style="display: block;">
    	                <ul>
			                <li><span>DES COMPETENCES ET DES TECHNOLOGIES</span><br>Cette formation est dédiée au développement « front-end » (ce qu’on voit à l’écran, avec HTML, CSS, Javascript et ses différents frameworks comme Meteor, React, etc). Vous verrez tout de même un peu de développement « back-end » (les coulisses, les fonctionnalités), l’administration systèmes (sous Linux), la programmation d’objets connectés, la gestion de projet et la conception d’interfaces.</li>
			                <li><span>DES METHODES</span><br>Méthodologies agiles, pair programming, etc...</li>
			                <li><span>DES OUTILS</span><br>Git, Github, Slack, Sublime text, etc...</li>
			                <li><span>DES OUVERTURES SUR D'AUTRES DOMAINES</span><br>Sécurite, environnement, intelligence artificielle, consommation collaborative, entrepreneuriat, communication, marketing,… Autant de sujets qui pourront donner lieu à des interventions, sur votre demande notamment.</li>
			                <li><span>A PARTIR DE NOVEMBRE 2015</span><br>Possibilite de faire certifier sa formation au travers d’un titre professionnel inscrit au RNCP (Développeur logiciel, niveau III)</li>
		                </ul>
                    </article>

                    <article id="PHP" class="Module-Tableau-container Module-Tableau-border city" style="display: none;">
	                    <ul>
		                    <li><span>DES COMPETENCES ET DES TECHNOLOGIES</span><br>Vous ferez un mélange de développement « front-end » (ce qu’on voit à l’écran, avec HTML, CSS, Javascript), le développement « back-end » (les coulisses, les fonctionnalités) avec le langage  PHP, l’administration systèmes (sous Linux), la programmation d’objets connectés, la gestion de projet et la conception d’interfaces.</li>
		                    <li><span>DES METHODES</span><br>Méthodologies agiles, pair programming, etc...</li>
		                    <li><span>DES OUTILS</span><br>Git, Github, Slack, Sublime text, etc...</li>
		                    <li><span>DES OUVERTURES SUR D'AUTRES DOMAINES</span><br>Sécurité, environnement, intelligence artificielle, consommation collaborative, entrepreneuriat, communication, marketing,… Autant de sujets qui pourront donner lieu à des interventions, sur votre demande notamment.</li>
		                    <li><span>A PARTIR DE NOVEMBRE 2015</span><br>Possibilité de faire certifier sa formation au travers d’un titre professionnel inscrit au RNCP (Développeur logiciel, niveau III)</li>
	                    </ul>
                    </article>

                    <article id="Rubis" class="Module-Tableau-container Module-Tableau-border city" style="display: none;">
	                    <ul>
		                    <li><span>DES COMPETENCES ET DES TECHNOLOGIES</span><br>Vous ferez un mélange de développement « front-end » (ce qu’on voit à l’écran, avec HTML, CSS, Javascript), le développement « back-end » (les coulisses, les fonctionnalités) avec le langage Ruby, l’administration systèmes (sous Linux), la programmation d’objets connectés, la gestion de projet et la conception d’interfaces.</li>
		                    <li><span>DES METHODES</span><br>Méthodologies agiles, pair programming, etc...</li>
		                    <li><span>DES OUTILS</span><br>Git, Github, Slack, Sublime text, etc...</li>
		                    <li><span>DES OUVERTURES SUR D'AUTRES DOMAINES</span><br>Sécurité, environnement, intelligence artificielle, consommation collaborative, entrepreneuriat, communication, marketing,… Autant de sujets qui pourront donner lieu à des interventions, sur votre demande notamment.</li>
		                    <li><span>A PARTIR DE NOVEMBRE 2015</span><br>Possibilité de faire certifier sa formation au travers d’un titre professionnel inscrit au RNCP (Développeur logiciel, niveau III)</li>
	                    </ul>
                    </article>
  
                    <article id="Python" class="Module-Tableau-container Module-Tableau-border city" style="display: none;">
	                    <ul>
		                    <li><span>DES METHODES</span><br>Méthodologies agiles, pair programming, etc.</li>
		                    <li><span>DES OUTILS</span><br>Git, Github, Slack, Sublime text, etc.</li>
		                    <li><span>DES OUVERTURES SUR D'AUTRES DOMAINES</span><br>Sécurité, environnement, intelligence artificielle, consommation collaborative, entrepreneuriat, communication, marketing,… Autant de sujets qui pourront donner lieu à des interventions, sur votre demande notamment.</li>
		                    <li><span>A PARTIR DE NOVEMBRE 2015</span><br>Possibilité de faire certifier sa formation au travers d’un titre professionnel inscrit au RNCP (Développeur logiciel, niveau III)</li>
	                    </ul>
                    </article>

                </div>      
            
<!------------------------------------JavaScript------------------------------------>
                <script>
                    function openCity(evt, cityName) 
                    {
                        var i, x, tablinks;
                        x = document.getElementsByClassName("city");
                        for (i = 0; i < x.length; i++) 
                        {
                            x[i].style.display = "none";
                        }
                
                        tablinks = document.getElementsByClassName("tablink");
                        for (i = 0; i < x.length; i++) 
                        {
                            tablinks[i].className = tablinks[i].className.replace(" Module-Tableau-activ", "");
                        }
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " Module-Tableau-activ";
                    }
                </script>
<!---------------------------------Fin JavaScript----------------------------------->
            </div>
<!--------------------------------Fin Programme-------------------------------------> 
            
        </article>
        
      
        <article>
        
            <h2> Develo'P<span>o</span>nt à Pont en Royans</h2>
        
                <p>Pour la première fois en Isère, mais aussi la première fois dans un petit village authentique adossé au Vercors, Simplon.co propose une formation en développement web, en PHP, gratuite et intensive, de 7 mois à partir du mois d’avril 2017.</p>
            
                <p>Mené dans une démarche d’innovation sociale, ce projet constitue un double défi :</p>
            
            <ul>
                <li> Economique : participer à l’endiguement du chômage en répondant aux besoins de recrutement des entreprises du numérique engagées dans cette démarche citoyenne.</li>
                <li> Social : en agissant sur l’emploi et la qualification de publics marginalisés sélectionnés uniquement sur la base de critères sociaux et de leur motivation, et non selon les diplômes.</li>
            </ul>
            
            <a id="candidature" href="../simplon.co/candidature.php">Dép<span>o</span>sez votre candidature!</a>
            
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
