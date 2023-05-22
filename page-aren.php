<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

<?php get_sidebar(); ?>

<?php endif ?>

<div id="primary" <?php astra_primary_class(); ?>>

    <?php astra_primary_content_top(); ?>

    <?php astra_content_page_loop(); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="carousel">
        <button class="fa fa-angle-left" id="prevButton"></button>
        <div class="attractions"></div>
        <button class="fa fa-angle-right" id="nextButton"></button>
    </div>

    <template id="cardTemplate">
        <div class="card">
            <img class="card-image" src="" alt="">
            <h4 class="card-title"></h4>
            <p class="card-description"></p>
        </div>
    </template>

    <?php astra_primary_content_bottom(); ?>

</div><!-- #primary -->
<script>
//const for tilbage og frem knap
const prevButton = document.getElementById('prevButton');
const nextButton = document.getElementById('nextButton');
//const for destiantionen hvor alt indholdet skal sættes ind
const destination = document.querySelector('.attractions');

//const for min template hvor jeg kan sætte indholdet ind der bestemmer hvordan indholdet sruktureres
const cardTemplate = document.getElementById('cardTemplate');

//empty array til at gemme min jsondata i
const attractions = [];
//variable for det nuværende index, starter på 0 (som arrays jo gør)
let currentIndex = 0;


// Fetch data from REST API

function getData() {
    fetch('https://www.vildsvinejagt.com/wp-json/wp/v2/attraction')
        .then(response => response.json())
        .then(data => {
            attractions.push(...data);
            updateCards();
        });
}

//gør responsiv ved at sætte værdien for mængden af cards baseret på skærmstørrelse
function responsive() {
    let amountOfCards;

    if (window.innerWidth >= 1024) {
        amountOfCards = 3;
    } else if (window.innerWidth >= 767) {
        amountOfCards = 2;
    } else {
        amountOfCards = 1;
    }

    return amountOfCards;
}

//function kalder amount of cards igen, for at sikre at der altid bruges de rigtige mængde kort selv hvis vinduet bliver resized
function handleResize() {
    console.log("windows has been resized")
    amountOfCards = responsive();

    // Your code to update the carousel based on the new value of amountOfCards
    updateCards();
}

// eventlistener for om windowet bliver resized
window.addEventListener('resize', handleResize);

// Updataterer card baseret på det nuværende index nummer 
function updateCards() {
    console.log("updating cards");

    //ryder destinationen for cards så for hver gang loop kører bliver dte nye indhold kun vist
    destination.innerHTML = '';

    let amountOfCards = responsive();
    console.log(amountOfCards);

    /*for loop til loade cards ind , samt den korekte mængde cards baseret på variablen amount of.
    
    først sætttes variablen i lig med currentindex
    Så sikres at loopet kører de ønskede antal gange:
    så længe i er mindre end current index + amount of cards: 
     eksempelvis hvis currentindex er 2, vil i også være 2, hvis amount of cards så er 3, vil den kører så længe i < 5, 
     altså 3 gange, da den vil køre for i=2, i=3 og i=4, derfor kan man med amount of cards variablen styre hvor mange cards der skal vises
    
    i++ styrer bare at i's værdi stiger for vært loop.
    
    consten data index gemmer værdien af i og  sikrer at hvis i bliver større end arrayets længde nulstilles det til 0, 
    ved at trække lænden af arrayet fra
    */

    for (let i = currentIndex; i < currentIndex + amountOfCards; i++) {
        const dataIndex = i >= attractions.length ? i - attractions.length : i;


        //cloner template og laver variabler for de individuelle elementer
        const cardClone = cardTemplate.content.cloneNode(true);
        const card = cardClone.querySelector('.card');
        const cardImage = cardClone.querySelector('.card-image');
        const cardTitle = cardClone.querySelector('.card-title');
        const cardDescription = cardClone.querySelector('.card-description');

        //indsætter data baseret på data indexet 
        cardImage.src = attractions[dataIndex].billede.guid;
        cardTitle.textContent = attractions[dataIndex].navn;
        cardDescription.textContent = attractions[dataIndex].beskrivelse;

        destination.appendChild(cardClone);
    }
}

getData();

// click event listener til previous button
prevButton.addEventListener('click', previousCard);

// Click event listener til next button
nextButton.addEventListener('click', nextCard);

//igennem en conditional ternary operater sikres at hvis current index er mindre en eller lig med nul:
//sker det første hvis det er true (så index bliver sat til længden af arrayet minus 1, sådan vises de 2 sidste elementer i arrayet)
// det andet sker hvis det er false, så falder current index bare med 1
//dette sikrer at der loopes rundt til slutningen af arrayet
function previousCard() {
    currentIndex = currentIndex <= 0 ? attractions.length - 1 : currentIndex - 1;
    console.log("previous clicked, current is: " + currentIndex);
    updateCards();
}

//igennem en conditional ternary operater sikres at hvis current index er større end array lenghth
//sker det første hvis det er true (så sættes current index til 0 for at komme frem tils starten af array igen)
// det andet sker hvis det er false, så stiger current index bare med 1
//dette sikrer at der loopes rundt til starten af arrayet

function nextCard() {
    currentIndex = currentIndex >= attractions.length - 1 ? 0 : currentIndex + 1;
    console.log("next clicked, current is: " + currentIndex);
    updateCards();
}


// Variabler for touch start- og slutpunkt
let touchstartX = 0;
let touchendX = 0;
const swipeThreshold = 90; // for at sikre det kun aktiveres efter en hvis distance

// Funktion der håndterer swipe, og kalder enten prev eller next card afhængigt af swipe-retningen
function handleSwipe() {
  // Beregn afstanden mellem touch end og touch start
  const distance = touchendX - touchstartX;

  // Hvis afstanden er større en swipethreshold, aktiveres de to if statements,
  if (Math.abs(distance) >= swipeThreshold) {
    // Hvis slutpunktet er mindre end startpunktet, er det et left swipe og next card vises
    if (touchendX < touchstartX) {
      nextCard();
    }
    // Hvis slutpunktet er større end startpunktet,er det et right swipe og prev card vises
    if (touchendX > touchstartX) {
      previousCard();
    }
  }

  updateCards();
}

// Indsamler data om berørings start ved hjælp af screenX og gemmer det i variablen touchstartx
function handleTouchStart(event) {
  touchstartX = event.changedTouches[0].screenX;
  console.log(touchstartX);
}

// Indsamler data om berøring slut ved hjælp af screenX og gemmer det i variablen touchendx
// Kalder handleSwipe-funktionen
function handleTouchEnd(event) {
  touchendX = event.changedTouches[0].screenX;
  console.log(touchendX);
  handleSwipe();
}

// Event listeners til carousel sectionen
const carousel = document.querySelector('.carousel');
carousel.addEventListener('touchstart', handleTouchStart);
carousel.addEventListener('touchend', handleTouchEnd);

</script>

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>