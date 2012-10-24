<?php get_header(); ?>
		<div id="corps" class="contact">
				<section class="gauche">
					<h2>Envoyez moi un message</h2>
					<p class="contact">Pour travailler avec moi ou avoir plus d'informations sur mes projets et travaux.</p>
					<p id="feedback"></p>
					<form method="POST" action="<?php bloginfo('stylesheet_directory');?>/formail.php">
						<fieldset>
							<label for="mail">Votre adresse mail:</label>
							<br>
							<input name="mail" id="mail" type="email">
							<br>
							<label for="message">Votre message:</label>
							<br>
							<textarea rows="10" cols="43" name="message" id="message">Tapez votre message ici et appuyez sur "Envoyer".</textarea>
							<br>
							<input name="url" id ="url" type="hidden" value="<?php bloginfo('wpurl');?>/contact-2"> 
							<input type="submit" value="Envoyer">
						</fieldset>
					</form>
					<p id="feedback"></p>
				</section>
				<section class="droite">
					<h2>Mes coordonnées</h2>
					<section id="coord">
						<p id="vcard"><a href="<?php bloginfo('stylesheet_directory');?>/fichiers/Martin-Paulus-Vcard.vcf">Télécharger ma Vcard</a></p>
						<p>mpaulus88@gmail.com</p>
					</section>
					<div id="hcard-Martin-Paulus" class="vcard">
						 <span class="fn">Martin Paulus</span><br>
						 <a class="email" href="mailto:mpaulus88@gmail.com">mpaulus88@gmail.com</a>
						 <div class="adr">
						  <div class="street-address">Rue sur les vignes 1</div>
						  <span class="locality">Oupeye</span>
						, 
						  <span class="postal-code">4680</span>

						  <span class="country-name">Belgique</span>

						 </div>
						 <div class="tel">0498 60 43 83</div>
					</div>
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="http://facebook.us5.list-manage2.com/subscribe/post?u=c0c5a29a238422e9d48159b04&amp;id=0e577943b9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<label for="mce-EMAIL">Abonnez vous à ma Newsletter</label>
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="" required>
						<div class="clear"><input type="submit" value="Abonnez vous" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</form>
					</div>
				</section>


<?php get_footer(); ?>
<script src="<?php bloginfo('stylesheet_directory');?>/script/jquery.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/script/mail.js"></script>