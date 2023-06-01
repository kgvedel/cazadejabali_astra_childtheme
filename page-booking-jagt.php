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

    h1,
    h2,
    h3 {
        font-family: "Yantramanav";
        color: var(--black);
    }

    h1 {
        font-size: 72px;
        font-style: normal;
        font-weight: 900;
    }

    h2 {
        font-size: 64px;
        font-style: normal;
        font-weight: bold;
    }

    h3 {
        font-size: 56px;
        font-style: normal;
        font-weight: 600;
    }

    h4,
    p {
        font-family: "Open Sans";
    }

    h4 {
        font-size: 1.5rem;
        font-style: normal;
        font-weight: bold;
    }

    #booking_jagt_section {
        background-color: var(--green);
        background-image: url(https://www.vildsvinejagt.com/wp-content/uploads/2023/05/topografi_gron.svg);
        background-size: 93rem;
        background-position: -54vw 23vh;
        padding: 2rem 1rem;
        width: 100%;
        max-width: 100%;
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
        margin: 1rem auto;
        border-radius: 0.25rem;
        border: 0.25rem solid var(--spanish_red);
        box-shadow: 4pt 4pt 8pt rgba(0, 0, 0, 0.113);
        display: flex;
        flex-direction: column;
        align-items: stretch;
        padding: 1.5rem;
        gap: 1rem;
        max-width: 40rem;
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
        border-radius: 0.25rem;
        outline: none !important;

    }

    option:disabled {
    background-color: #e5e2e2;
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
        gap: 1rem;
        flex-direction: column;
        margin-bottom: 2rem;
    }



    .label_input {
        position: relative;
        display: flex;
        width: 100%;
        flex-direction: column;
        flex: 1 0 48%;
    }


    .req_field{
        color:var(--spanish_red);
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

        border: 0.125rem solid var(--blue);
    }


    table {
        background-color: var(--white);
        border-radius: 0.25rem;
        margin: 0 auto;
        padding: 1.5rem;
        border: 0.25rem solid var(--spanish_red);
    }

    #cart_table {
        max-width: 40rem;
    }

    .jagtperiodeWrapper,
    .antaljaegereWrapper,
    .antalledsagereWrapper,
    .total_border {
        color: var(--black);
    }

    .info {
        display: flex;
        justify-content: space-between;
        gap: 0.5rem;
    }

    .info h4 {
        font-size: 1rem;
        padding-bottom: 0.5rem;
    }

    .total_border {
        border-top: 1px solid var(--black);
        display: flex;
        padding-top: 0.5rem;
    }

    .jagtperiodeWrapper {
        max-width: 16rem;
    }

    .total_border>p:nth-child(1) {
        font-weight: bold;
    }


    /*desktop*/
    @media only screen and (min-width: 1024px) {
        #booking_oplysninger_oplaeg {
            background-attachment: fixed;
        }

    }

    .hidden {
        display: none;
    }
    </style>



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
                    <label for="valgjagt">Jagtperiode<span class="req_field"> *</span></label>
                    <select id="valgjagt_periode" name="valgjagt" required>
                        <option value="" disabled selected>Vælg jagtperiode</option>
                        <option value="0">3-4-5 November 23 (3 jagtdage)</option>
                        <option value="1" disabled>10-11-12 November 23 (3 jagtdage)</option>
                        <option value="2" disabled>17-18-19 November 23 (3 jagtdage)</option>
                        <option value="3">24-25-26 November 23 (3 jagtdage)</option>
                        <option value="4">2-3 December 23 (2 jagtdage)</option>
                        <option value="5" disabled>12-13-14 Januar 24 (3 jagtdage)</option>
                    </select>
                </div>
            </section>
            <h4>Vælg deltagere</h4>
            <section id="valg_af_deltagere">
                <div class="label_input">
                    <label for="jaegere">Jægere<span class="req_field"> *</span></label>
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
                        <label for="fornavn">Fornavn<span class="req_field"> *</span></label>
                        <input type="text" name="fornavn" id="fornavn" minlength="2" placeholder="Indtast fornavn"
                            required>
                    </div>
                    <div class="label_input">
                        <label for="efternavn">Efternavn<span class="req_field"> *</span></label>
                        <input type="text" name="efternavn" id="efternavn" minlength="2" placeholder="Indtast efternavn"
                            required>
                    </div>
                </div>

                <div class="label_input">
                    <label for="mail">Email <span class="req_field"> *</span></label>
                    <input type="email" id="mail" name="mail" placeholder="Indtast email" required>
                </div>
                <div class="label_input">
                    <label for="phone">Mobil/telefon nummer <span class="req_field"> *</span></label>
                    <input type="tel" id="phone" name="phone" maxlength="8" pattern="[0-9]+"
                        placeholder="Indtast telefonnummer" required>

                </div>
            </section>

            <section id="kommentar">
                <h4>Kommentar til din bestilling</h4>
                <div class="label_input">
                    <label for="besked">Besked</label>
                    <textarea name="besked" id="besked" cols="30" rows="10"
                        placeholder="Tilføj kommentarer til din forespørgsel her"></textarea>
                </div>
            </section>

            <div class="send_btn">
                <button class="send_btn" type="submit" type="submit" name="send" value="submit">Send
                    forespørgsel</button>
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
        document.querySelector(".send_btn").addEventListener("click", function(event) {
            console.log("submit clicked");
            if (customerForm.checkValidity()) {
                event.preventDefault(); // Prevent default form submission

                sendFormData();

            } else {
                console.log("not valid yet");
            }
        });
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
    if (nyBookingInfo.jagtperiode == "2-3 December 23 (2 jagtdage)") {
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
    console.log("updateCart");
    console.log(nyBookingInfo.jagtperiode);
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


//this function can only be called when the form is valid

function sendFormData() {

    //formdata bliver læst direkte fra form fra nu af så php kan modtage det!!!!!


    console.log("sending form data");

    customerForm = document.querySelector("#booking_jagt_form");


    let formData = new FormData(customerForm);

    // Create and send an AJAX request
    let request = new XMLHttpRequest();
    request.open('POST', ''); // Submit to the same file

    request.send(formData);

    displayConfirmation();
}



function displayConfirmation() {
    customerForm = document.querySelector("#booking_jagt_form");

    let cartTable = document.querySelector("#cart_table");

    cartTable.classList.add("hidden");

    let elements = customerForm.elements;

    for (let i = 0, element; element = elements[i++];) {
        element.classList.add("hidden");
    }
    customerForm.innerHTML = '<h4>Tak for din forespørgsel!</h4>';
    customerForm.innerHTML +=
        '<p>Tak for din bestilling. Din forespørgsel er modtaget, og vi vil personligt kontakte dig inden for kort tid for at drøfte detaljerne nærmere. Vi ser frem til at tale med dig!</p>';

}
</script>



<?php if (astra_page_layout() == 'right-sidebar'): ?>

<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Set the recipient email address
    $to = 'mathildeengb@gmail.com';

   

    // Retrieve the form data
    $valgjagt = $_POST['valgjagt'];
    $jaegere = $_POST['jaegere'];
    $ledsagere = $_POST['ledsagere'];
    $fornavn = $_POST['fornavn'];
    $efternavn = $_POST['efternavn'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $besked = $_POST['besked'];

    // Perform your calculations or any other necessary operations

    $pris;

    if ($valgjagt == 4) {
        $pris = 1890;
      } else {
        $pris = 2380;
      }
      
   

    $fuldpris =  $pris * $jaegere;

    // Build the email content
    $message = 'Ny bestillings forespørgsel: ' . "\r\n\r\n";
    $message .= 'Jagtperiode: ' . $valgjagt . "\r\n";
    $message .= 'Antal jægere: ' . $jaegere . "\r\n";
    $message .= 'Den samlede jagtpris: £' . $fuldpris . "\r\n";
    $message .= 'Antal ledsagere: ' . $ledsagere . "\r\n";
    $message .= 'Fuldnavn: ' . $fornavn . ' ' . $efternavn . "\r\n";
    $message .= 'Email: ' . $mail . "\r\n";
    $message .= 'Telefon: ' . $phone . "\r\n";
    $message .= 'Besked: ' . $besked . "\r\n";
   

     // Set the email subject
     $subject = 'Ny Bestiling forespørgsel fra '  . $fornavn . ' ' . $efternavn . "\r\n";

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