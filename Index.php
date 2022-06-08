<?php
 
// grab recaptcha library
//require_once "./pages/recaptchalib.php";

// your secret key
//$secret = "6Lf0uTsgAAAAAMQNf_400jMYFxPYT8lHp8sZ_3O4";
 
// empty response
//$response = null;
 
// check secret key
//$reCaptcha = new ReCaptcha_($secret);

// if submitted check response
//if ($_POST["g-recaptcha-response"]) {
    //$response = $reCaptcha->verifyResponse(
        //$_SERVER["REMOTE_ADDR"],
        //$_POST["g-recaptcha-response"]
    //);
//}
 
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
                    <a href="Index.php">
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
                        <p>N'hesitez pas à me contacter par l'un des différents moyens mis à votre disposition sur ce site.</p>
                    </div>
                    <div class="conteneur-presentation-img">
                        <img class="portrait" src="./img/portrait.jpg" alt="photo de moi-même"></img>
                    </div>
                </div>
            </section>

            <section id="competences_" class="vertical-scrolling" title="competences">

                <div class="conteneur-brain">
                    <img class="brain" src="./img/brain.png" alt="Schéma avec des icones de compétences reliées à différentes zones du cerveau"></img>
                </div>
                <div class="conteneur-code">
                    <img class="code" src="./img/html-code.png" alt="Exemple de code HTML"></img>
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
                                <img class="img-comp" src="./img/html.png" alt="logo html 5"></img>
                                <img class="img-comp" src="./img/css.png" alt="logo css 3"></img>
                                <img class="img-comp" src="./img/bootstrap.png" alt="logo Bootstrap"></img>
                                <img class="img-comp" src="./img/sass.png" alt="logo SASS"></img>
                            </div>
                        </div>
                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>Back-end :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/php.png" alt="logo PHP"></img>
                            </div>
                        </div>
                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>Script :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/js.png" alt="logo Javascript"></img>
                                <img class="img-comp" src="./img/jquery.png" alt="logo JQuery"></img>
                                <img class="img-comp" src="./img/batch.png" alt="logo fichier .bat"></img>
                            </div>
                        </div>
                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>BDD :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/mysql.png" alt="logo MySql"></img>
                                <img class="img-comp" src="./img/sqlite.png" alt="logo SQLite"></img>
                                <img class="img-comp" src="./img/mariadb.png" alt="logo MariaDb"></img>
                                <img class="img-comp" src="./img/informix.png" alt="logo Informix"></img>
                            </div>
                        </div>
                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>Logiciels :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/git.png" alt="logo Git"></img>
                                <img class="img-comp" src="./img/github.png" alt="logo GitHub"></img>
                                <img class="img-comp" src="./img/visualstudio.png" alt="logo Visual Studio"></img>
                            </div>
                        </div>
                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>OS :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/windows.png" alt="logo Windows"></img>
                            </div>
                        </div>
                        <div class="conteneur-comp-sf">
                            <div class="titre-sf"><p>Autres :</p></div>
                            <div class="logos-sf">
                                <img class="img-comp" src="./img/vba.png" alt="logo VBA"></img>
                                <img class="img-comp" src="./img/visualbasic.svg" alt="logo Visual Basic"></img>
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

                            <article id="formation-slide1" class="carte-projet">
                                <figure>
                                    <img
                                        class="img-slide-formation"
                                        src="./img/jadoo_1.jpg"
                                        alt="Makis dans une assiette avec petit bol de sauce à côté et des baguettes sur le bol"
                                    />
                                </figure>
                                <div class="desc-projet">
                                    <p class="blanc">Jadoo (HTML/CSS)</p>
                                    <p class="blanc">Intégration d'une maquette Figma.</p>
                                    <p class="blanc">Premier projet de la formation afin de mettre en pratique les cours de HTML/CSS vus en parallèle.</p>
                                    <p><a href="https://www.aymeric-guinot-dev.com/formation/jadoo_1/index.html" target="_blank">Visiter le site</a> <span class="blanc">/</span> 
                                    <a href="https://github.com/aguinot58/Cours_Jadoo" target="_blank">GitHub</a></p>
                                </div>
                            </article>

                            <article id="formation-slide2" class="carte-projet">
                                <figure>
                                    <img
                                        class="img-slide-formation"
                                        src="./img/acs.jpg"
                                        alt="Paquebot de croisière en pleine mer"
                                    />
                                </figure>
                                <div class="desc-projet">
                                    <p class="blanc">ACS Voyages (HTML/CSS/JS)</p>
                                    <p class="blanc">Premier projet en binômes, avec les premiers pas sur le travail collaboratif avec Git/GitHub,
                                        réflexion à plusieurs au niveau de la conception du site, sur la répartition des tâches, etc.
                                    </p>
                                    <p><a href="https://www.aymeric-guinot-dev.com/formation/voyages/index.html" target="_blank">Visiter le site</a> <span class="blanc">/</span> 
                                    <a href="https://github.com/aguinot58/ACS_Voyages" target="_blank">GitHub</a></p>
                                </div>
                            </article>

                            <article id="formation-slide3" class="carte-projet">
                                <figure>
                                    <img
                                        class="img-slide-formation"
                                        src="./img/jadoo_2.jpg"
                                        alt="Paquebot de croisière en pleine mer"
                                    />
                                </figure>
                                <div class="desc-projet">
                                    <p class="blanc">Jadoo (PHP/JS)</p>
                                    <p class="blanc">Premier projet PHP, consistant à reprendre le projet d'intégration de maquette Figma, 
                                        pour venir y ajouter une base de données, afin le contenu de la page à partir de celle-ci, mise en place du fonctionnement 
                                        du formulaire de contact, et le back-office. 
                                    </p>
                                    <p><a href="" target="_blank">Visiter le site</a> <span class="blanc">/</span> 
                                    <a href="https://github.com/aguinot58/Jadoo_PHP" target="_blank">GitHub</a></p>
                                </div>
                            </article>

                            <article id="formation-slide4" class="carte-projet">
                                <figure>
                                    <img
                                        class="img-slide-formation"
                                        src="./img/retro.jpg"
                                        alt="Paquebot de croisière en pleine mer"
                                    />
                                </figure>
                                <div class="desc-projet">
                                    <p class="blanc">Retro-gaming.com <br>(HTML/CSS/JS/PHP/Bootstrap)</p>
                                    <p class="blanc">2nd projet en binômes: réalisation d'un site vitrine de type
                                        Allociné, sur le sujet de notre choix, avec création d'un back-office, en utilisant
                                        au choix, Bootstrap ou Tailwind.
                                    </p>
                                    <p><a href="" target="_blank">Visiter le site</a> <span class="blanc">/</span> 
                                    <a href="https://github.com/aguinot58/Retro_Games" target="_blank">GitHub</a></p>
                                </div>
                            </article>

                            <div class="precedent" onclick="ChangeSlide(-1)"><</div>
                            <div class="suivant" onclick="ChangeSlide(1)">></div>

                        </div>

                        <div id="c-p-p" class="conteneur-projets-pro">
                            <article id="pro-slide1" class="carte-projet-P">
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
                            </article>

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
                <?php
                    //if ($response != null && $response->success) {
                        //echo "Bonjour " . $_POST["name"] . " (" . $_POST["email"] . "), merci pour votre message!";
                    //} else {
                echo '
                <div class="conteneur-form-cont">
                    <div class="titre-formulaire">
                        <p class="titre_presentation"><span class="rouge heartbeat">Formulaire de contact</span></p>
                    </div>
                    <div class="form-gauche">
                        <form id="form_contact" method="POST" onsubmit="return valider_form_contact()" action="./pages/gest_contact.php">
                            <div class="formulaire-contact-champ">
                                <label for="nom">Nom <span class="rouge">*</span></label>
                                <input id="nom" name="nom" type="text" onkeyup="validate(this)" pattern="^[A-Za-z]{1}[A-Za-z0-9]{5,49}$" maxlength="50" placeholder="Nom" required="">
                            </div>
                            <div class="formulaire-contact-champ">
                                <label for="email">Adresse e-mail <span class="rouge">*</span></label>
                                <input id="email" name="email" type="mail" onkeyup="validate(this)" pattern="^[a-zA-Z0-9.!#$%&\'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" 
                                        maxlength="255" placeholder="monAdresseMail@gmail.com" required="">
                            </div>
                            <div class="formulaire-contact-champ">
                                <label for="sujet">Sujet <span class="rouge">*</span></label>
                                <input id="sujet" name="sujet" type="text" onkeyup="validate(this)" pattern="^[A-Za-z]{1}[A-Za-z0-9]{5,49}$" maxlength="50" placeholder="Sujet" 
                                            required="">
                            </div>
                            <div class="formulaire-contact-champ">
                                <label for="message" >Message <span class="rouge">*</span></label>
                                <textarea type="text" id="message" name="message" placeholder="Mon message" maxlength="500" rows="8" onkeyup="validate(this)" required></textarea>
                            </div>
                            <p><span class="rouge">*</span> Champs obligatoires.</p>
                            <!--<div class="g-recaptcha" data-sitekey="6Lf0uTsgAAAAAK15LwCiY82iy-CLNLKpkc2kyuO3"></div>-->
                            <button class="skew-button"><span>Envoyer</span></button>
                        </form>
                    </div>
                </div>';
                //} ?>
            </section>

        </div>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js'></script>
        <script src="./javascript/main.js"></script>
        <script src='https://www.google.com/recaptcha/api.js?hl=fr'></script>
    </body>

</html>