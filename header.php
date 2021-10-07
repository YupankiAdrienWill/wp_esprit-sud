<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>
    <img class="bandeau__child" src="../assets/ico/logo_esprit_sud_dessin_alpha.png" alt="logo de l'entreprise">
   
      
      <div class="bandeau__child">
            <img class="logoTxt" src="<?php if($page_courrante === 'cmtp'){echo '../assets/ico/logo_cmtp.png';}else{echo '../assets/ico/logo_esprit_sud_text_alpha.png';} ?>" alt="">
      </div>
      <div class="bandeau__child">
            <a href="https://facebook.com"><img class="logoSocialNetwork" src="../assets/ico/facebook.png" alt=""></a>
            <div class="tel">06 21 00 45 10</div>
      </div>
    header