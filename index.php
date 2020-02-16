<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


	

	<!--================================Main Banner Start===================================-->

	<section id="innerBanner">

		<img src=" <?php  echo get_stylesheet_directory_uri()?>/assets/images/innerbanner.jpg"/>

		<div class="InnerBannerContent">

			<div class="lk-container">

				<h1 class="title"><?php wp_title(''); ?></h1>

			</div>			

		</div>	

	</section>

	<!--================================Main Banner End===================================-->





		

	<!--================================About Nats Start===================================-->\

	

	<section class="blog-archive">

		<div class="lk-container">		

			<div class="lk-row">				

				<div class="lk-md-9">

					<div class="maincontent">						

						<div class="lk-row">				

													
							<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					
			?>						<div class="lk-md-4">
								<div class="blog-item">

															
		
							

							<figure><?php the_post_thumbnail( 'medium' ); ?></figure>

							<h2><?php  the_title(); ?></h2>

							<p><?php the_content(); ?> </p>

							<a  class="more" href=" <?php the_permalink(); ?>">Read More</a>

							</div></div>	
							<?php	endwhile; // End of the loop.
							?>
							<?php	endif;	?>

							

							

						</div>	

					</div>	

				</div>

				<div class="lk-md-3">

					<div class="sidebar">

						

						<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
<?php endif; ?>

					

					

					

				</div>

				

			</div>

		</div>	

	</section>

	<!--================================Abouts End===================================-->

	

	

	

	

	


	

	




<?php
get_footer();
