<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

	
	<!--================================Footer Start===================================-->

	<footer>
		<div class="lk-container">
			<div class="lk-row">
				<div class="lk-md-5">
					<div class="footer-col">						
							<img src="http://natsdev.macraesdev.com/wp-content/uploads/2019/05/logo.png"/>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry. </p>						
					</div>
				</div>
				<div class="lk-md-2">
					<div class="footer-col">						
						<h2>Useful Links</h2>
						<ul>
							<li><a href="http://natsdev.macraesdev.com/">Home</a></li>
							<li><a href="http://natsdev.macraesdev.com/services/">Services</a></li>
							<li><a href="http://natsdev.macraesdev.com/blog/">Blog</a></li>
							<li><a href="http://natsdev.macraesdev.com/contact-us/">Contact Us</a></li>
							<li><a href="#">Sitemap</a></li>
						</ul>						
					</div>
				</div>	
				<div class="lk-md-2">
					<div class="footer-col">						
						<h2>Other Services</h2>
						<ul>
							<li><a href="#">Intermodal</a></li>
							<li><a href="#">Ocean</a></li>
							<li><a href="#">Air</a></li>
						</ul>						
					</div>
				</div>	
				<div class="lk-md-3">
					<div class="footer-col">						
						<h2>Contact Us</h2>
						<p><img src="<?php  echo get_stylesheet_directory_uri()?>/assets/images/address.png"/>Canadian Corporate Office  2525 Haines Rd. Mississauga, ON, L4Y 1Y7</p>						
						<p><img src="<?php  echo get_stylesheet_directory_uri()?>/assets/images/call.png"/>800-628-2533</p>						
						<p><img src="<?php  echo get_stylesheet_directory_uri()?>/assets/images/email.png"/>natsdispatch@natscanada.com</p>						
					</div>
				</div>		
			</div>
			<div class="lk-row">
				<div class="lk-md-12">
					<div class="copyright"><p>© North America's Transportation Service 2019.</p></div>
				</div>
			</div>
		</div>
	</footer>
	<script type='text/javascript' src="<?php  echo get_stylesheet_directory_uri()?>/assets/js/jquery-3.2.1.min.js"></script>

<script src="<?php  echo get_stylesheet_directory_uri()?>/assets/js/custom.js"></script>


<?php wp_footer(); ?>

</body>
</html>
