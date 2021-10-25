<footer class='cmtp'>
    <section></section>
    <section></section>
    <section class="footer__container">



        <div class="footer__container--horaire">
        
        <?php
$loop = new WP_Query( array(
    'post_type' => 'horaires'
  )
);

?> <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <span class="padding"><?php the_content();?></span>
            <?php endwhile; wp_reset_query(); ?>     
        </div>

        <div class="footer__container--adresse--cmtp">
        <?php
$loop = new WP_Query( array(
    'post_type' => 'adresse'
  )
);?>
            <span class="padding"><img class="footer__logo" src="<?php bloginfo('template_directory'); ?>/assets/ico/logo_cmtp.png" alt="logo de l'entreprise">
     </span>
            
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <span class="padding"><?php the_content();?></span>
            <?php endwhile; wp_reset_query(); ?> 

           
        </div>

        <div class="footer__container--contact">
           
                <span class="padding"><a class="footer__buttonContact" id='contact--2'>Nous contacter</a></span>
               
                <span class="padding"><a href="https://www.facebook.com/Esprit-Sud-by-CMTP-351693899243668/" target='_blank'><img class="footer__logoSocialNetwork" src="<?php bloginfo('template_directory'); ?>/assets/ico/facebook.png" alt="logo facebook"></a></span>
            
        </div>

    </section>

    <section class="footer__top--bleu">
       <div><?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?></div>
    </section>
    <footer>