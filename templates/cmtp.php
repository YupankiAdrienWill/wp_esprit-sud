<?php
/*
  Template Name: CMTP
*/
	get_header();

?>

<?php get_template_part ('parts/navbarCmtp' )?> 
<div class="main__container--cmtp"> 
  
<?php get_template_part ('parts/customHeaderCmtp' )?> 

</div>

<section class="section__cmtp" id="1">
<?php the_content(); ?>
</section>
<section class="section__cmtp--1">
<?php
$loop = new WP_Query( array(
    'post_type' => 'activites_CMTP',
    'post__not_in' => array( '262' ) 
  )
);

?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class='slide_gutemberg slide_text'><?php the_content(); ?></div>
    <?php endwhile; wp_reset_query(); ?>
</section>


<section class="section__cmtp__form">

<?php
$id=262;
$post = get_post($id); //assuming $id has been initialized
setup_postdata($post);

// display the post here

the_content();

wp_reset_postdata();
?>

</section>
footer.cmtp
<?php get_template_part ('parts/footerPartCmtp' )?>
<?php

	get_footer();
?>
</div>