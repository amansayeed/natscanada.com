<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!--================================Main Banner Start===================================-->

<section id="banner">

<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner.jpg"/>

<div class="banner-content">

	<h1 class="title">A World Class Supply Chain<br/> Management Provider</h1>

	<p class="sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br/>has been the industry's standard dummy text ever since the.</p>

</div>	

</section>

<!--================================Main Banner End===================================-->



<!--================================Home Page Form Start===================================-->

<div class="lk-container">

<div class="lk-row">

	<div id="HomeForm">

		<div class="lk-md-3">

			<div class="formleft">

				<p>Let's Get<br/>  Connected</p>

			</div>

		</div>

		<div class="lk-md-9">
		    <?php echo do_shortcode('[contact-form-7 id="128" title="Homepage Contact"]'); ?>
		</div>

	</div>

</div>

</div>

<!--================================Home Page Form End===================================-->



<!--================================Home Services Start===================================-->

<section id="services">

<div class="lk-container">

	<div class="section-head">

		<h1 class="title">North America’s Transportation Service</h1>

		<p class="sub-title">The NATS team was founded in 1991 by Dan Zita and Henry Piworowicz. Over the years we have built a reputable client base that has allowed us to grow and gain an in-depth understanding of what constitutes “value” to our customers, all the while allowing our customers to grow alongside us into massive success stories.</p>

	</div>	
	
	

	<div class="lk-row">
	    
<?php	   // WP_Query arguments
$args = array (
	'post_type'              => array( 'services' ),
	'post_status'            => array( 'publish' ),
	'order'                  => 'ASC',
	'posts_per_page'        => '3'
);

// The Query
$services = new WP_Query( $args );

// The Loop
if ( $services->have_posts() ) {
	while ( $services->have_posts() ) {
		$services->the_post(); ?>
	    <div class="lk-md-4">

			<div class="service-item">

				<figure><img src="<?php echo get_post_meta($post->ID, 'home-icon', true); ?>" alt="<?php the_title(); ?>"></figure>

				<h2><?php the_title(); ?></h2>

				<p><?php the_excerpt(); ?> </p>

				<a  class="more" href="<?php the_permalink(); ?>">Read More</a>

			</div>

		</div>
<?php 	}
} 

// Restore original Post Data
wp_reset_postdata();
?>
	</div>

</div>	

</section>

<!--================================Home Services End===================================-->	

<!--================================About Nats Start===================================-->

<section id="about" class="brownbg">

<div class="lk-container">

	

	<div class="lk-row">

		<div class="lk-md-6">

			<figure><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about.png"></figure>

		</div>

		<div class="lk-md-6">

			<div class="rightcontent">			

			<?php 

	if( get_option( 'page_on_front' ) ) {?>
 <?php echo apply_filters( 'the_content', get_post( get_option( 'page_on_front' ) )->post_content );
}?>			

				<!-- <h2>About Nats Canada</h2>

				<p>The NATS team was founded in 1991 by Dan Zita and Henry Piworowicz. Over the years we have built a reputable client base that has allowed us to grow and gain an in-depth understanding of what constitutes “value” to our customers, all the while allowing our customers to grow alongside us into massive success stories. Through this experience, we have built a large network of hundreds of carriers with a selection of equipment for any and every type of freight to better assist both our current and future customers with all of their transportation needs.</p>

				<p>As a leading provider of (3PL) in the Flatbed, Dry Van, Ocean / Air Freight, we take pride in the delivery of your cargo to any market around the world. We specialize in combining your LTL flatbed cargo by matching it with the growing number of NATS suppliers/customers to maximize equipment space in order to minimize your cost.</p>

				<a  class="more" href="#">Contact Us</a> -->

			</div>

		</div>

		

	</div>

</div>	

</section>

<!--================================Abouts End===================================-->	

<!--================================About Nats Start===================================-->

<section id="about" class="white">

<div class="lk-container">

	

	<div class="lk-row">

		

		<div class="lk-md-6">

			<div class="rightcontent">		
			
					

				<h2>Why 3PL</h2>

				<p>By partnering with NATS, you gain the ability to leverage a large transportation network and receive access to an unmatched variety of equipment types and transit laneways, all while keeping costs at a minimum. This will help your company to focus less on the challenges of transportation and focus more on optimizing your production and bottom line.</p>

				<h2>Specialty Services</h2>

				<p>When your shipment cannot fit into a traditional freight trailer or perhaps it’s being delivered to a construction site and needs a crane for unloading – that’s when you can count on NATS flatbed and heavy haul services. We have access to every type of flatbed, double drop decks, over-dimensional, special permits & escorts, low-boys, and roll-tites.</p>
				
				
			</div>

		</div>

		<div class="lk-md-6">

			<figure><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/tpl.png"></figure>

		</div>

		

	</div>

</div>	

</section>

<!--================================Abouts End===================================-->







<!--================================Home Blog Start===================================-->

<section id="Blog" class="graybg">

<div class="lk-container">

	<div class="section-head">


		<h1 class="title">Latest From Blog</h1>

		<p class="sub-title">The NATS team was founded in 1991 by Dan Zita and Henry Piworowicz. Over the years we have built a reputable client base that has allowed us to grow and gain an in-depth understanding of what constitutes “value” to our customers, all the while allowing our customers to grow alongside us into massive success stories.</p>

	</div>	

	
	
						

	

<?php
    $query = new WP_Query( array ( 'orderby' => 'date', 'order' => 'DESC' ) );

    while ( $query->have_posts() ) :
	$query->the_post();?>
	



	 <div class="lk-row">

		<div class="lk-md-4">

			<div class="blog-item">

				<figure><img src="<?php the_post_thumbnail( 'medium' ) ?> </figure>

				<h2><?php echo  get_the_title(); ?></h2>

				<p><?php echo  the_content(); ?> </p>

				<a  class="more" href="<?php the_permalink(); ?>">Read More</a>

			</div>

		</div>

<?php	
endwhile;
?>


	</div>

</div>	

</section>

<!--================================Home Blog End===================================-->	

	<!--================================Home Blog End===================================-->	



	
<?php
get_footer();



