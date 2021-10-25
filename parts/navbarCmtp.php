<header class='cmtp'>

      <?php if($page_courrante === 'cmtp'){}else{ ?>
      <img class="bandeau__child" src="<?php bloginfo('template_directory'); ?>/assets/ico/logo_esprit_sud_dessin_alpha.png" alt="logo de l'entreprise">
      <?php } ?>
      
      <div class="bandeau__child">
            <img class="logoTxt" src="<?php {echo bloginfo('template_directory').'/assets/ico/logo_cmtp.png';} ?>" alt="logo esprit sud">
      </div>
      <div class="bandeau__child">
            <a href="https://facebook.com"><img class="logoSocialNetwork" src="<?php bloginfo('template_directory'); ?>/assets/ico/facebook.png" alt="logo facebook"></a>
            <div class="tel">06 21 00 45 10</div>
      </div>
</header>

<nav class='cmtp'>
<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>  
      <div class="burger burger--logo" >
            <a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/logo_cmtp.png" alt="logo de l'entreprise">
      <?php  ?></a>
      </div>
      <div class="menu" id="navMenu" >
            <div class="forMobile" id='forMobile'>
            <div class='current_page'><p>Page actuelle :</p>
            <span><?php 
                  echo get_the_title( get_the_ID() );
                  ?></span>
            </div>
            
            <a href="https://www.facebook.com/Esprit-Sud-by-CMTP-351693899243668/" target='_blank'>
                  <div class="tel"><p>06 21 00 45 10</p></div>
                  <span id="close" onclick="closeFunction()">&times;</span> 
                 <div> <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?></div>
                 
                    
            </div>
              
      </div>
      <div class="burger" id="burger" onclick="myFunction()"> 
            
            <div></div>
            <div></div>
            <div></div>

      </div>
      
</nav>