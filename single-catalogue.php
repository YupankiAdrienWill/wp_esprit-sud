<?php get_header();?>
<div class="main__container--produits">
<section class='header--produits'> 
<div class="produits-separateur"></div>
            <div class ='container__bandeau--produits'>
                <div><img src="../assets/ico/feuille-2.svg" alt="" srcset=""></div>
                <div class='container__bandeau--2--produits'>
                    <div class="texte--produits">
                        <h2>Nos </h2>
                        <h2> <?php the_title(); ?></h2>
                    </div>
                    <div class="carré--produits">
                        <span id='carré--produits'>
                        <?php the_excerpt(); ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="produits-separateur"></div>
    </section>
</div>
<?php the_content();?>

<?php get_footer();?>