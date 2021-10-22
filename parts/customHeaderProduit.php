<section class='header--produits'>
    
                <div class ='container__bandeau--produits'>
                                    <div class='container__bandeau--2--produits'>
                        <div class="texte--produits">
                            <div id='bloginfo_produit'><?php bloginfo('name' )?></div>
                             <div class='titre'><h1><?php the_title(); ?></h1></div>
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