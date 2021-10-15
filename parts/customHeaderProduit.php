<section class='header--produits'>
    
                <div class ='container__bandeau--produits'>
                
                    <div><img src="../assets/ico/feuille-2.svg" alt="" srcset=""></div>
                    <div class='container__bandeau--2--produits'>
                        <div class="texte--produits">
                             <?php bloginfo('name' )?><br><?php the_title(); ?>
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