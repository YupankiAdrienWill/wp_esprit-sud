<?php get_header();?>

<section class='catalogue'>

    <div>       
        <h3><?php post_type_archive_title(); ?></h3>
        <span>
        <?php the_post_thumbnail(); ?>
        </span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras risus est, feugiat quis lacinia in, blandit at sem. Ut vitae magna vel lectus blandit vestibulum at ac nunc.  </p>
        <a href="<?php the_permalink(); ?>"><button>Venez découvrir nos produits</button></a>
    </div>

</section>

<?php get_footer();?>

