<?php
/*
  Template Name: A-Propos
*/
	get_header();

?>

<?php get_template_part ('parts/customHeader' )?>
<section class='page'>
<h1><?php the_title(); ?></h1><br>
    <?php the_content(); ?>
</section>
<section class='page--2'>
    <?php 
    $page = get_page_by_title('Notre Showroom'); 
    $content = apply_filters('the_content', $page->post_excerpt); 
    $title = apply_filters('the_title', $page->post_title); 
    $link = get_page_link( $page); 
    $thumb = get_the_post_thumbnail( $page, 'post-thumbnail' );
    ?>
<div  id='showroom'></div>
    <h2 ><?php echo $title; ?></h2>
    <?php echo $content; ?>
  
</section >
<?php get_template_part ('parts/slider-showroom' )?>
<?php

	get_footer();
?>