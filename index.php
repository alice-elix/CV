<?php

/////////// Rappel ///////////////

//Construction d'un tableau 
//$nomTableau = [
// clé => valeur, 
//];

//Appel à une valeur du tableau
//$nomTableau['clé_dont_on_veut_afficher_la_valeur'];
////////////////////////////////////


//Tableaux de données

//Noms des sections
$sections = [
    'competences'   => 'Compétences',
    'experiences'   => 'Expériences',
    'formations'    => 'Formations' ,
    'contact'       => 'Contact'
];

//Logos

$id = 1;
$logosWeb = [ 'html','css', 'js', 'bootstrap', 'jQuery', 'wordpress', 'php', 'mySql', 'symfony' ];
$logosApli = ['cordova','androidStudio','ionic'];
$logosComm = [ 'git','slack','trello'];

//Footer

$imgFooter = [
    'l1' => 'Lire',
    'l2' => 'Ecrire',
    'l3' => 'Apprendre',
    'l4' => 'Débattre',
    'l5' => 'Origami',
    'l6' => 'Cuisiner',
];

?>

<!-- Rendu html  -->

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        
        <title>CV Gaelle DAVID</title>
        <meta name="description" content="Developpeuse web et web mobile junior ! ">
        
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Orbitron&display=swap" rel="stylesheet">

        <!-- fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

        <!-- animate -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <!-- aos animate -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
       
        <!-- Styles perso -->  
        <link rel="stylesheet" type="text/css" href="css/style_cv_2.css">

    </head>

    <body>
        <nav class="navbar fixed-top navbar-expand-md navbar-dark  bg-nav nav-cv">
            <a class="navbar-brand animated slideInLeft name" href="#">Gaëlle David</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse ma" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-4 animated slideInRight">
                    <?php foreach ($sections as $key => $value):?>
                        <li class="nav-item">
                            <a class="nav-link navLink" href="#<?=$key;?>"><?=$value;?></a>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </nav>

        <header>
            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                <div class="fullname text-white">
                    <span class="gd animated rollIn"><h1>Gaëlle David</h1></span>
                    <span class="s"></span>
                    <span class="devWeb animated slideInRight"><h2>Développeuse Web</h2></span>
                </div>
            </div>
        </header>
        
        <main class="container">                          
            <section id="competences">
                <div class="container h-100 d-block">
                    <div class="content d-flex flex-column justify-content-around">
                        <div class="row d-flex justify-content-center align-items-center" data-aos="fade-down">
                            <h2 class="my-4 "><i class="fas fa-laptop-code "></i><?=$sections['competences']?></h2>
                        </div>
                        <div class="row d-flex rowLabel">
                            <div class="fullstack col-12 col-md-3  label">
                                <div class="row textLogo">
                                    <h3><strong>Réaliser et développer</strong></h3> <p>une interface utilisateur web avec ou sans solution de gestion de contenu, avec base de données et composants d'accès aux données - <em>fullstack</em></p>
                                </div>
                                <div class="row my-auto d-flex justify-content-center">
                                    <?php foreach ($logosWeb as $logoWeb):?>
                                        <div class="col-4 col-md-6 col-lg-4 item-picture ">
                                            <figure >
                                                <img src="img/p<?=$id++;?>.png" alt="logo <?=$logoWeb;?>" class="img-fluid logo">
                                            </figure> 
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div><!-- fin .fullstack -->
                            <div class="application col-12 col-md-3 offset-md-1  label">
                                <div class="row textLogo">
                                    <h3><strong>Maquetter une application</strong></h3><p>de la mise en place d'émulateur jusqu'à l'installation sur smartphone, en passant par la gestion des API</p>
                                </div>
                                <div class="row my-auto d-flex justify-content-center">
                                    <?php foreach ($logosApli as $logoApli):?>
                                        <div class="col-4 col-md-6 col-lg-4 item-picture ">
                                            <figure >
                                                <img src="img/p<?=$id++;?>.png" alt="logo <?=$logoApli;?>" class="img-fluid logo">
                                            </figure> 
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div><!-- fin .application -->
                            <div class="comm col-12 col-md-3 offset-md-1 label" >
                                <div class="row textLogo">
                                    <h3><strong>Partager et communiquer</strong></h3><p> autour d'un projet, avec une équipe ou directement avec des clients</p>
                                </div>
                                <div class="row my-auto d-flex justify-content-center">
                                    <?php foreach ($logosComm as $logoComm):?>
                                        <div class="col-4 col-md-6 col-lg-4 item-picture ">
                                            <figure >
                                                <img src="img/p<?=$id++;?>.png" alt="logo <?=$logoComm;?>" class="img-fluid logo">
                                            </figure> 
                                        </div>
                                    <?php endforeach;?>
                                </div>           
                            </div><!-- fin .comm  -->  
                        </div>
                    </div> 
                </div>
            </section>

            <section id="experiences">
                <div class="container h-100 d-block ">
                    <div class="content">
                        <div class="row d-flex justify-content-center align-items-center" data-aos="fade-down">
                            <h2><i class="fas fa-flask"></i> <?=$sections['experiences']?></h2>
                        </div>
                        <div class="row rowLabel">
                            <div class="col-12 col-md-5 pl-0 mb-2 stupeFlip">
                                <div class="card" data-aos="flip-left">
                                    <div class="front d-flex justify-content-center align-items-center">
                                        <h3 class="titleCard"><i class="fas fa-terminal"></i> Développeuse web</h3>
                                    </div>
                                    <div class="back">
                                        <ul class="realLink ">
                                            <li><a href="http://www.rucherduvalcoisin.fr/">Le Rucher du Val Coisin -<em> En cours</em></li></a>
                                            <li><a href="http://www.fede99.pcf.fr/" class="realLink animated shake " target="_blank" >"Fédération 99" -</a><em> Stage</em></li>
                                            <li>MotoClubBMW38 -<em> Site pour une association de motoclub</em></li>
                                            <li>WF3Food -<em> Application et son site de présentation</em></li>  
                                            <li><a href="https://www.egaliscope.fr" class=" realLink animated shake" target="_blank">Egaliscope -</a> <em>Site vitrine pour la structure</em></li>   
                                        </ul> 
                                    </div>
                                </div>  
                            </div>
                            <div class="col-12 col-md-5 pl-0 offset-md-1 mb-2 stupeFlip">
                                <div class="card" data-aos="flip-left"> 
                                    <div class="front d-flex justify-content-center align-items-center"> 
                                        <h3 class="titleCard"><i class="fas fa-archive"></i> Autres</h3>
                                    </div> 
                                    <div class="back">
                                        <ul>
                                            <li><strong>Sociologue </strong>:
                                                <ul>
                                                    <li>Egaliscope - <em>2ans</em></li>
                                                    <li>MIPROF - <em>Stage de 6 mois</em></li>
                                                </ul>
                                            </li>
                                            <li><strong>Opératrice en télésurveillance</strong> :
                                                <ul>
                                                    <li>Sotel - <em>7 ans</em></li>
                                                    <li>Atral - <em>3 ans</em></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </div>  
                    </div>   
                </div>
            </section>

            <section id="formations">
                <div class="container h-100 d-block">
                    <div class="content">
                        <div class="row d-flex justify-content-center align-items-center" data-aos="fade-down">
                            <h2><i class="fas fa-download"></i> <?=$sections['formations']?></h2>
                        </div>
                        <div class="row pb-5 ">
                            <div class="col-12 col-md-6 my-auto">
                                 <figure>
                                    <img src="img/wf3.png" alt="logo wf3" class="img-fluid">
                                </figure>
                            </div>
                            <div class="col-12 col-md-6 item mt-1">
                                <h3>WebForce3 - Toulouse </h3>
                                <p>Formation de développeuse web et web mobile - <em>6 mois</em>
                                    <div class="row">
                                        <div class="col-12">
                                            <strong>Validation du titre RNCP de développeuse web et web mobile</strong> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <strong>Validation des certifications "techniques d'intégration web" et "Techniques de développement web"</strong>
                                        </div>
                                    </div>
                                </p>
                            </div>                        
                        </div>
                        <div class="row rowLabel">
                            <div class="col-12 col-md-3 wb pb-5">
                                <figure class="d-flex justify-content-center py-3">
                                    <img src="img/cppu.png" alt="logo cppu" class="img-fluid  small">
                                </figure>
                                <h4>CPPU - L'Union </h4>
                                <p>Formation de gestion comptable - <em>3 mois </em>
                            </div> 
                            <div class="col-12 offset-md-1 col-md-3 wb pb-5">
                                <figure class="d-flex justify-content-center py-3">
                                    <img src="img/utm.svg.png" alt="logo utm" class="img-fluid  small">
                                </figure>
                                <h4>Université de Toulouse Le Mirail</h4>
                                <p>Master en sociologie - <em>2 ans </em><br><strong>Validation du titre de sociologue</strong><br>Licence en anthropologie - <em>1 ans </em><br><strong>Validation de la licence</strong></p>
                            </div> 
                            <div class="col-12 offset-md-1 col-md-3 wb pb-5">
                                <figure class="d-flex justify-content-center py-3">
                                    <img src="img/upmf.svg.png" alt="logo upmf" class="img-fluid small">
                                </figure>
                                <h4>Université Pierre Mendès France - Grenoble</h4>
                                <p>Licence en psychologie - <em>3 ans</em><br><strong>Validation de la licence</strong>
                            </div>                         
                        </div>   
                    </div>
                </div>
            </section> 

            <section id="contact">
                <div class="container h-100 d-block ">
                    <div class="content">
                        <div class="row d-flex justify-content-center align-items-center" data-aos="fade-down"><h2><i class="fas fa-id-badge"></i> <?=$sections['contact']?></h2>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-5">
                                <h3 class="pb-4"><i class="fas fa-book-reader"></i>Pour la petite histoire</h3>
                                <p class="textAreaP" id="littleStory">J’ai travaillé dix ans en tant qu’opératrice en télésurveillance en parallèle de mes études. Une fois le cursus souhaité obtenu, j’ai entrepris de créer une structure pour exercer le métier de sociologue. Je suis aujourd’hui en reconversion professionnelle dans le secteur du développement web et web mobile.</p>
                                <h3 class="py-4"><i class="far fa-lightbulb"></i>Pour se faire une petite idée</h3>
                                <p class="textAreaP">Un très bon relationnel, une grande dose de curiosité, un travail en équipe facile, très flexible et autonome et surtout... beaucoup de créativité</p>   
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <h3 class="pb-4"><i class="fas fa-paper-plane"></i>Des idées à partager ? C'est le moment de me contacter</h3>
                                <div id="reponse"></div>
                                <form id="contact-form" method="post">
                                    <div class="form-group ">  
                                        <input id="lastname" class="form-control" type="text" placeholder="Nom" name="lastname" required>
                                    </div>
                                    <div class="form-group">   
                                        <input id="firstname" class="form-control" type="text" placeholder="Prénom" name="firstname" required>
                                    </div>
                                    <div class="form-group">   
                                        <input id="email" class="form-control" type="mail" placeholder="Votre e-mail" name="email" required>
                                    </div>
                                    <div class="form-group"> 
                                        <input id="subject" class="form-control" type="text" placeholder="Objet de votre message" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="message" class="form-control" placeholder="Ici votre message" name="message" required></textarea>
                                    </div>
                                    <div class="form-group button d-flex justify-content-around">
                                        <button class="btn btn-dark botbut" type="submit" id="send">Envoyer</button>
                                        <button class="btn btn-dark botbut" type="reset" id="reset">Réinitialiser</button>
                                    </div>
                                </form>
                            </div>
                        </div>   
                    </div>
                </div>
            </section>
        </main>
        
        <footer class="text-white text-center">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="footerH3">Loisirs</h3>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php foreach ($imgFooter as $key => $value):?>
                        <div class="col-2 col-md-1">
                            <figure >
                                <img src="img/<?=$key;?>.png" alt="logo <?=$value;?>" class="img-fluid footLogo">
                                <figcaption class="figure-caption"><?=$value;?></figcaption>                
                            </figure> 
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </footer>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- Bootstrap  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <!-- aos animate -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>  
        
    <!-- Lien pour le flip -->
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>

    <!-- Script perso -->
    <script src="js/flip.js"></script>
    <script src="js/form.js"></script>
    <script src="js/aos.js"></script>


    </body>
</html>