<!DOCTYPE html>
<html lang="fr">

<head>

        <!-- balises meta -->
        <meta charset="UTF-8"> <!-- encodage -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Justine Lemaire">
        <meta name="category" content="site vitrine collectivité">
        <meta name="copyright" content="Mairie de Brunembert">
        <meta name="description" content="Le site officiel de la mairie de Brunembert créé en 2019.
                    Brunembert ou Brunnesbercha. Un village au passé marqué. La montagne aux fontaines, c'est le nom que portait 
                    au douzième siècle le village de Brunembert, situé dans le coin le plus oriental de la fosse Boulonnaise
                    entre Quesques et Longueville.">
        <meta name="keywords" content="mairie, brunembert, philippe, delbarre, village, collectivité, aînés,
                    quillier, quilles, Ô comme 3 pommes, auberge, cheval, blanc, boulangerie, fayolle, leduc, pomme, cidre, stade,
                    château, justine, lemaire, monument, morts, blason, vierge, enfant, jésus, drapeau, français.">
        <meta name="publisher" content="ovh">
        <meta name="Reply-to" content="">
        <!-- content sécurity policy:  éviter les attaques de type  Cross Site Scripting ou les injections de données : invitation smartsupp -->

        <!-- GOOGLE FONT h1 et h2  et p-->
        <link href="https://fonts.googleapis.com/css2?family=Diplomata+SC&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">

        <!-- On importe la bibliothèque JQuery-->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <!-- Fontawesome îcones & Bootstrap GRID, JS -->   
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
            crossorigin="anonymous" rel="stylesheet">

        <script src="https://kit.fontawesome.com/4afe80f74f.js"></script>
        <!-- le B de Brunembert -->
        <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">

        <!-- css admin -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


        <!-- admin bootstrap -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <!-- home bootsnipp -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

        <!-- Favicon -->
        <link rel="icon" type="img/png" href="./img/logos/blason.png"><title>Brunembert.fr, site officiel du village de Brunembert</title>

        <!-- LINKS CSS -->
        <link href="./sidebar/css/simple-sidebar.css" rel="stylesheet">
        <link href="./css/global.css" rel="stylesheet">

</head>

<body>
 
    <header>     
        <section class="coordonnees-up">
         <nav class="nav-de-coordonnees">
             <ul class="coordonnees">
                <li>
                    <a href="https://www.facebook.com/brunembert" target="_blank"><img src="./img/logos/facebook-logo.png" width=40px; height=40px;> </a>
                </li>
    
                <li>
                    <!-- info flash -->
                    <script language="JavaScript">
                        <!--
                        //PLF-/
                        var position=0;
                        var msg="Plus qu'une seule attestation pour la journée et le couvre-feu, disponible dans les documents";/**ici tapez le texte qui va défiler */
                        var msg="     "+msg;
                        var longue=msg.length;
                        var fois=(50/msg.length)+1;
                        for(i=0;i<=fois;i++) msg+=msg;
                        function textdefil() {
                        document.form1.deftext.value=msg.substring(position,position+50);
                        position++;
                        if(position == longue) position=0;
                        setTimeout("textdefil()",300);
                        }
                        window.onload = textdefil;
                        //-->
                        </script>


                        <form name="form1" id="div-texte-qui-defile">
                        <div align="left" id="div-texte-qui-defile">
                        <input style="font-size:1.4em; background:rgb(231, 235, 235); color:#0f3a64; border:none; border-radius:2px;" type="text" name="deftext" size=50 height=100 id="div-texte-qui-defile">
                        </div>
                    </form>
                    <!-- info flash -->
                </li>
                <li>
                <i class="fas fa-globe"></i> 14, place Servois 62240 BRUNEMBERT 
                </li>
                <li>
                    <i class="fas fa-phone-square-alt"></i> 03 21 32 31 87
                <li>
                    <i class="fas fa-envelope"></i> mairie.brunembert@wanadoo.fr 
                </li>
                <li>
                    <h4 id=""> wwww.brunembert.fr | communauté Desvres-Samer</h4>  
                </li>

                </ul>   
         </nav>

        </section>
   
    

        <!-- menu de navigation -->
        <nav class="navbar navbar-light bg-light navbar-expand-lg navbar-header">
                <!-- hamburger / MENU PHONE -->
                
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
       
            <a href="#" class="popup" data-toggle="popover" data-trigger="hover" data-placement ="bottom" data-content="" 
            title="Cliquez sur Brunembert.fr pour emprunter un raccourci vers la page d'accueil">
     
                <a class="navbar-brand" href="index.php">
                  <img src="./img/logos/brunembert.png" alt="logo brunembert" style="height:100%; width:100%"; "> 
                  <br>   
                </a> 
            <br> 
            </a><!-- fin js info -->  
            
            

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ul-principal">

                        <li class="nav-item active">
                            <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Accueil <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=equipe">Conseil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=employes">Employés communaux</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=documents">Documents</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=articles">Articles</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=galerie">Galerie</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=faq">FAQ </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link contact-eloigne" href="index.php?page=contact"><i class="fa fa-envelope"></i> Contact</a>
                        </li>
                
                    </div>
        </nav>

    </header>


    
    <div class="content">

        <!-- my pages -->
        <a href="#" class="popup" data-toggle="popover" data-trigger="hover" data-placement ="bottom" data-content="" title="Cliquez sur cette flèche pour revenir en haut de cette page">
            <i class="fas fa-arrow-circle-up"></i>
        </a>

