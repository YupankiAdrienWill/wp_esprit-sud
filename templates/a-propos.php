<?php
/*
  Template Name: A-Propos
*/
	get_header();

?>
<?php get_template_part ('parts/navbar' )?>
<?php get_template_part ('parts/customHeader' )?>
<section class='page--3'>
    <?php the_content(); ?>
    <span id='showroom'></span>
</section>

<section class='page--2'>
    <?php 
    $page = get_page_by_title('Découvrez notre showroom et venez nous rendre visite !'); 
    $excerpt = apply_filters('the_content', $page->post_excerpt); 
    $title = apply_filters('the_title', $page->post_title); 
    $content = apply_filters('the_content', $page->post_content); 
    $link = get_page_link( $page); 
    $thumb = get_the_post_thumbnail( $page, 'post-thumbnail' );
    ?>
<div >
    <?php echo $content; ?>
    </div>
 </section >

<?php/*  get_template_part ('parts/slider-showroom' ) */?>
<?php get_template_part ('parts/footerPart' )?>
<?php

	get_footer();
?>