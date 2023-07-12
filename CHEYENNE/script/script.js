var pVeuve = document.getElementById('paragrapheVeuve');
var tVeuve = document.getElementById('sousTitreVeuve');
var cliked = false; //valeur 

function buttonVeuve() {

    cliked = !cliked;
    console.log(cliked);

    if (cliked === true) {
        pVeuve.style.display = "block";
        tVeuve.style.backgroundColor = "black";
        tVeuve.style.color = "#E0ACAC";
    } else {
        pVeuve.style.display = "none";
        tVeuve.style.backgroundColor = "beige";
        tVeuve.style.color = "black";
    }

}


var pAbeille = document.getElementById('paragrapheAbeille');
var tAbeille = document.getElementById('sousTitreAbeille');
var clik = false; //valeur

function buttonAbeille() {

    clik = !clik;
    console.log(clik);

    if (clik === true) {
        pAbeille.style.display = "block";
        tAbeille.style.backgroundColor = "black";
        tAbeille.style.color = "#E0ACAC"

    } else {
        pAbeille.style.display = "none";
        tAbeille.style.marginBottom = "10px";
        tAbeille.style.backgroundColor = "beige";
        tAbeille.style.color = "black";

    }

}


var pScorpion = document.getElementById('paragrapheScorpion');
var tScorpion = document.getElementById('sousTitreScorpion');
var clique = false; //valeur

function buttonScorpion() {

    clique = !clique;
    console.log(clique);

    if (clique === true) {
        pScorpion.style.display = "block";
        tScorpion.style.backgroundColor = "black";
        tScorpion.style.color = "#E0ACAC"

    } else {
        pScorpion.style.display = "none";
        tScorpion.style.marginBottom = "10px";
        tScorpion.style.backgroundColor = "beige";
        tScorpion.style.color = "black";

    }

}


var pMygale = document.getElementById('paragrapheMygale');
var tMygale = document.getElementById('sousTitreMygale');
var appuie = false; //valeur

function buttonMy() {

    appuie = !appuie;
    console.log(clique);

    if (appuie === true) {
        pMygale.style.display = "block";
        tMygale.style.backgroundColor = "black";
        tMygale.style.color = "#E0ACAC"

    } else {
        pMygale.style.display = "none";
        // tMygale.style.marginBottom = "10px";
        tMygale.style.backgroundColor = "beige";
        tMygale.style.color = "black";

    }

}



// var pMygale = document.getElementById('paragrapheMygale');
// var tMygale = document.getElementById('sousTitreMygale');
// var cliquer = false; //valeur

// function buttonMy() {

//     cliquer = !cliquer;
//     console.log(cliquer);

//     if (cliquer === true) {
//         pMygale.style.display = "block";
//         tMygale.style.backgroundColor = "black";
//         tMygale.style.color = "#E0ACAC";


//     } else {
//         pMygale.style.display = "none";
//         tMygale.style.marginBottom = "10px";
//         tMygale.style.backgroundColor = "beige";
//         tMygale.style.color = "black";

//     }

// }

// POUR CREER LE DARk MODE
var toggleButton = document.getElementById('toggle-dark-mode');

toggleButton.addEventListener('click', function () {
    var darkModeEnabled = document.documentElement.classList.toggle('dark-mode');

    // Enregistre l'état du mode sombre dans localStorage
    localStorage.setItem('darkMode', darkModeEnabled.toString());
});

window.addEventListener('load', function () {
    var darkModeEnabled = localStorage.getItem('darkMode');

    if (darkModeEnabled === 'true') {
        document.documentElement.classList.add('dark-mode');
    }
});



// // Realiser une carrousel 
// // Sélectionner les éléments du carrousel
// const carousel = document.querySelector('.quatreimgjs');
// const images = carousel.querySelectorAll('.imagejs');

// // Variables de contrôle du carrousel
// let currentIndex = 0;
// const interval = 5000; // Durée d'affichage pour chaque image en millisecondes

// // Fonction pour afficher l'image suivante dans le carrousel
// function showNextImage() {
//     // Cacher l'image courante
//     images[currentIndex].style.display = 'none';

//     // Calculer l'index de l'image suivante
//     currentIndex = (currentIndex + 1) % images.length;

//     // Afficher l'image suivante
//     images[currentIndex].style.display = 'block';
// }

// // Démarrer le carrousel
// setInterval(showNextImage, interval);




// ************ evenement keydown ******
// pour le FORMULAIRE de connection

$(document).ready(function(){
    // change la couleur de fond du champ en ... des qu'une touche est pressée
    // et affiche le code de la derniere touche pressée
    $("#input_connection").keydown(function(event){
        $(this).css("background-color", "pink");
        $("span").text(event.which);
    });
    //  change la couleur de fond du champ en ... des qu'une touche est presée
    $("#input_connection").keyup(function(){
        $(this).css("background-color","green");
    });
});

$(document).ready(function(){
    // change la couleur de fond du champ en ... des qu'une touche est pressée
    // et affiche le code de la derniere touche pressée
    $("#input_connect").keydown(function(event){
        $(this).css("background-color", "pink");
        $("span").text(event.which);
    });
    //  change la couleur de fond du champ en jaune des qu'une touche est presée
    $("#input_connect").keyup(function(){
        $(this).css("background-color","green");
    });
});

// pour le FORMULAIRE de contact

$(document).ready(function(){
    // change la couleur de fond du champ en bleu des qu'une touche est pressée
    // et adffiche le code de la derniere touche pressée
    $("#input_nom_contact").keydown(function(event){
        $(this).css("background-color", "pink");
        $("span").text(event.which);
    });
    //  change la couleur de fond du champ en jaune des qu'une touche est presée
    $("#input_nom_contact").keyup(function(){
        $(this).css("background-color","green");
    });
});


$(document).ready(function(){
    // change la couleur de fond du champ en bleu des qu'une touche est pressée
    // et adffiche le code de la derniere touche pressée
    $("#input_mail_contact").keydown(function(event){
        $(this).css("background-color", "pink");
        $("span").text(event.which);
    });
    //  change la couleur de fond du champ en jaune des qu'une touche est presée
    $("#input_mail_contact").keyup(function(){
        $(this).css("background-color","green");
    });
});


$(document).ready(function(){
    // change la couleur de fond du champ en bleu des qu'une touche est pressée
    // et adffiche le code de la derniere touche pressée
    $("#input_tel_contact").keydown(function(event){
        $(this).css("background-color", "pink");
        $("span").text(event.which);
    });
    //  change la couleur de fond du champ en jaune des qu'une touche est presée
    $("#input_tel_contact").keyup(function(){
        $(this).css("background-color","green");
    });
});



$(document).ready(function(){
    // change la couleur de fond du champ en bleu des qu'une touche est pressée
    // et adffiche le code de la derniere touche pressée
    $("#text_message-contact").keydown(function(event){
        $(this).css("background-color", "pink");
        $("span").text(event.which);
    });
    //  change la couleur de fond du champ en jaune des qu'une touche est presée
    $("#text_message-contact").keyup(function(){
        $(this).css("background-color","green");
    });
});


// pour LE FORMULAIRE D'inscription

$(document).ready(function(){
    // change la couleur de fond du champ en bleu des qu'une touche est pressée
    // et adffiche le code de la derniere touche pressée
    $("#input_nom_inscription").keydown(function(event){
        $(this).css("background-color", "pink");
        $("span").text(event.which);
    });
    //  change la couleur de fond du champ en jaune des qu'une touche est presée
    $("#input_nom_inscription").keyup(function(){
        $(this).css("background-color","green");
    });
});



// $(document).ready(function(){
//     // change la couleur de fond du champ en bleu des qu'une touche est pressée
//     // et adffiche le code de la derniere touche pressée
//     $("#input_prenom_inscription").keydown(function(event){
//         $(this).css("background-color", "pink");
//         $("span").text(event.which);
//     });
//     //  change la couleur de fond du champ en jaune des qu'une touche est presée
//     $("#input_prenom_inscription").keyup(function(){
//         $(this).css("background-color","green");
//     });
// });


$(document).ready(function(){
    // change la couleur de fond du champ en bleu des qu'une touche est pressée
    // et adffiche le code de la derniere touche pressée
    $("#input_mail_inscription").keydown(function(event){
        $(this).css("background-color", "pink");
        $("span").text(event.which);
    });
    //  change la couleur de fond du champ en jaune des qu'une touche est presée
    $("#input_mail_inscription").keyup(function(){
        $(this).css("background-color","green");
    });
});


$(document).ready(function(){
    // change la couleur de fond du champ en bleu des qu'une touche est pressée
    // et adffiche le code de la derniere touche pressée
    $("#input_password_inscription").keydown(function(event){
        $(this).css("background-color", "pink");
        $("span").text(event.which);
    });
    //  change la couleur de fond du champ en jaune des qu'une touche est presée
    $("#input_password_inscription").keyup(function(){
        $(this).css("background-color","green");
    });
});


$(document).ready(function(){
    // change la couleur de fond du champ en bleu des qu'une touche est pressée
    // et adffiche le code de la derniere touche pressée
    $("#input_conf_password_inscription").keydown(function(event){
        $(this).css("background-color", "pink");
        $("span").text(event.which);
    });
    //  change la couleur de fond du champ en jaune des qu'une touche est presée
    $("#input_conf_password_inscription").keyup(function(){
        $(this).css("background-color","green");
    });
});






