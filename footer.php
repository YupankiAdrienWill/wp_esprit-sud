<?php wp_footer(); ?>
footer
<footer>
    <section></section>
    <section></section>
    
    <section class="footer__container">



        <div class="footer__container--horaire">
        <div><img class='footer__feuille' src="../assets/ico/feuille.svg" alt="" srcset=""></div>
            <span class="padding">HORAIRES D’OUVERTURE</span>
            <span class="padding">Lundi / Mardi / Jeudi /Vendredi</span>
            <span class="padding">10h - 12h / 14 - 18h</span>
            <span class="padding">Mercredi / Samedi</span>
            <span class="padding">9h  - 12h</span>
        </div>

        <div class="footer__container--adresse">
            <span class="padding"><img class="footer__logo" src="<?php if($page_courrante === 'cmtp'){echo '../assets/ico/logo_cmtp.png';}else{echo '../assets/ico/logo_esprit_sud_dessin_alpha.png';} ?>" alt="logo de l'entreprise"></span>
            <?php if($page_courrante === 'cmtp'){ ?>
                <span class="padding">AU SERVICE DES PARTICULIERS, DES PROFESSIONNELS & DES COLLECTIVITÉS DEPUIS 1990</span>
            <?php }else{ ?>
                <span class="padding">ESPRIT SUD BY CMTP</span>
                <span class="padding">D 1079 - 01310 Polliat </span>
                <span class="padding">espritsud.cmtp@gmail.com</span>
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
        <span>Mentions légales</span>
        <span>Politique de confidentialité</span>
        <span><a href="https://yupanki.fr">Site réalisé par : YUPANKI</a></span>
    </sec
</body>
</html>