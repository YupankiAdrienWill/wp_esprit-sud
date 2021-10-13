<?php
/*
  Template Name: Réalisation
*/
	get_header();

?>

<div class="main__container--page">
<?php get_template_part ('parts/customHeader' )?>
</div>

<section class='page'>
<h2><?php the_title(); ?></h2><br>
    <?php the_content(); ?>
</section>

<section>
<?php get_template_part ('parts/slider-real' )?> 
</section>


<?php

	get_footer();
?>
