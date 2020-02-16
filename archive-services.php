<?php
/**
 * The template for displaying archive-services pages
 *
 * 
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




<section class="blog-archive">

<div class="lk-container">		

    <div class="lk-row">				

        <div class="lk-md-9">

            <div class="maincontent">						

                <div class="lk-row">
            

                
        <?php   $args = array( 'post_type' => 'services', 'posts_per_page' =>10 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="lk-md-4">
								<div class="blog-item">

															
		
							

							<figure><img src="<?php the_post_thumbnail( 'medium' ); ?></figure>

							<h2><?php  the_title(); ?></h2>

							

							<a  class="more" href=" <?php the_permalink(); ?>">Read More</a>

							</div></div>

            
         

           

    
           
    <?php endwhile; ?>

                

            </div>

        </div>

        </div>



				<div class="lk-md-3">

						<div class="sidebar">
	
							<div class="sidecol">
	
                            <?php dynamic_sidebar( 'custom-side-bar2' ); ?>

							</div>
	
						
	
						
	
					</div>
	
					
	
				</div>
	
			</div>	
	
		</section>
	

<?php
get_footer();
