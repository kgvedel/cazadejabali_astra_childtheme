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
    <style>
    #seværdigheder {
        margin-bottom: 4.5rem;
        background-color: transparent;
    }

    #seværdigheder h2 {
        text-align: center;
        align-self: center;
    }

    .carousel_container {
        padding: 1.5rem 0px;
        width: 100vw;
        position: relative;
        left: calc(-50vw + 50%);
        background-color: var(--green);
        background-image: url(https://www.vildsvinejagt.com/wp-content/uploads/2023/05/topografi_gul.svg);
        background-size: 97rem;
        background-position: -10vw -72vh;
        background-repeat: no-repeat;
    }



    .carousel {
        display: flex;
        max-width: 1240px;
        margin: 0 auto;
        padding: 0 1rem;
        align-items: center;
        gap: 1rem;
    }

    .attractions {
        max-width: 1240px;
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .card {
        display: flex;
        flex: 1 0 280px;
        box-sizing: border-box;
        min-height: 40rem;
        max-height: 48rem;
        margin: 0.75rem;
        border-radius: 0.25rem;
        overflow: hidden;
        padding: 1rem;
        border: 0px solid var(--black);
        background-color: var(--white);
        box-shadow: 4px 8px 12px 4px #180f0d35;
        flex-direction: column;
        justify-content: space-between;

    }

    #prevButton,
    #nextButton {
        cursor: pointer;
        background-color: transparent;
        border: none;
        font-size: 4.5rem;
        color: var(--black);
        padding: 0rem 1rem;
    }

    #prevButton:hover,
    #nextButton:hover {
        color: var(--spanish_red);

    }


    #card-image {
        padding: 0.5rem;
        object-fit: cover;
        width: 100%;
        max-width: 100%;
        height: 12rem;
        min-height: 12rem;
        align-self: center;
    }

    h4.card-title {
        margin: 0.25rem;
        text-align: center;
    }

    #pin-icon {
        font-size: 1rem;
    }

    .linebreaker {
        border-top: 2px solid var(--black);
        width: 100%;
        margin: 0.5rem;
    }

    .button-container {
        background-color: var(--spanish_red);
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin: 1rem -1rem -1rem -1rem;
        padding: 1rem;
        flex-wrap: wrap;
        align-content: center;
        gap: 0.5rem;
        min-height: 5rem;
    }

    .button-container button {
        padding-top: 0.5rem;
        background-color: var(--spanish_yellow);
        color: var(--black);

    }

    .button-container button:hover{
        background-color: var(--dark_yellow);
    }

    .opacity {
        opacity: 0;
    }

    @media only screen and (max-width: 1024px) {
        .carousel_container {
            background-position: -43vw -14vh;
        }
    }

    @media only screen and (max-width: 767px) {

        /*seværdigheder*/
        .carousel {
            padding: 0rem;
            gap: 0rem;
        }

        .card {
            margin: 0rem;
        }

        #nextButton,
        #prevButton {

            font-size: 4rem;
        }

    }
    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <section id="seværdigheder">
        <h2>Seværdigheder</h2>
        <div class="carousel_container">
            <div class="carousel">
                <button class="fa fa-angle-left controls" id="prevButton"></button>
                <div class="attractions"></div>
                <button class="fa fa-angle-right controls" id="nextButton"></button>
            </div>
        </div>
    </section>
    <template id="cardTemplate">
        <div class="card">
            <img id="card-image" class="card-image" src="" alt="">
            <h4 class="card-title"></h4>
            <hr class="linebreaker">
            <p class="card-description"></p>
            <div class="button-container">
                <button class="btn-location"><i class="material-icons" id="pin-icon">location_on</i> Se
                    lokation</button>
                <button class="btn-link">Tripadvisor</button>
            </div>
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
        const attractionImage = cardClone.querySelector('.card-image');
        const attractionTitle = cardClone.querySelector('.card-title');
        const attractionDescription = cardClone.querySelector('.card-description');
        const attractionLocation = cardClone.querySelector('.btn-location');
        const attractionMore = cardClone.querySelector('.btn-link');


        //indsætter data baseret på data indexet 
        attractionImage.src = attractions[dataIndex].billede.guid;
        attractionTitle.textContent = attractions[dataIndex].navn;
        attractionDescription.textContent = attractions[dataIndex].beskrivelse;

        attractionLocation.addEventListener("click", () => window.open(attractions[dataIndex].placering));
        attractionMore.addEventListener("click", () => window.open(attractions[dataIndex].link));

        if (dataIndex == 0) {

            cardClone.querySelector('.button-container').classList.add("opacity");
            attractionLocation.remove();
            attractionMore.remove();
        }


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