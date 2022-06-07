/* fichier javascript en mode strict */
"use strict"; 

function valider_form_contact(){

    let nom = document.getElementById('nom').value
    let sujet = document.getElementById('sujet').value
    let message = document.getElementById('message').value
    let email = document.getElementById('mail').value

    let masqueEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    let emailValide = email.match(masqueEmail);

    if (!empty(nom)){
        alert("Merci de saisir votre nom de famille.");
        return false;
    }

    if (!empty(sujet)){
        alert("Merci de saisir le sujet de votre demande de contact.");
        return false;
    }

    if (!empty(email)){
        alert("Merci de saisir votre adresse e-mail.");
        return false;
    }

    if (emailValide == null) {
        alert("Votre adresse email ne semble pas valide.");
        return false;
    }

    if (!empty(message)) {
        alert("VOus n'avez pas rédigé de message.");
        return false;
    }

    return true;

}


function validate(o) {
    if (o.value.indexOf('<') > -1)
        o.value = o.value.replace('<', '');
    if (o.value.indexOf('>') > -1)
        o.value = o.value.replace('>', '');
}



/* scroll vertical page complète */
$('#fullpage').fullpage({
    sectionsColor: ['#0f0f0f', '#0a0a0a', '#0f0f0f', '#0a0a0a', '#0f0f0f'],
    sectionSelector: '.vertical-scrolling',
    navigation: true,
    slidesNavigation: true,
    controlArrows: false,
    scrollbars: true,
    anchors: ['accueil', 'a_propos', 'competences', 'portfolio', 'contact'],
    menu: '#menu',
  
    afterLoad: function(anchorLink, index) {

        /* Accueil */
        const elem1 = document.querySelector(".accroche_1");
        const elem2 = document.querySelector(".accroche_2");
        const elem3 = document.querySelector(".deco_pc");
        /* A propos */
        const titreAPropos = document.querySelector(".conteneur-presentation-txt");
        const photo = document.querySelector(".conteneur-presentation-img");
        /* Compétences */
        const titreComp = document.querySelector(".pres-comp");
        const brain = document.querySelector(".brain");
        const code = document.querySelector(".code");
        const savEtre = document.querySelector(".conteneur-comp-trans");
        const savFaire = document.querySelector(".conteneur-comp");
        /* Formulaire contact */
        const formulaire = document.querySelector(".conteneur-form-cont");
        const red1 = document.querySelector(".red-G");
        const red2 = document.querySelector(".red-D");

        if (index == 1) {
            elem1.style.display = "";
            elem1.classList.toggle("scale-in-tl");
            elem2.style.display = "";
            elem2.classList.toggle("scale-in-tr");
            elem3.style.display = "";
            elem3.classList.toggle("scale-in-ver-bottom");
        }

        if (index == 2) {
            titreAPropos.style.display = "block";
            titreAPropos.classList.toggle("slide-in-left");
            photo.style.display = "flex";
            photo.classList.toggle("slide-in-right");
        }

        if (index == 3) {
            titreComp.style.display = "block";
            titreComp.classList.toggle('slide-in-elliptic-top-fwd');
            brain.style.display = "block";
            brain.classList.toggle("slide-in-left");
            code.style.display = "block";
            code.classList.toggle("slide-in-right");
            savEtre.style.display = "block";
            savEtre.classList.toggle("scale-in-ver-bottom");
            savFaire.style.display = "block";
            savFaire.classList.toggle("scale-in-ver-bottom");
        }

        if (index == 5) {
            formulaire.style.display = "block";
            formulaire.classList.toggle('slide-in-elliptic-top-fwd');
            red1.style.display = "block";
            red1.classList.toggle('slide-in-left');
            red2.style.display = "block";
            red2.classList.toggle('slide-in-right');
        }


    },
  
    onLeave: function(index, nextIndex, direction) {

        /* Accueil */
        const elem1 = document.querySelector(".accroche_1");
        const elem2 = document.querySelector(".accroche_2");
        const elem3 = document.querySelector(".deco_pc");
        /* A propos */
        const titreAPropos = document.querySelector(".conteneur-presentation-txt");
        const photo = document.querySelector(".conteneur-presentation-img");
        /* Compétences */
        const titreComp = document.querySelector(".pres-comp");
        const brain = document.querySelector(".brain");
        const code = document.querySelector(".code");
        const savEtre = document.querySelector(".conteneur-comp-trans");
        const savFaire = document.querySelector(".conteneur-comp");
        /* Formulaire contact */
        const formulaire = document.querySelector(".conteneur-form-cont");
        const red1 = document.querySelector(".red-G");
        const red2 = document.querySelector(".red-D");

        if (index == 1) {
            elem1.style.display = "none";
            elem1.classList.toggle("scale-in-tl");
            elem2.style.display = "none";
            elem2.classList.toggle("scale-in-tr");
            elem3.style.display = "none";
            elem3.classList.toggle("scale-in-ver-bottom");
        }

        if (index == 2) {
            titreAPropos.style.display = "none";
            titreAPropos.classList.toggle("slide-in-left");
            photo.style.display = "none";
            photo.classList.toggle("slide-in-right");
        }

        if (index == 3) {
            titreComp.style.display = "none";
            titreComp.classList.toggle('slide-in-elliptic-top-fwd');
            brain.style.display = "none";
            brain.classList.toggle("slide-in-left");
            code.style.display = "none";
            code.classList.toggle("slide-in-right");
            savEtre.style.display = "none";
            savEtre.classList.toggle("scale-in-ver-bottom");
            savFaire.style.display = "none";
            savFaire.classList.toggle("scale-in-ver-bottom");
        }

        if (index == 5) {
            formulaire.style.display = "none";
            formulaire.classList.toggle('slide-in-elliptic-top-fwd');
            red1.style.display = "none";
            red1.classList.toggle('slide-in-left');
            red2.style.display = "none";
            red2.classList.toggle('slide-in-right');
        }
    },
 
});




/* Slider projets formation */
let numero = 0;
const elements = document.querySelectorAll(".carte-projet");

function ChangeSlide(sens) {

    numero = numero + sens;
    if (numero < 0)
        numero = elements.length - 1;
    if (numero > elements.length - 1)
        numero = 0;
    
    elements.forEach((item, index) => {

        let imgId = item.id;

        if (index == numero){

            document.getElementById(imgId).style.opacity = 1;
            document.getElementById(imgId).style.position = "relative";

        } else {

            document.getElementById(imgId).style.opacity = 0;
            document.getElementById(imgId).style.position = "absolute";

        }
    });
}


/* Slider projets pro */
let numeroP = 0;
const elementsP = document.querySelectorAll(".carte-projet-P");

function ChangeSlide2(sensP) {

    numeroP = numeroP + sensP;
    if (numeroP < 0)
        numeroP = elements.length - 1;
    if (numeroP > elements.length - 1)
        numeroP = 0;
    
    elements.forEach((item, index) => {

        let imgId = item.id;

        if (index == numeroP){

            document.getElementById(imgId).style.opacity = 1;
            document.getElementById(imgId).style.position = "relative";

        } else {

            document.getElementById(imgId).style.opacity = 0;
            document.getElementById(imgId).style.position = "absolute";

        }
    });
}




/* fonctions pour alterner entre affichage projets formation et projets pro */
function afficher_form(){

    let valeur = document.getElementById('titre-projets-form').getAttribute('class');
    let index= valeur.indexOf("rouge");

    if (index == -1){
        document.getElementById('c-p-p').style.display = "none";
        document.getElementById('titre-projets-pro').classList.toggle('rouge');
        document.getElementById('titre-projets-pro').classList.toggle('blanc');
        document.getElementById('c-p-f').style.display = "block";
        document.getElementById('titre-projets-form').classList.toggle('blanc');
        document.getElementById('titre-projets-form').classList.toggle('rouge');
    }
    
}

function afficher_pro(){

    let valeur = document.getElementById('titre-projets-pro').getAttribute('class');
    let index= valeur.indexOf("rouge");

    if (index == -1){
        document.getElementById('c-p-p').style.display = "block";
        document.getElementById('titre-projets-pro').classList.toggle('blanc');
        document.getElementById('titre-projets-pro').classList.toggle('rouge');
        document.getElementById('c-p-f').style.display = "none";
        document.getElementById('titre-projets-form').classList.toggle('rouge');
        document.getElementById('titre-projets-form').classList.toggle('blanc');
    }

}


