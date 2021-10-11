<?php get_header();?>

<section class='catalogue'>
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <div>       
        <h3><?php the_title(); ?></h3>
        <span>
        <?php the_post_thumbnail(); ?>
        </span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras risus est, feugiat quis lacinia in, blandit at sem. Ut vitae magna vel lectus blandit vestibulum at ac nunc.  </p>
        <a href="<?php the_permalink(); ?>"><button>Venez découvrir nos produits</button></a>
    </div>
    <?php endwhile; endif; ?>
</section>

<?php get_footer();?>

