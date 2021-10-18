<?php
/*
  Template Name: Réalisation
*/
	get_header();

?>
<?php get_template_part ('parts/navbar' )?>
<div class="main__container--page">
<?php get_template_part ('parts/customHeader' )?>
</div>

<section class='page'>
<h2><?php the_title(); ?></h2><br>
    <?php the_content(); ?>
</section>

<section class='page-real'>
  <div><?php
echo do_shortcode('[smartslider3 slider="6"]');
?></div>

<?php/*  get_template_part */ /* ('parts/slider-real' ) */?> 
</section>

<?php get_template_part ('parts/footerPart' )?>
<?php

	get_footer();
?>
