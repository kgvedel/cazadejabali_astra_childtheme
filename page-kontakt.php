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
        margin: 4.5rem 0;
        max-width:1240px;
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
        background: #e5dac3;
        margin: 0 auto;
        border: solid;
        border-width: 0.5px;
        border-radius: 2px;
        max-width: 400pt;
        box-shadow: 4pt 4pt 8pt rgba(0, 0, 0, 0.113);
    }

    form input {
        min-width: 80%;
        font-family: 'Open Sans';

    }

    label {
        font-weight: bold;
        font-family: 'Open Sans';
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

    .form_group {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
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
                <div class="form_group">
                    <label for="name">Fulde Navn <span class="required">*</span></label>
                    <input type="text" id="name" name="Name" placeholder="Indtast navn" required="">
                </div>

                <div class="form_group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="Email" placeholder="Indtast email" required="">
                </div>

                <div class="form_group">
                    <label for="message">Din besked <span class="required">*</span></label>
                    <textarea id="message" name="Message" required=""></textarea>
                </div>

                <div class="form_group">
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