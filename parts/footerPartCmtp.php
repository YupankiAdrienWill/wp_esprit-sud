<footer class='cmtp'>
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
            <span class="padding"><img class="footer__logo" src="<?php bloginfo('template_directory'); ?>/assets/ico/logo_cmtp.png" alt="logo de l'entreprise">
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
            <?php if($page_courrante === 'cmtp'){ ?>
                <iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=5.058412849903108%2C47.324190564699705%2C5.062892138957977%2C47.325775953382&amp;layer=mapnik&amp;marker=47.32498326498847%2C5.060652494430542" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=47.32498&amp;mlon=5.06065#map=19/47.32498/5.06065">Afficher une carte plus grande</a></small>
            <?php }else{ ?>
                <span class="padding"><a class="footer__buttonContact" id='contact--2'<?php if($page_courrante === 'cmtp'){echo ' href="#formulaireCmtp" id="contact--0" ';}else{echo ' href="about.php#contact" ';} ?>>Nous contacter</a></span>
                <span class="padding--spec">06.21.00.45.10</span>
                <span class="padding"><a href="https://facebook.com"><img class="footer__logoSocialNetwork" src="../assets/ico/facebook.png" alt=""></a></span>
            <?php } ?>
        </div>

    </section>

    <section class="footer__top--bleu">
       <div><?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?></div>
    </section>
    <footer>