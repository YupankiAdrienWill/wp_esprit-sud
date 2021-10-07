<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<?php wp_body_open(); ?>

<header>

      <?php if($page_courrante === 'cmtp'){}else{ ?>
      <img class="bandeau__child" src="../assets/ico/logo_esprit_sud_dessin_alpha.png" alt="logo de l'entreprise">
      <?php } ?>
      
      <div class="bandeau__child">
            <img class="logoTxt" src="<?php if($page_courrante === 'cmtp'){echo '../assets/ico/logo_cmtp.png';}else{echo '../assets/ico/logo_esprit_sud_text_alpha.png';} ?>" alt="">
      </div>
      <div class="bandeau__child">
            <a href="https://facebook.com"><img class="logoSocialNetwork" src="../assets/ico/facebook.png" alt=""></a>
            <div class="tel">06 21 00 45 10</div>
      </div>
</header>

<?php get_template_part ('parts/navbar' )?>

<script>
      document.getElementById('burger').addEventListener('click',functionBurger);
      document.getElementById('navMenu').addEventListener('click',functionBurger);
      function functionBurger() {
            document.getElementById('navMenu').classList.toggle("show");
            document.getElementById('nav').classList.toggle('reset');
      
</script>