<?php
/*
  Template Name: Légales
*/
	get_header();

?>
<?php get_template_part ('parts/navbar' )?>


<section class='page'>
    <?php the_content(); ?>
</section>

<?php get_template_part ('parts/footerPart' )?>

<?php

	get_footer();
?>