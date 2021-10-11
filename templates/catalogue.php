<?php
/*
  Template Name: Catalogue
*/
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
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
<?php the_title(); ?>
    <?php the_content(); ?>
</section>

<section class='catalogue'>
    <div>       
        <h3>Nos Plantes Méditerranéennes</h3>
        <span>
            <img src="../assets/img/lavande.svg" alt="" srcset="">
        </span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras risus est, feugiat quis lacinia in, blandit at sem. Ut vitae magna vel lectus blandit vestibulum at ac nunc.  </p>
        <a href="../pages/list-produit.php"><button>Venez découvrir nos produits</button></a>
    </div>
</section>

<?php
	endwhile; endif;
	get_footer();
?>