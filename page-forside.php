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


    <section id="nyhedsbrev_section">
        <section id="nyhedsbrev">
            <div id="tekst">
                <h2>Tilmeld nyhedsbrev</h2>
                <p>Tilmeld dig vores nyhedsbrev i dag og få adgang til de seneste nyheder om vores spændende batida
                    drivjagtture i Spanien. Det er nemt at tilmelde sig - blot indtast din e-mailadresse og klik på
                    "Tilmeld" knappen. Du vil derefter modtage en bekræftelses-e-mail, hvor du kan bekræfte din
                    tilmelding.
                </p>
            </div>
            <form class="nyhedsbrev_form">
                <div class="form_group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="Email" placeholder="Indtast email" required>
                </div>

                <div class="sign_btn">
                    <button id="sign_up" type="submit">Tilmeld Nyhedsbrev</button>
                </div>
            </form>
        </section>
    </section>
    <?php astra_primary_content_bottom(); ?>

</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>