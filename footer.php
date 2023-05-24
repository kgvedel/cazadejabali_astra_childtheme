<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->

<?php
?>

<style>
.footer_menu a {
    color: var(--white);
}

ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.footer_top {
    display: flex;
    justify-content: space-around;
    /* gap: 48px; */
    padding-top: 24px;
    flex-wrap: wrap;
}

.right {
    width: 260px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    flex-wrap: wrap;
}

#footer_logo {
    width: 240px;
}

#footer_logo img {
    width: 100%;
    object-fit: contain;
    width: 100%;
}

.download {
    display: flex;
    gap: 24px;
    padding: 8px;
}

.footer_nyhedsbrev_form {
    display: flex;
    gap: 24px;
    flex-wrap: wrap;
}

#sfooter {
	max-width: 100%;
    margin: 0 auto;
    border-style: solid;
    border-width: 2px 0px 0px 0px;
    border-color: var(--dark_red);
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
	padding: 0;
}
section.middle {

    gap: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-content: space-between;
}

.footer_social {
    display: flex;
    gap: 64px;
    flex-wrap: wrap;
    padding: 8px;
}

.social {
    display: flex;
    gap: 1rem;
    padding: 8px;
}

#footer_nyhedsbrev_section {
    width: 100%;
    padding: 24px 0px 24px 0px;
}

#footer_nyhedsbrev_section>section:nth-child(1) {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.footer_form_group {
    width: 400px;
}

.footer_input {
    width: 100%;
}

.footer_nyhedsbrev_form {
    display: flex;
    gap: 8px align-items: center;
    flex-wrap: wrap;
}

.footer_bottom {
    background-color: var(--dark_green);
    display: flex;
    width: 100%;
    flex-direction: row;
    align-items: center;
	padding: 1rem;
	
}
.footer_menu{
	width: 100%;
}

.footer_menu > ul:nth-child(1) {
	display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 3rem;
    width: 100%;
    padding: 2rem;
}



</style>

<footer>
    <section id="sfooter">
        <section class="footer_top">
            <section class="left">
                <div id="footer_logo">
                    <img src="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/green.svg"
                        alt="grafik_logo_vildsvin">
                </div>

            </section>

            <section class="middle">
                <div class="footer_contact">
                    <ul class="contact">
                        <li><a href="https://goo.gl/maps/swjEAjDChhDWmxaz7" target="_blank"><span
                                    class="material-icons">location_on</span>CazadeJabalí, Calle San Miguel 37A,
                                22583
                                Arén, España</a></li>
                        <li><a href="tel:+34638731397"><span class="material-icons">phone</span>+34 638 731
                                397</a>
                        </li>
                        <li><a href="tel:+4530647409"><span class="material-icons">phone</span>+45 30 64 74
                                09</a>
                        </li>
                        <li><a href="mailto:tom@cazadejabali.com" target="_blank"><span
                                    class="material-icons">email</span>Tom@cazadejabali.com</a></li>
                    </ul>
                </div>
                <div class="footer_social">
                    <ul class="social">
                        <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-official"
                                    style="font-size:24px;color:var(--dark_green);"></i></a></li>
                        <li><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"
                                    style="font-size:24px;color:var(--dark_green);"></i></a>
                        </li>
                        <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"
                                    style="font-size:24px;color:var(--dark_green);"></i></a>
                        </li>
                    </ul>
            </section>



            <section class="right">
                <div class="footer_download">
                    <h5>Download vores program, flyer og plakat</h5>
                    <ul class="download">
                        <li><a target="_blank" class="jp-btn"
                                href="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/Cazadejabali_jagtprogram.pdf">Jagtprogram</a>
                        </li>
                        <li><a target="_blank" class="jp-btn"
                                href="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/CazadeJabali_flyer-1.pdf">Flyer</a>
                        </li>
                        <li><a target="_blank" class="jp-btn" href="https://www.google.com">Plakat</a></li>
                    </ul>
                </div>
                <section id="footer_nyhedsbrev_section">
                    <section id="nyhedsbrev">
                        <div id="tekst">
                            <h5>Tilmeld nyhedsbrev</h5>
                        </div>
                        <form class="footer_nyhedsbrev_form">
                            <div class="footer_form_group">
                                <label for="email">Email <span class="required">*</span></label>
                                <input class="footer_input" type="email" id="email" name="Email"
                                    placeholder="Indtast email" required>
                            </div>

                            <div class="sign_btn">
                                <button id="sign_up" type="submit">Tilmeld Nyhedsbrev</button>
                            </div>
                        </form>
                    </section>
                </section>

            </section>
        </section>
        <section class="footer_bottom">
            <div class="footer_menu">
                <ul>
                    <li><a href="https://www.vildsvinejagt.com/">Hjem</a></li>
                    <li><a href="https://www.vildsvinejagt.com/index.php/jagtprogram-2/">Jagtprogram</a></li>
                    <li><a href="https://www.vildsvinejagt.com/index.php/aren/">Arén</a></li>
                    <li><a href="https://www.vildsvinejagt.com/index.php/galleri-2/">Galleri</a></li>
                    <li><a href="https://www.vildsvinejagt.com/index.php/kontakt/">Kontakt</a></li>
                    <li><a href="https://www.vildsvinejagt.com/index.php/faq/">FAQ</a></li>
                </ul>
            </div>
        </section>

    </section>
</footer>

</div><!-- #page -->

<?php
astra_body_bottom();
wp_footer();
?>
</body>

</html>