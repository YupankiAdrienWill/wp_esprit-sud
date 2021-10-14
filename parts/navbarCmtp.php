<header>

      <?php if($page_courrante === 'cmtp'){}else{ ?>
      <img class="bandeau__child" src="<?php bloginfo('template_directory'); ?>/assets/ico/logo_esprit_sud_dessin_alpha.png" alt="logo de l'entreprise">
      <?php } ?>
      
      <div class="bandeau__child">
            <img class="logoTxt" src="<?php if($page_courrante === 'cmtp'){echo bloginfo('template_directory').'/assets/ico/logo_cmtp.png';}else{echo bloginfo('template_directory').'/assets/ico/logo_esprit_sud_text_alpha.png';} ?>" alt="logo esprit sud">
      </div>
      <div class="bandeau__child">
            <a href="https://facebook.com"><img class="logoSocialNetwork" src="<?php bloginfo('template_directory'); ?>/assets/ico/facebook.png" alt="logo facebook"></a>
            <div class="tel">06 21 00 45 10</div>
      </div>
</header>
<nav id="nav--cmtp">
    
      <div class="burger burger--logo">
            <a href="index.php"><img src="../assets/ico/logo_esprit_sud_dessin_alpha.png" alt=""></a>
      </div>
      <div class="menu--cmtp" id="navMenu">
            <div class="forMobile">
                  <a href="https://facebook.com"><img class="logoSocialNetwork" src="../assets/ico/facebook.png" alt=""></a>
                  <div class="tel">06 21 00 45 10</div>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>    
      </div>
      <div class="burger" id="burger">
            <div></div>
            <div></div>
            <div></div>
      </div>
</nav>