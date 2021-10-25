<header class='header'>

      <a href="<?php echo home_url( '/' ); ?>">
      <img class="bandeau__child" 
      
      src="<?php bloginfo('template_directory'); ?>/assets/ico/logo_esprit_sud_dessin_alpha.png" alt="logo de l'entreprise"></a>
    
      
      <div class="bandeau__child">
            <img class="logoTxt" src="<?php if($page_courrante === 'cmtp'){echo bloginfo('template_directory').'/assets/ico/logo_cmtp.png';}else{echo bloginfo('template_directory').'/assets/ico/logo_esprit_sud_text_alpha.png';} ?>" alt="logo esprit sud">
      </div>
      <div class="bandeau__child">
            <a href="https://www.facebook.com/Esprit-Sud-by-CMTP-351693899243668/" target='_blank'><img class="logoSocialNetwork" src="<?php bloginfo('template_directory'); ?>/assets/ico/facebook.png" alt="logo facebook"></a>
            <div class="tel"><p>06 21 00 45 10</p></div>
      </div>
</header>

<nav id="nav">
<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>  
      <div class="burger burger--logo" >
            <a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/logo_esprit_sud_dessin_alpha.png" alt="logo de l'entreprise">
      <?php  ?></a>
      </div>
      <div class="menu" id="navMenu" >
            <div class="forMobile" id='forMobile'>
            <div class='current_page'><p>Page actuelle :</p>
            <span><?php 
                  echo get_the_title( get_the_ID() );
                  ?></span>
            </div>
            
                  <a href="https://facebook.com"><img class="logoSocialNetwork" src="<?php bloginfo('template_directory'); ?>/assets/ico/facebook.png" alt="logo facebook"></a>
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

