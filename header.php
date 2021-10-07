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

<nav id="nav">
      <div class="burger burger--logo">
            <a href="index.php"><img src="../assets/ico/logo_esprit_sud_dessin_alpha.png" alt=""></a>
      </div>
      <div class="menu" id="navMenu">
            <div class="forMobile">
                  <a href="https://facebook.com"><img class="logoSocialNetwork" src="../assets/ico/facebook.png" alt=""></a>
                  <div class="tel">06 21 00 45 10</div>
            </div>
            <div>
                  <a href="index.php" class="anav <?php if($page_courrante === 'index'){echo 'underline';} ?>">Accueil</a>
            </div>
            <div id="dropdown_catalog">
                  <a href="catalogue.php" class="anav <?php if($page_courrante === 'catalogue'){echo 'underline';} ?>">Catalogue</a>
                  <div class="dropdown_content" id="dropdown_catalog___content">
                        <a href="list-produit.php">Plantes méditerranéennes</a>
                        <a href="list-produit.php">Galets décoratifs</a>
                        <a href="list-produit.php">Statues résines</a>
                        <a href="list-produit.php">Produits piscine</a>
                        <a href="list-produit.php">Piscine béton</a>
                  </div>
            </div>
            <div>
                  <a href="real.php" class="anav <?php if($page_courrante === 'real'){echo 'underline';} ?>">Réalisation</a>
            </div>
            <div id="dropdown_cmtp">
                  <a class="anav <?php if($page_courrante === 'cmtp'){echo 'underline';} ?>" href="cmtp.php">CMTP</a>
                  <div class="dropdown_content" id="dropdown_cmtp___content">
                        <a href="cmtp.php#1">Terrassement</a>
                        <a href="cmtp.php#2">Transport</a>
                        <a href="cmtp.php#3">Travaux Publics</a>
                        <a href="cmtp.php#4">Assainissement</a>
                        <a href="cmtp.php?#5">Maçonnerie</a>
                  </div>
            </div>
            <div>
                  <a href="about.php" class="anav <?php if($page_courrante === 'about'){echo 'underline';} ?>">Qui sommes nous?</a>
            </div>
            <div>
            <a class="anav buttonContact"<?php if($page_courrante === 'cmtp'){echo ' href="#formulaireCmtp" id="contact--0" ';}else{echo ' href="about.php#contact" ';} ?>>Nous contacter</a>
            </div>
      </div>
      <div class="burger" id="burger">
            <div></div>
            <div></div>
            <div></div>
      </div>
</nav>

<script>
      document.getElementById('burger').addEventListener('click',functionBurger);
      document.getElementById('navMenu').addEventListener('click',functionBurger);
      function functionBurger() {
            document.getElementById('navMenu').classList.toggle("show");
            document.getElementById('nav').classList.toggle('reset');
      }
</script>