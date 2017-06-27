<a class="lienlogo" href="../accueil/accueil.php"><img class="logoDeveloPont" src="../img/logoSimple.png" alt="Logo de Developont"></a>

<ul class="menuDeroulant">
    <li <?php if ($nav_en_cours == 'accueil') {echo 'id="en-cours"';} ?> class="menu">
        <a href="../accueil/accueil.php"><span>A</span>ccueil</a>
    </li>

    <li <?php if ($nav_en_cours == 'simplon') {echo 'id="en-cours"';} ?> class="menu">
        <a href="../simplon.co/simplon.php"><span>S</span>implon.co</a>

            <ul class="sousmenu">
                <li><a class="S_MENU" href="../simplon.co/simplon.php">Simplon.co</a></li>
                <li><a class="S_MENU" href="../simplon.co/simplon-en-chiffres.php">Simplon en chiffres</a></li>
                <li><a class="S_MENU" href="../simplon.co/candidature.php">Candidater</a></li>
            </ul>
    </li>

    <li <?php if ($nav_en_cours == 'developont') {echo 'id="en-cours"';} ?> class="menu">

        <a href="../develo'pont/c'est_quoi.php"><span>D</span>evelo'Pont</a>

            <ul id="sousmenu1" class="sousmenu">
                <li><a class="S_MENU" href="../develo'pont/c'est_quoi.php">C'est quoi ?</a></li>
                <li><a class="S_MENU" href="../develo'pont/cestOu.php">C'est où ?</a></li>
                <li><a class="S_MENU" href="../develo'pont/L_equipe.php">L'équipe</a></li>
                <li><a class="S_MENU" href="../develo'pont/faq.php">FaQ</a></li>
            </ul>
    </li>

    <li <?php if ($nav_en_cours == 'partenaires') {echo 'id="en-cours"';} ?> class="menu">

        <a href="../partenaire/Qui_Finance.php"><span>P</span>artenaires</a>

            <ul id="sousmenu2" class="sousmenu">
                <li><a class="S_MENU" href="../partenaire/Qui_Finance.php">Qui finance ?</a></li>
                <li><a class="S_MENU" href="../partenaire/partenaires.php">Nos partenaires</a></li>
                <li><a class="S_MENU" href="../partenaire/Espace_publique_num%C3%A9rique.php">L'EPN</a></li>
            </ul>
    </li>

    <li <?php if ($nav_en_cours == 'contact') {echo 'id="en-cours"';} ?> class="menu">
        <a href="../contact/contact.php"><span>C</span>ontact</a>
    </li>

    <li <?php if ($nav_en_cours == 'medias') {echo 'id="en-cours"';} ?> class="menu">
        <a href="../seconnecter/Promo2017.php"><span>M</span>edias</a>

            <ul id="sousmenu3" class="sousmenu">
                <li><a class="S_MENU" href="../seconnecter/Promo2017.php">Promotion 2017</a></li>
                <li><a class="S_MENU" href="../seconnecter/GalerieTEST.php">Galerie photo</a></li>
            </ul>
    </li>

</ul>

<div class="menubarre">

<form class="barreRecherche" action="../php/attente.php" id="searchthis" method="get">
<input class="search" name="q" type="text" placeholder="Rechercher" />
<input class="search-btn" type="submit" value="" />
</form>

</div>
