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

    <section id="contact_section">

        <section id="graphic_section">
            <img src="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/green.svg" alt="grafik_logo_vildsvin">
        </section>

        <section id="form_section">
            <h2>Kontakt</h2>
            <h3>Har du nogle spørgsmål?</h3>
            <!-- Contact form section layout -->
            <form id="contact_form">
                
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