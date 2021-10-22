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
    <?php the_content(); ?>
</section>

<section class='catalogue'>

<?php
$loop = new WP_Query( array(
    'post_type' => 'catalogue','order'=>'ASC'
    
  )
);

?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div>       
        <h3><?php the_title(); ?></h3>
        <span>
        <?php the_post_thumbnail(); ?>
        </span>
        <span><?php the_excerpt(); ?></span>
        <a href="<?php the_permalink(); ?>"><button class='btn-front'>Je découvre</button></a>
    </div>

<?php endwhile; wp_reset_query(); ?>
</section>
<?php get_template_part ('parts/footerPart' )?>
<?php

	get_footer();
?>