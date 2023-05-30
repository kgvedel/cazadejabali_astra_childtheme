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

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}


get_header(); ?>

<?php if (astra_page_layout() == 'left-sidebar'): ?>

<?php get_sidebar(); ?>

<?php endif ?>

<div id="primary" <?php astra_primary_class(); ?>>

    <?php astra_primary_content_top(); ?>

    <?php astra_content_page_loop(); ?>

    <?php astra_primary_content_bottom(); ?>
    <style>
    :root {
        --dark_red: #6b1014;
        --spanish_red: #ad1519;
        --dark_yellow: #d8ab00;
        --spanish_yellow: #fabd00;
        --white: #f9f9f9;
        --beige: #e5dac3;
        --green: #465d52;
        --dark_green: #123929;
        --black: #180f0d;
        --dark_orange: #b45223;
        --orange: #e3530e;
        --blue: #6473ff;
    }

    #booking_jagt_section {
        background-color: var(--green);
        background-image: url(https://www.vildsvinejagt.com/wp-content/uploads/2023/05/topografi_gron.svg);
        background-size: 93rem;
        background-position: -54vw 16vh;
        padding: 4.5rem 0;
        width: 100%;
        max-width: 100%;
        background-attachment: fixed;
        border-top: 2px solid var(--dark_green);
    }

    .navn_efternavn {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        width: 100%;
    }

    /*this is just a bit general form styling, put it here to make it work, cus wp suxxx*/

    form {
        background: var(--beige);
        margin: 0 auto;
        border-radius: 4px;
        border-width: 0px;
        box-shadow: 4pt 4pt 8pt rgba(0, 0, 0, 0.113);
        display: flex;
        flex-direction: column;
        align-items: stretch;
        padding: 1.5rem;
        gap: 1rem;
        max-width: 40rem;
        width: 90%;
    }

    form input {
        min-width: 60%;
        font-family: 'Open Sans';
        min-height: 2rem;

    }

    input:focus,
    input[type=text],
    input[type=email],
    input[type=tel],
    input[type=number],
    select,
    textarea {
        border: 2px solid transparent;
        border-radius: 4px;
        outline: none !important;

    }

    form select,
    form textarea {
        font-family: 'Open Sans';
    }


    label {
        font-weight: bold;
        font-family: 'Open Sans';
    }



    form section {
        display: flex;
        gap: 2rem;
        flex-direction: column;
    }



    .label_input {
        position: relative;
        display: flex;
        width: 100%;
        flex-direction: column;
        flex: 1 0 48%;
        gap: 0pt;
    }



    /*validation*/
    input:focus,
    input[type=text]:focus,
    input[type=email]:focus,
    input[type=tel]:focus,
    input[type=number]:focus,
    select:focus,
    textarea:focus {

        border: 2px solid var(--blue);
    }



    .label_input:focus-within::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: -10px;
        width: 3px;
        background-color: var(--blue);
        height: 0;
        transition: height 0.3s ease-in-out;
    }

    .label_input:focus-within::before {
        animation: expandLine 0.3s forwards;
    }

    @keyframes expandLine {
        0% {
            height: 0;
            bottom: 0;
        }

        100% {
            height: 100%;
            bottom: auto;
            top: 0;
        }
    }

    input:invalid:not(:placeholder-shown) {
        border: 2px solid var(--spanish_red);
    }


    input:focus:valid,
    input:required:valid,
    select:required:valid {
        border: 2px solid #5ef570;
    }

    input:focus {

        border: 2px solid var(--blue);
    }
    </style>
    <section id="booking_info">
        <h2>Booking</h2>

        <div class="btn_jagtforedrag_group">
            <button>Jagt</button>
            <button id="foredrag_knap">Foredrag</button>
        </div>
        <div class="info_container">
            <div class="info_wrapper">
                <h4>Betalingsbetingelser</h4>
                <p>Der indbetales €250 depositum ved bestilling som modregnes ved afregning. Ved afbestilling vil dette
                    beløb
                    tilbagebetales indtil 5 måneder før første jagtdag. 4 måneder før første jagtdag betales €640. Ved
                    afbestilling vil dette beløb tilbagebetales indtil 3 måneder før første jagtdag.
                    Ved ankomsten til Arén og inden indkvartering skal restbeløbet på €1.000 være modtaget på vores
                    bankkonto
                    eller erlægges kontant. (SEPA betalinger i EUR er gratis indenfor EU)</p>
                <h5>Tillæg:</h5>
                <p>Vi gør opmærksom på at der er tillæg for jagt licens på €35 for Aragon og €47 for Katalonien. Da
                    nogle
                    jagter
                    kun er i en region og andre er i begge, kan vi derfor ikke inkludere dem i den samlede pris. Vær
                    derfor
                    opmærksom på et €35 - €82 stigning i forhold til den sanmlede pris.</p>
            </div>
            <div class="info_wrapper">
                <h2>Billede</h2>
            </div>
        </div>
    </section>

    <section id="booking_jagt_section">
        <template id="cart">
            <tbody>
                <div class="info">
                    <div class="jagtperiodeWrapper">
                        <h4>Jagtperiode</h4>
                        <p data-field="cart_jagt_periode"></p>
                        <p data-field="cart_jagt_periode_pris"></p>
                    </div>
                    <div class="antaljaegereWrapper">
                        <h4>Antal jægere</h4>
                        <p data-field="cart_jaegere_antal"></p>
                    </div>
                    <div class="antalledsagereWrapper">
                        <h4>Antal ledsagere</h4>
                        <p data-field="cart_ledsagere_antal"></p>
                    </div>
                </div>

                <div class="total_border">
                    <p data-field="card_total_title">Prisen&nbsp</p>
                    <p data-field="cart_total_pris"></p>
                </div>
            </tbody>
        </template>

        <table id="cart_table">

        </table>
        <form method="post" id="booking_jagt_form">

            <section id="jagt_dropdown">
                <h4>Vælg jagt</h4>
                <div class="label_input">
                    <label for="valgjagt">Jagtperiode</label>
                    <select id="valgjagt_periode" name="valgjagt" required>
                        <option value="" disabled selected>Vælg jagtperiode</option>
                        <option value="0">3-4-5 November 23 (3 jagtdage)</option>
                        <option value="1">10-11-12 November 23 (3 jagtdage)</option>
                        <option value="2">17-18-19 November 23 (3 jagtdage)</option>
                        <option value="3">24-25-26 November 23 (3 jagtdage)</option>
                        <option value="4">2-3 December 23 (2 jagtdage)</option>
                        <option value="5">12-13-14 Januar 24 (3 jagtdage)</option>
                    </select>
                </div>
            </section>
            <h3>Vælg deltagere</h3>
            <section id="valg_af_deltagere">
                <div class="label_input">
                    <label for="jaegere">Jægere</label>
                    <input type="number" id="jaegere" name="jaegere" min="10" max="16" placeholder="Antal jægere"
                        required>
                </div>
                <div class="label_input">
                    <label for="ledsagere">Ledsagere</label>
                    <input type="number" id="ledsagere" name="ledsagere" placeholder="Antal ledsagere" min="0" max="10">
                </div>
            </section>
            <section id="oplysninger">
                <h4>Dine oplysninger</h4>
                <div class="navn_efternavn">
                    <div class="label_input">
                        <label for="fornavn">Fornavn</label>
                        <input type="text" name="fornavn" id="fornavn" minlength="2" placeholder="Indtast fornavn"
                            required>
                    </div>
                    <div class="label_input">
                        <label for="efternavn">Efternavn</label>
                        <input type="text" name="efternavn" id="efternavn" minlength="2" placeholder="Indtast efternavn"
                            required>
                    </div>
                </div>

                <div class="label_input">
                    <label for="mail">Email*</label>
                    <input type="email" id="mail" name="mail" placeholder="Indtast email" required>
                </div>
                <div class="label_input">
                    <label for="phone">Mobil/telefon nummer</label>
                    <input type="tel" id="phone" name="phone" maxlength="8" pattern="[0-9]+"
                        placeholder="Indtast telefonnummer" required>

                </div>
            </section>

            <section id="kommentar">
                <h4>Kommentar til din booking</h4>
                <div class="label_input">
                    <label for="besked">Besked</label>
                    <textarea name="besked" id="besked" cols="30" rows="10"
                        placeholder="Tilføj din kommentar her"></textarea>
                </div>
            </section>

            <div class="send_btn">
                <button class="send_btn" type="submit" type="submit" name="submit" value="Submit">Send forespørgsel</button>
            </div>


        </form>
    </section>

</div><!-- #primary -->
<script>
"use strict";
window.addEventListener("DOMContentLoaded", start);

let bookingInfo = {
    jagtperiode: "",
    jaegere: "",
    ledsagere: "",
    fuldenavn: "",
    email: "",
    telefon: "",
    besked: "",
    total_pris: ""
}

let nyBookingInfo;
let customerForm;

function start() {

    customerForm = document.querySelector("#booking_jagt_form");


    //creating new booking object
    nyBookingInfo = Object.create(bookingInfo);
    //calling my eventhandler
    eventhandler();

    function eventhandler() {
        document.querySelector("#foredrag_knap").addEventListener("click", () => window.location.href =
            "https://www.vildsvinejagt.com/index.php/booking-foredrag/");

        //calling function for showing the cart
        showCart();

        //eventlisteners for input fields that effect the cart display
        const jagtperiodeselect = customerForm.elements.valgjagt;
        const jaegereinput = customerForm.elements.jaegere;
        const ledsagerinput = customerForm.elements.ledsagere;

        jagtperiodeselect.addEventListener('input', updateCustomerOrder);
        jaegereinput.addEventListener('input', updateCustomerOrder);
        ledsagerinput.addEventListener('input', updateCustomerOrder);

        //here i add click eventlistener, if form is valid it prevents default submit, and calls proceed to cart
        //its to make sure that form is still checked for validity, and only prevents default (refresh) once everything IS valid
     /*    document.querySelector(".send_btn").addEventListener("click", function(event) {
            console.log("submit clicked");
            if (customerForm.checkValidity()) {

              // event.preventDefault();
                saveCustomerOrder();

            } else {
                console.log("not valid yet");
            }
        }); */
    }
}

//updating the booking object based on the latest input from the user
function updateCustomerOrder() {
    console.log("updating the order");
    let t = document.getElementById('valgjagt_periode');
    let jagtperiodeText = t.options[t.selectedIndex].text;


    //only saving the values into the booking object if the input is valid
    if (customerForm.elements.jaegere.checkValidity()) {
        nyBookingInfo.antalJaegere = customerForm.elements.jaegere.value;

    }
    if (customerForm.elements.valgjagt.checkValidity()) {
        nyBookingInfo.jagtperiode = jagtperiodeText;

    }
    if (customerForm.elements.ledsagere.checkValidity()) {
        nyBookingInfo.antalLedsagere = customerForm.elements.ledsagere.value;

    }

    //calling update cart
    updateCart();
}

//calculating the base prise of the jagt
function jagtPrisen() {
    const prisJagtTo = 1890;
    const prisJagtTre = 2380;
    let jagtpris;


    //udregner jagtpris 
    if (nyBookingInfo.jagtperiode == 4) {
        jagtpris = prisJagtTo;
    } else {
        jagtpris = prisJagtTre;

    }

    return (jagtpris);

}

//showing the cart, this happens before input, so it only shows the initial base price.
function showCart() {

    const template = document.getElementById('cart');
    const clone = template.content.cloneNode(true);

    console.log("show cart");

    //udregner jagtpris
    const prisJagtTo = 1890;
    const prisJagtTre = 2380;
    let jagtpris = jagtPrisen();

    const jagtPeriode = nyBookingInfo.jagtperiode;

    if (jagtPeriode === 4) {
        jagtpris = prisJagtTo;
    } else {
        jagtpris = prisJagtTre;
    }

    //displaying the basis jagtpris

    clone.querySelector("[data-field=cart_jagt_periode_pris]").textContent = "€" + jagtpris + " pr. Jæger";

    document.querySelector("#cart_table").appendChild(clone);

}


//updating the cart display based on the updated information
function updateCart() {

    //Here we get the value from the select and are only getting the text string from the options instead of the value
    let t = document.getElementById('valgjagt_periode');
    let jagtperiodeText = t.options[t.selectedIndex].text;


    const antalJaegere = nyBookingInfo.antalJaegere;
    const antalLedsagere = nyBookingInfo.antalLedsagere;
    const jagtPeriode = nyBookingInfo.jagtperiode;
    let jagtpris = jagtPrisen();
    let jagt_total_pris = jagtpris * antalJaegere;

    nyBookingInfo.total_pris = jagt_total_pris;

    console.log(nyBookingInfo);

    // Update the cart with the latest information
    const cart = document.querySelector("#cart_table");
    cart.querySelector("[data-field=cart_jagt_periode_pris]").textContent = "€" + jagtpris + " pr. Jæger";
    cart.querySelector("[data-field=cart_jagt_periode]").textContent = jagtperiodeText;
    cart.querySelector("[data-field=cart_total_pris]").textContent = "for " + antalJaegere + " jægere er " + "€" +
        nyBookingInfo.total_pris;
    cart.querySelector("[data-field=cart_jaegere_antal]").textContent = antalJaegere;
    cart.querySelector("[data-field=cart_ledsagere_antal]").textContent = antalLedsagere;
}

//saves all the information form the forms inputs (that has not already been saved at ) into the booking object
//this function can only be called when the form is valid
// the first 3 elements (jagtperiode, jægere, ledsagere) have already been saved earlier at updateCustomerOrder
function saveCustomerOrder() {
    console.log("save_customer_order function");
    customerForm = document.querySelector("#booking_jagt_form");

    let fuldeNavn = customerForm.elements.fornavn.value + "  " + customerForm.elements.efternavn.value;
    let email = customerForm.elements.mail.value;
    let telefon = customerForm.elements.phone.value;
    let dinBesked = customerForm.elements.besked.value;

    //combining all of the new the information into the new booking object
    nyBookingInfo.fuldeNavn = fuldeNavn;
    nyBookingInfo.email = email;
    nyBookingInfo.telefon = telefon;
    nyBookingInfo.dinBesked = dinBesked;



    console.log(customerForm.checkValidity());
    if (customerForm.checkValidity()) {
        console.log("woohoo order confirmed yo");
        console.log(nyBookingInfo);
        

    } else {
        console.log("naaah");
    }

}

</script>



<?php if (astra_page_layout() == 'right-sidebar'): ?>

<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>



<?php

if (isset($_POST['submit'])) {
    $to = 'mathildeengb@gmail.com';
    $subject = 'Helloooo';
    $message = 'Hallojsa';

    // Headers
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
    );

    // Send the email
    $sent = wp_mail($to, $subject, $message, $headers);

    if ($sent) {
        echo 'Email sent successfully.';
    } else {
        echo 'Failed to send email.';
    }
}
?>



