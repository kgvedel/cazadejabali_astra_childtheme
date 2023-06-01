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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->

<?php
?>

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

        /*Footer stylingen*/

        /*List stylingen bliver i flex, da vi gør det lokalt i html, er det kun adresse listen tilstede*/
        ul {
            list-style: none;
        }

        a{
            color: var(--dark_green);
            text-decoration: none;
        }

        a:hover{
            color: var(--spanish_red);
        }

        
       #sfooter i{
            color: var(--spanish_red);
        }

        #sfooter i:hover{
            color: var(--dark_green);
        }

        .footer_bottom {
        background-color: var(--dark_green);
        padding: 8pt;
        }

        .footer_menu{
        display: flex;
        gap: 24pt;
        padding: 8pt;
        flex-wrap: wrap;
        }

        .footer_menu a{
            color: white;
            text-decoration: none;
            
        }

        .footer_menu a:hover{
            border-bottom: 2px solid;
            padding-bottom: 0.5rem;
            border-color: #ad1519;
        }

        #footer_img img{
       width: 260px;
			object-fit: cover;
        }

#footer_top {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 1.5rem 3.5rem 1.5rem 3.5rem;
  gap: 2rem;
  align-items: baseline;
}

.firma_tekst {
  font-size: 12px;
}

.left {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.social {
  display: flex;
  gap: 16pt;
  padding-left: 0px;
	margin-left: 42px;
margin-bottom: 0px;
}
		
		.middle {
margin-left: -32px;
}


.footer_contact {
  align-items: center;
}


.download {
  display: flex;
  gap: 16pt;
  padding-left: 0px;
}


.footer_download {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.contact {
  padding-left: 0px;
}

#sfooter {
  border-top: solid;
  padding-top: 16pt;
  border-color: var(--dark_red);
  margin: 0 auto;
	
}
		
    </style>
    <footer>
        <section id="sfooter">
            <section id="footer_top">
                <section class="left">
                    <div id="footer_logo">
                        <a id="footer_img" href="https://www.vildsvinejagt.com/"><img src="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/Frame-1333.svg" alt="Logo"></a>
                    </div>
                    <div class="firma_tekst">
                        <p>© Cazadejabali/Tom Vedel 2023</p>
                        <p>Tax Id: Cazadejabali/Tom Vedel Y6551404Y</p>
                        <a href="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/Handelsbetingelser-CazadeJabali-2023.pdf">Handelsbetingelser</a>

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
                            <li><a href="https://www.facebook.com/Vildsvinejagt" target="_blank"><i class="fa fa-facebook-official" style="font-size: 32px;"
                                        ></i></a></li>
                            <li><a href="https://instagram.com/cazadejabalidk?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fa fa-instagram" style="font-size: 32px;"
                                        ></i></a>
                            </li>
                            <li><a href="https://www.youtube.com/@cazadejabali4624" target="_blank"><i class="fa fa-youtube" style="font-size: 32px;"
                                        ></i></a>
                            </li>
                        </ul>
                </section>



                <section class="right">
                    <div class="footer_download">
                        <h5>Download vores program og flyer</h5>
                        <ul class="download">
                            <li><a target="_blank" class="jp-btn"
                                    href="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/Cazadejabali_jagtprogram.pdf">Jagtprogram</a>
                            </li>
                            <li><a target="_blank" class="jp-btn"
                                    href="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/CazadeJabali_flyer-1.pdf">Flyer</a>
                            </li>
                           <!-- <li><a target="_blank" class="jp-btn" href="https://www.google.com">Plakat</a></li>
                        </ul>-->
                    </div>
                </section>
            </section>
            <section class="footer_bottom">
                    <ul class="footer_menu">
                        <li><a href="https://www.vildsvinejagt.com/index.php/jagtprogram-2/">Jagtprogram</a></li>
                        <li><a href="https://www.vildsvinejagt.com/index.php/aren/">Arén</a></li>
                        <li><a href="https://www.vildsvinejagt.com/index.php/galleri-2/">Galleri</a></li>
                        <li><a href="https://www.vildsvinejagt.com/index.php/kontakt/">Kontakt</a></li>
                        <li><a href="https://www.vildsvinejagt.com/index.php/faq/">FAQ</a></li>
                    </ul>
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