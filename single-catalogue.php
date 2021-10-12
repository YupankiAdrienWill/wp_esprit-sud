<?php get_header();?>
<div class="main__container--produits">
<section class='header--produits'>
            <div class ='container__bandeau--produits'>
                <div><img src="../assets/ico/feuille-2.svg" alt="" srcset=""></div>
                <div class='container__bandeau--2--produits'>
                    <div class="texte--produits">
                        <h2> Esprit Sud by CMTP,</h2>
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
<section class='produits'>
<?php the_content();?>
</section>


<?php get_footer();?>