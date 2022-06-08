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
        /* Portfolio */
        const titrePortfolio = document.querySelector(".titre-portfolio");
        const projet = document.querySelector(".conteneur-sup-projets");
        const entrelacsG = document.querySelector(".entrelacs-G");
        const entrelacsD = document.querySelector(".entrelacs-D");
        /* Formulaire contact */
        const titreFormulaire = document.querySelector(".titre-formulaire");
        const red1 = document.querySelector(".red-G");
        const red2 = document.querySelector(".red-D");
        const formulaire = document.querySelector(".form-gauche");

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

        if (index == 4) {
            titrePortfolio.style.display = "block";
            titrePortfolio.classList.toggle('slide-in-elliptic-top-fwd');
            projet.style.display = "flex";
            projet.classList.toggle("scale-in-ver-bottom");
            entrelacsG.style.display = "block";
            entrelacsG.classList.toggle('slide-in-left');
            entrelacsD.style.display = "block";
            entrelacsD.classList.toggle('slide-in-right');
        }

        if (index == 5) {
            titreFormulaire.style.display = "block";
            titreFormulaire.classList.toggle('slide-in-elliptic-top-fwd');
            red1.style.display = "block";
            red1.classList.toggle('slide-in-left');
            red2.style.display = "block";
            red2.classList.toggle('slide-in-right');
            formulaire.style.display = "block";
            formulaire.classList.toggle("scale-in-ver-bottom");
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
        /* Portfolio */
        const titrePortfolio = document.querySelector(".titre-portfolio");
        const projet = document.querySelector(".conteneur-sup-projets");
        const entrelacsG = document.querySelector(".entrelacs-G");
        const entrelacsD = document.querySelector(".entrelacs-D");
        /* Formulaire contact */
        const titreFormulaire = document.querySelector(".titre-formulaire");
        const red1 = document.querySelector(".red-G");
        const red2 = document.querySelector(".red-D");
        const formulaire = document.querySelector(".form-gauche");


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

        if (index == 4) {
            titrePortfolio.style.display = "none";
            titrePortfolio.classList.toggle('slide-in-elliptic-top-fwd');
            projet.style.display = "none";
            projet.classList.toggle("scale-in-ver-bottom");
            entrelacsG.style.display = "none";
            entrelacsG.classList.toggle('slide-in-left');
            entrelacsD.style.display = "none";
            entrelacsD.classList.toggle('slide-in-right');
        }

        if (index == 5) {
            titreFormulaire.style.display = "none";
            titreFormulaire.classList.toggle('slide-in-elliptic-top-fwd');
            red1.style.display = "none";
            red1.classList.toggle('slide-in-left');
            red2.style.display = "none";
            red2.classList.toggle('slide-in-right');
            formulaire.style.display = "none";
            formulaire.classList.toggle("scale-in-ver-bottom");
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


const slide1Auto = setInterval(ChangeSlide,3000,1);





let section = document.getElementById('portfolio_')

let c = init("canvas"),
  w = (canvas.width = section.innerWidth),
  h = (canvas.height = section.innerHeight);
//initiation

class firefly{
  constructor(){
    this.x = Math.random()*w;
    this.y = Math.random()*h;
    this.s = Math.random()*2;
    this.ang = Math.random()*2*Math.PI;
    this.v = this.s*this.s/4;
  }
  move(){
    this.x += this.v*Math.cos(this.ang);
    this.y += this.v*Math.sin(this.ang);
    this.ang += Math.random()*20*Math.PI/180-10*Math.PI/180;
  }
  show(){
    c.beginPath();
    c.arc(this.x,this.y,this.s,0,2*Math.PI);
    c.fillStyle="#fddba3";
    c.fill();
  }
}

let f = [];

function draw() {
  if(f.length < 100){
    for(let j = 0; j < 10; j++){
     f.push(new firefly());
  }
     }
  //animation
  for(let i = 0; i < f.length; i++){
    f[i].move();
    f[i].show();
    if(f[i].x < 0 || f[i].x > w || f[i].y < 0 || f[i].y > h){
       f.splice(i,1);
       }
  }
}

let mouse = {};
let last_mouse = {};

canvas.addEventListener(
  "mousemove",
  function(e) {
    last_mouse.x = mouse.x;
    last_mouse.y = mouse.y;

    mouse.x = e.pageX - this.offsetLeft;
    mouse.y = e.pageY - this.offsetTop;
  },
  false
);
function init(elemid) {
  let canvas = document.getElementById(elemid),
    c = canvas.getContext("2d"),
    w = (canvas.width = window.innerWidth),
    h = (canvas.height = window.innerHeight);
  c.fillStyle = "rgba(30,30,30,1)";
  c.fillRect(0, 0, w, h);
  return c;
}

window.requestAnimFrame = (function() {
  return (
    window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.oRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function(callback) {
      window.setTimeout(callback);
    }
  );
});

function loop() {
  window.requestAnimFrame(loop);
  c.clearRect(0, 0, w, h);
  draw();
}

window.addEventListener("resize", function() {
  (w = canvas.width = window.innerWidth),
  (h = canvas.height = window.innerHeight);
  loop();
});

loop();
setInterval(loop, 1000 / 60);