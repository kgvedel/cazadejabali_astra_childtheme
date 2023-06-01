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

    <section id="booking_info">

        <style>
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

        #booking_oplysninger_oplaeg {
            background-color: var(--green);
            background-image: url(https://www.vildsvinejagt.com/wp-content/uploads/2023/05/topografi_gron.svg);
            background-size: 93rem;
            background-position: -54vw 16vh;
            padding: 4.5rem 0;
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


        form {
            background: var(--beige);
            margin: 0 auto;
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

            border: 2px solid var(--blue);
        }

        #booking_info {
            max-width: 100%;
            margin: 0;
        }

        /*desktop*/
        @media only screen and (min-width: 1024px) {
            #booking_oplysninger_oplaeg {
                background-attachment: fixed;
            }

        }
        </style>


        <section id="booking_oplysninger_oplaeg">
            <form method="post" id="booking_oplysning_foredrag">

                <section id="oplysninger">
                    <h4>Dine oplysninger</h4>
                    <div class="navn_efternavn">
                        <div class="label_input">
                            <label for="fornavn">Fornavn <span class="req_field"> *</span></label>
                            <input type="text" name="fornavn" id="fornavn" placeholder="Indtast fornavn" required>
                        </div>
                        <div class="label_input">
                            <label for="efternavn">Efternavn <span class="req_field"> *</span></label>
                            <input type="text" name="efternavn" id="efternavn" placeholder="Indtast efternavn" required>
                        </div>
                    </div>

                    <div class="label_input">
                        <label for="mail">Email <span class="req_field"> *</span></label>
                        <input type="email" id="mail" name="mail" placeholder="Indtast email" required>
                    </div>
                    <div class="label_input">
                        <label for="phone">Mobil/telefon nummer</label>
                        <input type="tel" id="phone" name="phone" maxlength="8" placeholder="Indtast mobilnummer"
                            pattern="[0-9]+">
                    </div>
                </section>

                <section id="kommentar">
                    <h4>Kommentar til din bestilling <span class="req_field"> *</span></h4>
                    <div class="label_input">
                        <label for="besked">Besked</label>
                        <textarea name="besked" id="besked" cols="30" rows="10"
                            placeholder="Tilføj kommentarer til din forespørgsel på oplæg her" required></textarea>
                    </div>
                </section>

                <div class="send_btn">
                    <button class="send_btn" type="submit" type="submit" name="send" value="submit">Send forespørgsel
                    </button>
                </div>

            </form>
        </section>


</div><!-- #primary -->

<script>


</script>

<script>
"use strict";
window.addEventListener("DOMContentLoaded", start);
let foredragForm;

function start() {
    console.log("i work");


    foredragForm = document.querySelector("#booking_oplysning_foredrag");

    //here i add click eventlistener, if form is valid it prevents default submit, and calls send form data
    //its to make sure that form is still checked for validity, and only prevents default (refresh) once everything IS valid
    document.querySelector(".send_btn").addEventListener("click", function(event) {
        console.log("submit clicked");
        if (foredragForm.checkValidity()) {
            event.preventDefault(); // Prevent default form submission

            sendForedragForm();

        } else {
            console.log("not valid yet");
        }
    });
}

function sendForedragForm() {

    //formdata bliver læst direkte fra form fra nu af så php kan modtage det!!! 


    console.log("sending form data");

    foredragForm = document.querySelector("#booking_oplysning_foredrag");


    let formData = new FormData(foredragForm);

    // Create and send an AJAX request
    let myrequest = new XMLHttpRequest();
    myrequest.open('POST', '');

    myrequest.send(formData);

    displayConfirmation();
}



function displayConfirmation() {
    foredragForm = document.querySelector("#booking_oplysning_foredrag");


    let elements = foredragForm.elements;

    for (let i = 0, element; element = elements[i++];) {
        element.classList.add("hidden");
    }
    foredragForm.innerHTML = '<h4>Tak for din forespørgsel! </h4>';
    foredragForm.innerHTML +=
        '<p>Mange tak for din interesse for et oplæg! <br> Jeg vil vende tilbage hurtigst muligt så vi kan aftale detlajerne nærmere.</p>';

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
   
    $fornavn = $_POST['fornavn'];
    $efternavn = $_POST['efternavn'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $besked = $_POST['besked'];

    // Perform your calculations or any other necessary operations

   
      

    // Build the email content
    $message .= 'Fuldnavn: ' . $fornavn . ' ' . $efternavn . "\r\n";
    $message .= 'Email: ' . $mail . "\r\n";
    $message .= 'Telefon: ' . $phone . "\r\n";
    $message .= 'Besked: ' . $besked . "\r\n";
   

     // Set the email subject
     $subject = 'Ny bestilling på oplæg fra '  . $fornavn . ' ' . $efternavn . "\r\n";

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