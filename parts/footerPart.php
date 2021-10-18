<footer>
    <section></section>
    <section></section>
    
    <section class="footer__container">



        <div class="footer__container--horaire">
        <div><img class='footer__feuille' src="../assets/ico/feuille.svg" alt="" srcset=""></div>
        <?php
$loop = new WP_Query( array(
    'post_type' => 'horaires'
  )
);

?> <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <span class="padding"><?php the_content();?></span>
            <?php endwhile; wp_reset_query(); ?>     
        </div>

        <div class="footer__container--adresse">
        <?php
$loop = new WP_Query( array(
    'post_type' => 'adresse'
  )
);?>
            <span class="padding"><img class="footer__logo" src="<?php bloginfo('template_directory'); ?>/assets/ico/logo_esprit_sud_dessin_alpha.png" alt="logo de l'entreprise">
      <?php  ?></span>
            <?php if($page_courrante === 'cmtp'){ ?>
                <span class="padding">AU SERVICE DES PARTICULIERS, DES PROFESSIONNELS & DES COLLECTIVITÉS DEPUIS 1990</span>
            <?php }else{ ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <span class="padding"><?php the_content();?></span>
            <?php endwhile; wp_reset_query(); ?> 

            <?php } ?>
        </div>

        <div class="footer__container--contact">
       
                <span class="padding"><a class="footer__buttonContact" id='contact--2' href= "<?php bloginfo('wpurl') ?>/contact">Nous contacter</a></span>
                <span class="padding--spec">06.21.00.45.10</span>
                <span class="padding"><a href="https://facebook.com"><img class="footer__logoSocialNetwork" src="../assets/ico/facebook.png" alt=""></a></span>
         
        </div>

    </section>

    <section class="footer__top--bleu">
       <div><?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?></div>
       
        
            </section>