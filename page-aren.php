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

    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>

    <section id="seværdigheder_section">
        <h2>Seværdigheder</h2>
        <section id="seværdigheder_cards"></section>
    </section>

    <template>
        <article class="seværdighed">
            <img src="" alt="">
            <h4 class="navn"></h4>

            <hr>

            <div class="infodiv">
                <p class="beskrivelse"></p>
            </div>
            <div class="knapper">
                <li><a href="" class="lokation"><span class="material-icons">location_on</span>Se lokation</a></li>
                <button class="læs_mere">Læs mere</button>
            </div>

        </article>
    </template>

    <?php astra_primary_content_bottom(); ?>

</div><!-- #primary -->

<script>
let attractions;
//const for destinationen af indholdet af templaten
const destination = document.querySelector("#seværdigheder_cards");
let template = document.querySelector("template");




//url til wp  db 
const url = "https://www.xn--mflingo-q1a.dk/kea/pompettesite/wp-json/wp/v2/wine?per_page=100";
// asynkron function som afventer og indhenter json data fra vores rest api
async function hentData() {
    const jsonData = await fetch(url);
    attractions = await jsonData.json();
    visSeværdigheder();
}

</script>

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>