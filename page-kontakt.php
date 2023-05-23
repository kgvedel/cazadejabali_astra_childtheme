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
#page .site-content {
    background-image: url(https://www.vildsvinejagt.com/wp-content/uploads/2023/05/topografi_gul.svg);
    background-size: 63rem;
    background-position: -50vw 64vh;
    background-repeat: no-repeat;
}

    #contact_section {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        padding: 0;
        gap: 10rem;
        flex-wrap:wrap;

    }

    #graphic_section img {
        max-width: 20rem;
    }

    #form_section {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 0;
        gap: 1.5rem;
    }

    /*this is just the general form styling, copied in dis class in this instance, to make it work, cus wp suxxx*/
    .form { 
        background: #e5dac3;
        padding: 8pt 16pt 8pt 16pt;
        margin: 0 auto;
        border: solid;
        border-width: 0.5px;
        border-radius: 2px;
        max-width: 400pt;
        box-shadow: 4pt 4pt 8pt rgba(0, 0, 0, 0.113);
    }

    #contact_form {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 1.5rem;
        gap: 1rem;
        width: 40rem;

    }

#message{
    width: 100%;
    height: 16rem;
}

    @media (max-width: 1024px) {
        #graphic_section {
            display: none;
        }
    }
    </style>

    <section id="contact_section">

        <section id="graphic_section">
            <img src="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/green.svg" alt="grafik_logo_vildsvin">
        </section>

        <section id="form_section">
            <h2>Kontakt</h2>
       
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