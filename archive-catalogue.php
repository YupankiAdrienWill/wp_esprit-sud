<?php get_header();?>
<div class="main__container--page">
    <section class='header--page'> 
            <div><h1>ESPRIT SUD</h1></div>
            <div class ='container__bandeau--page'>
                <div><img src="../assets/ico/feuille-2.svg" alt="" srcset=""></div>
                <div class='container__bandeau--2--page'>
                    <div class="texte--page">
                        <h2>Notre </h2>
                        <h2>Catalogue</h2>
                    </div>
                    <div class="carré--page">
                        <span id='carré--page'>
                            <p>Bienvenue dans l’univers aquatique et décoratif d’Esprit sud by CMTP <br> <br></p>
                            <p>Venez découvrir notre large gamme de produits et surprenez-vous à rêver de votre futur piscine à l’eau pure et crustalline arborée d’arbres exotiques et de sculptures</p>
                        </span>
                    </div>
                </div>
            </div>
    </section>
</div>
<section class='page'>
    <h2><?php post_type_archive_title(); ?></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras risus est, feugiat quis lacinia in, blandit at sem. Ut vitae magna vel lectus blandit vestibulum at ac nunc. Vivamus rhoncus justo ac sapien porttitor, ut cursus elit pellentesque. Phasellus viverra porta mauris, non pretium neque feugiat quis.<p>
</section>

<section class='catalogue'>
    <div> 
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>   
        <h3><?php the_title(); ?></h3>
        <span>
            <?php the_post_thumbnail(); ?>
        </span>
        <?php the_content(); ?>
        <a href="<?php the_permalink(); ?>"><button>Venez découvrir nos produits</button></a>
    </div>
    <div>       
    <?php endwhile; endif; ?>
    



</section>
<?php get_footer();?>