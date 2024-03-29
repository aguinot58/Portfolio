<?php

    session_start();

    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

    if ($curPageName == "index.php") {
        $lien = "./";
    } else {
        $lien = "./../";
    }

    require $lien.'pages/conn_bdd.php';

    if (!isset($_SESSION['envoi_message'])){
        $_SESSION['envoi_message'] = false;
    }

    if ($_SESSION['envoi_message']== true){
        ?>
            <script type="text/javascript">
                alert ("Message envoyé avec succès !");
            </script>
        <?php
        $_SESSION['envoi_message']= false;
    }

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio Aymeric Guinot">
        <meta name="keywords" content="dev, code, html, css, javascript, php, mysql, full-stack, web, développeur, portfolio">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/animations.css">
        <link rel="stylesheet" href="./css/responsive.css">
        <title>Portfolio d'Aymeric Guinot - développeur web full-stack</title>
        <link rel="shortcut icon" type="image/ico" href="./img/icon.png">
    </head>

    <body>
        <header>
            <div class="conteneur-header">
                <div class="conteneur-logo">
                    <a href="index.php">
                        <div class="logo">
                            <p class="rouge text-flicker-in-glow">A</p>
                            <p class="blanc">G</p>
                        </div>
                    </a>
                </div>
                <div class="conteneur-nav">
                    <div class="nav-bar">
                        <a href="#accueil" class="accueil">Accueil</a>
                        <a href="#a_propos" class="a_propos">A propos</a>
                        <a href="#competences" class="competence">Compétences</a>
                        <a href="#portfolio" class="folio">Portfolio</a>
                        <a href="#contact" class="contact">Contact</a>
                        <a href="./files/CV.pdf" download="newfilename">C.V.</a>
                    </div>
                    <div class="burger">
                        <div id="menuToggle">
                            <input type="checkbox" />
                            <span></span>
                            <span></span>
                            <span></span>
                            <ul id="menu">
                                <a href="#accueil" class="accueil"><li>Accueil</li></a>
                                <a href="#a_propos" class="a_propos"><li>A propos</li></a>
                                <a href="#competences" class="competence"><li>Compétences</li></a>
                                <a href="#portfolio" class="folio"><li>Portfolio</li></a>
                                <a href="#contact" class="contact"><li>Contact</li></a>
                                <a href="./files/CV.pdf" download="newfilename"><li>C.V.</li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="follow-me">
            <ul>
                <li>
                    <small>Réseaux</small>
                </li>
                <!--<li>
                    <a class="facebook" target="_blank" href="#" title="Follow on Facebook"><span>Facebook</span></a>
                </li>-->
                <li>
                    <a class="github" target="_blank" href="https://github.com/aguinot58" title="Follow on GitHub"><span>Github</span></a>
                </li>
                <li>
                    <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/aymeric-guinot-4657a0240/" title="Connect on Linkedin"><span>Linkedin</span></a>
                </li>
                <li>
                    <a class="twitter" target="_blank" href="https://twitter.com/GuinotA_Dev" title="Follow on Twitter"><span>Twitter</span></a>
                </li>
                <!--<li>
                    <a class="instagram" target="_blank" href="#" title="Follow on Instagram"><span>Instagram</span></a>
                </li>-->
            </ul>
        </div>

        <footer>
        <div class="pied"><p>Aymeric Guinot <span class="rouge">© 2022</span> | <a href="./pages/mentions.html" >mentions <span class="rouge">légales</span></a></p></div>
        </footer>


        <div id="fullpage">

            <section id="accueil_" class="vertical-scrolling" title="accueil">
                <div class="text middle accroche_1" data-text="Guinot Aymeric">
                    <span class="rouge">Guinot</span> Aymeric
                </div>
                <!--<p id="accroche1" class="accroche_1 blanc"><span class="rouge">Aymeric</span> Guinot</p>-->
                <p id="accroche2" class="accroche_2 blanc">Développeur Web <span class="heartbeat rouge">Full-stack</span></p>
                <img class="deco_pc" src="./img/laptop.png" alt="image d'un pc, une tablette et un smartphone"></img>
                <div id="scroll_down" class="btn_scroll"><a href="#a_propos"><span></span></a></div>
            </section>

            <section id="a_propos_" class="vertical-scrolling" title="a_propos">
                <div class="conteneur-presentation">
                    <div class="conteneur-presentation-txt">
                        <p id="titre-presentation" class="titre_presentation"><span class="titre_presentation rouge heartbeat">A propos de moi</span></p>
                        <p>Je me prénomme Aymeric, et je réside actuellement dans la Nièvre en Bourgogne.</p>
                        <p>Déjà titulaire d'un diplôme d'analyste-programmeur, 
                            après une dizaine d'années d'expérience à faire du développement logiciel en interne dans une PME, et suite à une opportunité de changement, 
                            j'ai décidé de me former à de nouveaux langages et outils, afin d'aller découvrir de nouveaux horizons dans le monde du développement web.
                        </p>
                        <p>C'est donc pourquoi je suis aujourd'hui une formation diplômante en tant que développeur web full-stack.</p>
                        <p>Vous pourrez suivre ici l'évolution de mes compétences au long de ma formation, puis dans un deuxième temps, mes futures 
                            réalisations professionnelles.
                        </p>
                        <p class="mobile">N'hesitez pas à me contacter par l'un des différents moyens mis à votre disposition sur ce site.</p>
                    </div>
                    <div class="conteneur-presentation-img">
                        <img class="portrait" src="./img/portrait.jpg" alt="photo de moi-même"></img>
                    </div>
                </div>
            </section>

            <section id="competences_" class="vertical-scrolling" title="competences">

                <div class="conteneur-brain">
                    <img class="brain" src="./img/mimir.png" alt="Schéma avec des icones de compétences reliées à différentes zones du cerveau"></img>
                </div>
                <div class="conteneur-code">
                    <img class="code" src="./img/ada.svg" alt="Exemple de code HTML"></img>
                </div>

                <div class="pres-comp">
                    <p class="titre_presentation"><span class="rouge heartbeat">Mes compétences</span></p>
                </div>

                <div class="conteneur-competences">
                    <div class="conteneur-comp-trans">
                        <h4><span class="rouge">Savoir-être professionnels</span></h4>
                        <ul>
                            <li>Autonome</li>
                            <li>Sens de l'organisation</li>
                            <li>Réactif</li>
                            <li>Rigoureux</li>
                            <li>Ouverture d'esprit</li>
                            <li>Capacité d'adaptation</li>
                            <li>Travail en équipe</li>
                            <li></li>
                            <li>Fluent in english</li>
                        </ul>
                    </div>
                    <div class="conteneur-comp">
                        <h4><span class="rouge">Savoir-faire professionnels</span></h4>

                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>Front-end :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/html.png" alt="logo html 5" title="HTML 5"></img>
                                <img class="img-comp" src="./img/css.png" alt="logo css 3" title="CSS 3"></img>
                                <img class="img-comp" src="./img/Bootstrap.png" alt="logo Bootstrap" title="Bootstrap"></img>
                                <img class="img-comp" src="./img/less.jpg" alt="logo LESS" title="LESS"></img>
                                <img class="img-comp" src="./img/vue.png" alt="logo Vue.js" title="Vue.js"></img>
                            </div>
                        </div>
                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>Back-end :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/php.png" alt="logo PHP" title="PHP"></img>
                                <img class="img-comp" src="./img/symfony-logo.png" alt="logo Symfony" title="Symfony"></img>
                            </div>
                        </div>
                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>Script :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/js.png" alt="logo Javascript" title="Javascript"></img>
                                <img class="img-comp" src="./img/jquery.png" alt="logo JQuery" title="JQuery"></img>
                                <img class="img-comp" src="./img/batch.png" alt="logo fichier .bat" title="Batch"></img>
                            </div>
                        </div>
                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>BDD :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/mysql.png" alt="logo MySql" title="MySQL"></img>
                                <img class="img-comp" src="./img/sqlite.png" alt="logo SQLite" title="SQLite"></img>
                                <img class="img-comp" src="./img/mariadb.png" alt="logo MariaDb" title="MariaDb"></img>
                                <img class="img-comp" src="./img/informix.png" alt="logo Informix" title="Informix"></img>
                            </div>
                        </div>
                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>Logiciels :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/git.png" alt="logo Git" title="Git"></img>
                                <img class="img-comp" src="./img/github.png" alt="logo GitHub" title="GitHub"></img>
                                <img class="img-comp" src="./img/visualstudio.png" alt="logo Visual Studio Code" title="Visual Studio Code"></img>
                            </div>
                        </div>
                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>OS :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/windows.png" alt="logo Windows" title="Windows"></img>
                            </div>
                        </div>
                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>Autres :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/vba.png" alt="logo VBA" title="VBA"></img>
                                <img class="img-comp" src="./img/visualbasic.svg" alt="logo Visual Basic" title="Visual Basic"></img>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portfolio_" class="vertical-scrolling" title="portfolio">

                <div class="entrelacs-G">
                    <img class="red-entrelacs-G" src="./img/entrelacs_G.png" alt="entrelacs celtes rouges"></img>
                </div>
                <div class="entrelacs-D">
                    <img class="red-entrelacs-D" src="./img/entrelacs_D.png" alt="entrelacs celtes rouges"></img>
                </div>

                <div class="titre-portfolio">
                    <p class="titre_presentation"><span class="rouge heartbeat">Portfolio</span></p>
                </div>

                <div class="conteneur-sup-projets">

                    <div class="conteneur-titres-projets">
                        <p id="titre-projets-form" class="titre-section-portfolio rouge" onclick=afficher_form()><span >Projets de formation</span></p>
                        <p id="titre-projets-pro" class="titre-section-portfolio blanc" onclick=afficher_pro()><span>Projets professionnels</span></p>
                    </div>
                    <div class="conteneur-projets">

                        <div id="c-p-f" class="conteneur-projets-formation">

                        <?php

                            try{

                                $sth = $conn->prepare('SELECT COUNT(id_proj) FROM projets WHERE typ_proj = "Formation" and visibilite_proj = 1');
                                $sth->execute();
                                //Retourne un tableau associatif pour chaque entrée de notre table avec le nom des colonnes sélectionnées en clefs
                                $nb_projets_form_tot = $sth->fetchColumn();

                                if ($nb_projets_form_tot > 0){

                                    $sth = $conn->prepare('SELECT * FROM projets WHERE typ_proj = "Formation" and visibilite_proj = 1 ORDER BY id_proj');
                                    $sth->execute();
                                    //Retourne un tableau associatif pour chaque entrée de notre table avec le nom des colonnes sélectionnées en clefs
                                    $projets = $sth->fetchAll(PDO::FETCH_ASSOC);

                                    $iteration = 0;

                                    foreach ($projets as $projet) {

                                        $iteration += 1;

                                        echo '<article id="formation-slide'.$iteration.'" class="carte-projet">
                                            <figure>
                                                <img
                                                    class="img-slide-formation"
                                                    src="./img/'.$projet['img_proj'].'"
                                                    alt="Capture d\'écran du projet "'.$projet['nom_proj'].'"
                                                />
                                            </figure>
                                            <div class="desc-projet">
                                                <p class="blanc">'.$projet['nom_proj'].'</p>
                                                <p class="blanc">'.$projet['langage_proj'].'</p>
                                                <p class="blanc">'.$projet['desc_proj'].'</p>
                                                <p><a href="'.$projet['url_proj'].'" target="_blank">Visiter le site</a> <span class="blanc">/</span> 
                                                <a href="'.$projet['url_github_proj'].'" target="_blank">GitHub</a></p>
                                            </div>
                                        </article>';
                                    }
                                    
                                } else {

                                    echo '<article id="pro-slide1" class="carte-projet">
                                            <figure>
                                                <img
                                                    class="img-slide-formation"
                                                    src="./img/travaux.jpg"
                                                    alt="Barrière et plots de chantier"
                                                />
                                            </figure>
                                            <div class="desc-projet">
                                                <p class="blanc">A venir</p>
                                            </div>
                                        </article>';

                                }

                            }
                            catch(PDOException $e){
    
                                date_default_timezone_set('Europe/Paris');
                                setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
                                $format1 = '%A %d %B %Y %H:%M:%S';
                                $date1 = strftime($format1);
                                $fichier = fopen('./log/error_log_index.txt', 'c+b');
                                fseek($fichier, filesize('./log/error_log_index.txt'));
                                fwrite($fichier, "\n\n" .$date1. " - Erreur import projets formation. Erreur : " .$e);
                                fclose($fichier);
            
                                /*Fermeture de la connexion à la base de données*/
                                $sth = null;
                                $conn = null;
                                            
                            }

                        ?>

                            <div class="precedent" onclick="ChangeSlide(-1)"><</div>
                            <div class="suivant" onclick="ChangeSlide(1)">></div>
                        
                        </div>

                        <div id="c-p-p" class="conteneur-projets-pro">

                            <?php

                                try{

                                    $sth = $conn->prepare('SELECT COUNT(id_proj) FROM projets WHERE typ_proj = "Professionnel" and visibilite_proj = 1');
                                    $sth->execute();
                                    //Retourne un tableau associatif pour chaque entrée de notre table avec le nom des colonnes sélectionnées en clefs
                                    $nb_projets_pro_tot = $sth->fetchColumn();

                                    if ($nb_projets_pro_tot > 0){

                                        $sth = $conn->prepare('SELECT * FROM projets WHERE typ_proj = "Professionnel" and visibilite_proj = 1 ORDER BY id_proj');
                                        $sth->execute();
                                        //Retourne un tableau associatif pour chaque entrée de notre table avec le nom des colonnes sélectionnées en clefs
                                        $projetsP = $sth->fetchAll(PDO::FETCH_ASSOC);

                                        $iterationP = 0;

                                        foreach ($projetsP as $projetP) {

                                            $iterationP += 1;

                                            echo '<article id="pro-slide'.$iterationP.'" class="carte-projet-P">
                                                <figure>
                                                    <img
                                                        class="img-slide-pro"
                                                        src="./img/'.$projetP['img_proj'].'"
                                                        alt="Capture d\'écran du projet "'.$projetP['nom_proj'].'"
                                                    />
                                                </figure>
                                                <div class="desc-projet">
                                                    <p class="blanc">'.$projetP['nom_proj'].'</p>
                                                    <p class="blanc">'.$projetP['langage_proj'].'</p>
                                                    <p class="blanc">'.$projetP['desc_proj'].'</p>
                                                    <p><a href="'.$projetP['url_proj'].'" target="_blank">Visiter le site</a> <span class="blanc">/</span> 
                                                    <a href="'.$projetP['url_github_proj'].'" target="_blank">GitHub</a></p>
                                                </div>
                                            </article>';
                                        }

                                    } else {

                                        echo '<article id="pro-slide1" class="carte-projet-P">
                                                <figure>
                                                    <img
                                                        class="img-slide-pro"
                                                        src="./img/travaux.jpg"
                                                        alt="Barrière et plots de chantier"
                                                    />
                                                </figure>
                                                <div class="desc-projet">
                                                    <p class="blanc">A venir</p>
                                                </div>
                                            </article>';

                                    }

                                }
                                catch(PDOException $e){

                                    date_default_timezone_set('Europe/Paris');
                                    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
                                    $format1 = '%A %d %B %Y %H:%M:%S';
                                    $date1 = strftime($format1);
                                    $fichier = fopen('./log/error_log_index.txt', 'c+b');
                                    fseek($fichier, filesize('./log/error_log_index.txt'));
                                    fwrite($fichier, "\n\n" .$date1. " - Erreur import projets pro. Erreur : " .$e);
                                    fclose($fichier);

                                    /*Fermeture de la connexion à la base de données*/
                                    $sth = null;
                                    $conn = null;
                                                
                                }

                            ?>

                            <div class="precedent2" onclick="ChangeSlide2(-1)"><</div>
                            <div class="suivant2" onclick="ChangeSlide2(1)">></div>
                        </div>
                    </div>

                </div>
            
            </section>

            <section id="contact_" class="vertical-scrolling" title="contact">
                <div class="red-G">
                    <img class="red-knot-G rotate-center" src="./img/red-knot.png" alt="entrelacs celtes rouges"></img>
                </div>
                <div class="red-D">
                    <img class="red-knot-D rotate-center-reverse" src="./img/red-knot.png" alt="entrelacs celtes rouges"></img>
                </div>
                <div class="conteneur-form-cont">
                    <div class="titre-formulaire">
                        <p class="titre_presentation"><span class="rouge heartbeat">Formulaire de contact</span></p>
                    </div>
                    <div class="form-gauche">
                        <form id="form_contact" method="POST" onsubmit="return valider_form_contact()" action="./pages/gest_contact.php">
                            <div class="formulaire-contact-champ">
                                <label for="nom">Nom <span class="rouge">*</span></label>
                                <input id="nom" name="nom" type="text" onkeyup="validate(this)" pattern="^[A-Za-z0-9 -àéèùêîôûïë]{3,50}$" maxlength="50" placeholder="Nom" required="">
                            </div>
                            <div class="formulaire-contact-champ">
                                <label for="email">Adresse e-mail <span class="rouge">*</span></label>
                                <input id="email" name="email" type="mail" onkeyup="validate(this)" pattern="^[a-zA-Z0-9.!#$%&\'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" 
                                        maxlength="255" placeholder="monAdresseMail@gmail.com" required="">
                            </div>
                            <div class="formulaire-contact-champ">
                                <label for="sujet">Sujet <span class="rouge">*</span></label>
                                <input id="sujet" name="sujet" type="text" onkeyup="validate(this)" pattern="^[A-Za-z0-9 .+*/=\\(\\)-àéèùêîôûïë]{5,100}$" maxlength="100" placeholder="Sujet" 
                                            required="">
                            </div>
                            <div class="formulaire-contact-champ">
                                <label for="message" >Message <span class="rouge">*</span></label>
                                <textarea type="text" id="message" name="message" placeholder="Mon message" maxlength="500" rows="6" onkeyup="validate(this)" required></textarea>
                            </div>
                            <p><span class="rouge">*</span> Champs obligatoires.</p>
                            <div class="conteneur-pied-form">
                                <button class="skew-button"><span>Envoyer</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js'></script>
        <script src='./javascript/main.js'></script>
    </body>

</html>