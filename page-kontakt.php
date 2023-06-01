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

button#wpforms-submit-2298 {
    background-color: var(--spanish_red);
}

div#wpforms-confirmation-2298 {
    background-color: transparent;
    /* outline: none; */
    border: none;
    font-family: 'Open Sans';
    padding: 0rem;
}

		div.wpforms-container-full .wpforms-field-label{
			margin:0px;
		}


  
    /*this is just a bit general form styling, put it here to make it work, cus wp suxxx*/
    form {
        background: var(--beige);
        margin: 0 auto;
        border-radius: 4px;
        border-width: 0px;
        box-shadow: 4px 8px 12px 4px #180f0d35;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        padding: 1.5rem;
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


    div.wpforms-container-full input[type=text],
    div.wpforms-container-full input[type=email],
    div.wpforms-container-full textarea{
        border: 2px solid transparent;
        border-radius: 4px;
        outline: none !important;

    }

.elementor-element.elementor-element-855e489.elementor-widget__width-initial.elementor-widget-tablet__width-initial.elementor-widget.elementor-widget-wpforms {
    max-height: 28rem;
}

.wpforms-container .wpforms-field {
    padding: 0px;
	margin-bottom: 1rem;
}

  .wpforms-field {
        position: relative;
        display: flex;
        width: 100%;
        flex-direction: column;
        flex: 1 0 48%;

    }



    /*validation*/
    input:focus,
   div.wpforms-container-full input[type=text]:focus,
    div.wpforms-container-full input[type=email]:focus,
    div.wpforms-container-full textarea:focus {

        border: 2px solid var(--blue);
    }


   .wpforms-field:focus-within::before {
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

   .wpforms-field:focus-within::before  {
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

     div.wpforms-container-full input[type=text]:invalid:not(:placeholder-shown), div.wpforms-container-full input[type=email]:invalid:not(:placeholder-shown) {
        border: 2px solid var(--spanish_red);
    }


    div.wpforms-container-full input[type=text]:valid,
 div.wpforms-container-full input[type=email]:valid{
        border: 2px solid #5ef570;
    }

   
    </style>


<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>