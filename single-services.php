<?php
/*
 * Template Name: Services
 * description: >-
  Page template with sidebar
 */

get_header(); ?>


<section id="innerBanner">

<?php 
if ( has_post_thumbnail() ) {

 ?>

<?php echo the_post_thumbnail(); ?>
<?php }  ?>
<div class="InnerBannerContent">

<div class="lk-container">

    <h1 class="title"><?php wp_title(''); ?></h1>

</div>			

</div>	

</section>




    <section >

<div class="lk-container">		

    <div class="lk-row">				

        <div class="lk-md-9">

            <div class="maincontent">	
                
            

                
            <?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();?>
				


            <h2><?php the_title();  ?> </h2>
            <p> <?php the_content();  ?></P>

           

        
    <?php endwhile; ?>

                

            </div>

        </div>

				<div class="lk-md-3">

						<div class="sidebar">
	
							

    					
		<?php dynamic_sidebar( 'custom-side-bar2' ); ?>
							
	
						
	
						
	
					</div>
	
					
	
				</div>
	
			</div>	
	
		</section>
	
	

		<?php
		get_footer();
		