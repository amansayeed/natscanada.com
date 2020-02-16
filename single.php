
	<?php
	/**
	 * The template for displaying all single posts
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	 *
	 * @package WordPress
	 * @subpackage Twenty_Seventeen
	 * @since 1.0
	 * @version 1.0
	 */
	
	get_header(); ?>

	

	<!--================================Main Banner Start===================================-->

	<section id="innerBanner">

		<img src="<?php  echo get_stylesheet_directory_uri()?>/assets/images/innerbanner.jpg"/>

		<div class="InnerBannerContent">

			<div class="lk-container">

				<h1 class="title"><?php wp_title(''); ?></h1>

			</div>			

		</div>	

	</section>

	<!--================================Main Banner End===================================-->





		

	<!--================================About Nats Start===================================-->

	<section >

		<div class="lk-container">		

			<div class="lk-row">				

				<div class="lk-md-9">

					<div class="maincontent">	
						
						


							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();?>
				


								<?php  /*the_title();*/ ?>
								<?php the_content(); ?>
								<?php/* the_post_thumbnail( 'thumbnail' );*/ ?>
								<?php/* echo get_the_date(); */ ?>
				
							
							
				
						<!-- <h2><?php  /*the_title();*/ ?> </h2> -->

						<p><?php the_content(); ?></p>

						
					</div>

					<?php	endwhile; // End of the loop.
							?>

				</div>

				<div class="lk-md-3">

						<div class="sidebar">
	
							<div class="sidecol">
	
							<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
		<?php dynamic_sidebar( 'custom-side-bar' ); ?>
	<?php endif; ?>
	
							</div>
	
						
	
						
	
					</div>
	
					
	
				</div>
	
			</div>	
	
		</section>
	
	

		<?php
		get_footer();
		