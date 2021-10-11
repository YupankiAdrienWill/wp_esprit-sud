<?php get_header();?>

<div class="main__container--page">
    <section class='header--page'> 
    <?php the_post_thumbnail();?>
            <div><h1><?php get_option('blogname');?></h1></div>
            <div class ='container__bandeau--page'>
                <div></div>
                <div class='container__bandeau--2--page'>
                    <div class="texte--page">
                        <h2><?php the_title();?></h2>
                    </div>
                    <div class="carré--page">
                        <span id='carré--page'>
                            <?php the_excerpt();?>
                        </span>
                    </div>
                </div>
            </div>
    </section>

    <section class='about'>
            <div>
              <?php the_content();?>

            </div>
 
    </section>
    <div  class='feuille'>
        <img src="../assets/ico/feuille.svg" alt="" srcset="">
        <img src="../assets/ico/feuille.svg" alt="" srcset="">
    </div>
    <section class='about__page'>
        <div><h3>Notre Showroom</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras risus est, feugiat quis lacinia in, blandit at sem. Ut vitae magna vel lectus blandit vestibulum at ac nunc. Vivamus rhoncus justo ac sapien porttitor, ut cursus elit pellentesque. Phasellus viverra porta mauris, non pretium neque feugiat quis. Donec auctor nisi quis lectus congue, at vulputate mi accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris facilisis bibendum finibus.</p> </div>
        <div><?php include('../includes/slideshow.php')?></div>
    </section>
    <div  class='feuille--2'>
        <img src="../assets/ico/feuille.svg" alt="" srcset="">
    </div>
    <section class='about__page about__page__form' id="contact">
            <h3>Nous contacter</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras risus est, feugiat quis lacinia in, blandit at sem. Ut vitae magna vel lectus blandit vestibulum at ac nunc. Vivamus rhoncus justo ac sapien porttitor, ut cursus elit pellentesque. Phasellus viverra porta mauris, non pretium neque feugiat quis. Donec auctor nisi quis lectus congue, at vulputate mi accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris facilisis bibendum finibus.</p>
            <form action="" method="post">
                <h4>Contact</h4>
                <div class="flex">
                    <div class="flex__child flexRight">
                        <div class="flex__child__child flexRight__p">
                            Une question? Un devis? Plus aucune hésitation, laissez-nous votre message et nous aurons toujours une solution adapté à vos besoins.
                        </div>
                        <div class="flex__child__child">
                            <div class=" flexRight__right">
                                <input type="text" name="nom" placeholder="votre nom" id=""><br>
                                <input type="email" name="mail" placeholder="votre e-mail" id=""><br>
                                <input type="tel" name="tel" placeholder="telephone" id=""><br>
                                <input type="text" name="object" placeholder="objet" id="">
                            </div>
                            <div class=" flexRight__left">
                                <textarea name="message" placeholder="votre message" id=""></textarea><br>
                                <input type="submit" value="envoyer" id="submit">
                            </div>
                        </div>
                    </div>
                    <div class="flex__child flexMap">
                        <iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=5.058412849903108%2C47.324190564699705%2C5.062892138957977%2C47.325775953382&amp;layer=mapnik&amp;marker=47.32498326498847%2C5.060652494430542" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=47.32498&amp;mlon=5.06065#map=19/47.32498/5.06065">Afficher une carte plus grande</a></small>
                    </div>
                </div>
            </form>
    </section>
</div>

<?php get_footer();?>