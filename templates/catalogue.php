<?php
/*
  Template Name: Catalogue
*/
	get_header();

?>

<div class="main__container--page">
    <section class='header--page' style="background-image: url('<?php the_post_thumbnail_url() ?>');"> 
            <div><h1><?php bloginfo('name' )?></h1></div>
            <div class ='container__bandeau--page'>
                <div><img src="../assets/ico/feuille-2.svg" alt="" srcset=""></div>
                <div class='container__bandeau--2--page'>
                    <div class="texte--page">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="carré--page">
                        <span id='carré--page'>
                        <H1><?php the_excerpt(); ?></H1>
                        </span>
                    </div>
                </div>
            </div>
    </section>
</div>

<section class='page'>
<h2><?php the_title(); ?></h2><br>
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