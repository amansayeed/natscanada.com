
<?php
/*
 * Template Name:contact Us page 
 * description: >-
  Page template with sidebar
 */

get_header(); ?>



<section id="innerBanner">

<?php 
if ( has_post_thumbnail() ) {

 ?>

<img src="<?php echo the_post_thumbnail(); ?>
<?php }  ?>
<div class="InnerBannerContent">

<div class="lk-container">

    <h1 class="title"><?php wp_title(''); ?></h1>

</div>			

</div>	

</section>

<!--================================Main Banner End===================================-->







<!--================================About Nats Start===================================-->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>

<?php endif; ?>

<!--================================Abouts End===================================-->






<?php
get_footer();

