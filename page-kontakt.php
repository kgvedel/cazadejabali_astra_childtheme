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


<div id="primary" <?php astra_primary_class(); ?>>

    <?php astra_primary_content_top(); ?>

    <?php astra_content_page_loop(); ?>

    <style>
    .page-id-82 #main {
        background-color: var(--beige);
        background-image: url(https://www.vildsvinejagt.com/wp-content/uploads/2023/05/topografi_2_rod.svg);
        background-size: 90rem;
        background-position: 60vw -10vh;
        background-repeat: no-repeat;
        width: 100vw;
        position: relative;
        left: calc(-50vw + 50%);
        margin-top: -60px;
        padding: 60px 1rem 0rem 1rem;
    }

    #contact_section {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        padding: 1rem;
        gap: 3rem;
        margin: 4.5rem auto;
        max-width: 1240px;
    }

    #graphic_section img {
        max-width: 40%;
    }

    #graphic_section img {
        max-width: 100%;
    }

    #form_section {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 0;
        gap: 1.5rem;
    }

    /*this is just a bit general form styling, put it here to make it work, cus wp suxxx*/
    form {
        background: var(--beige);
        margin: 0 auto;
        border-radius: 4px;
        box-shadow: 4px 8px 12px 4px #180f0d35;
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
        margin: 0.5rem 0;
        outline: none !important;
    }

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
    }

    /*validation*/
    input:focus,
    input[type=text]:focus,
    input[type=email]:focus,
    input[type=tel]:focus, textarea:focus{

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


    input:valid,
    select:valid {
        border: 2px solid #5ef570;
    }

    /*specific rules again*/
    #contact_form {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        padding: 1.5rem;
        gap: 1rem;
        width: 40rem;

    }




    #message {
        height: 16rem;
    }

    @media only screen and (max-width: 1024px) {
        .page-id-82 #main {
            padding: 60px 4rem 0rem 4rem;
        }

        #graphic_section {
            display: none;
        }
    }

    @media only screen and (max-width: 767px) {
        #contact_section {
            padding: 0px;
        }

        #contact_form {
            width: 90vw
        }

        .page-id-82 #main {

            background-position: 57vw -9vh;
            padding: 60px 1.5rem 0rem 1.5rem;
        }

    }
    </style>

    <section id="contact_section">

        <section id="graphic_section">
            <img src="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/green.svg" alt="grafik_logo_vildsvin">
        </section>

        <section id="form_section">
            <h2>Kontaktformular</h2>

            <!-- Contact form section layout -->
            <form id="contact_form" class="form">
                <h4>Har du nogle spørgsmål?</h4>
                <div class="label_input">
                    <label for="name">Fulde Navn <span class="required">*</span></label>
                    <input type="text" id="name" name="Name" placeholder="Indtast navn" required="">
                </div>

                <div class="label_input">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="Email" placeholder="Indtast email" required="">
                </div>

                <div class="label_input">
                    <label for="message">Din besked <span class="required">*</span></label>
                    <textarea id="message" name="Message" placeholder="Venligst skriv dine spørgsmål her" required=""></textarea>
                </div>

                <div class="label_input">
                    <button type="submit">Send Message</button>
                </div>
            </form>
        </section>

    </section>


</div><!-- #primary -->



<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>