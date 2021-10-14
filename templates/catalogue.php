<?php
/*
  Template Name: Catalogue
*/
	get_header();

?>
<?php get_template_part ('parts/navbar' )?>
<div class="main__container--page">
<?php get_template_part ('parts/customHeader' )?>
</div>

<section class='page'>
<h1><?php the_title(); ?></h1><br>
    <?php the_content(); ?>
</section>

<section class='catalogue'>

<?php
$loop = new WP_Query( array(
    'post_type' => 'catalogue'
  )
);

?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div>       
        <h3><?php the_title(); ?></h3>
        <span>
        <?php the_post_thumbnail(); ?>
        </span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras risus est, feugiat quis lacinia in, blandit at sem. Ut vitae magna vel lectus blandit vestibulum at ac nunc.  </p>
        <a href="<?php the_permalink(); ?>"><button>Venez découvrir nos produits</button></a>
    </div>

<?php endwhile; wp_reset_query(); ?>
</section>

<?php

	get_footer();
?>