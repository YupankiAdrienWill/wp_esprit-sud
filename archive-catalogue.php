<?php get_header();?>

<section class='catalogue'>
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <div>       
        <h3><?php the_title(); ?></h3>
        <span>
        <!-- <?php the_post_thumbnail(); ?> -->
        </span>
        <span><?php the_content();?></span>
        <a href="<?php the_permalink(); ?>"><button>Venez découvrir nos produits</button></a>
    </div>
    <?php endwhile; endif; ?>
</section>

<?php get_footer();?>
