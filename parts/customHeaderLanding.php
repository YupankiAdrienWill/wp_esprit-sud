<div class="main__container--landing">
<section class='header--landing' style="background-image: url('<?php the_post_thumbnail_url() ?>');"> 
            <div class='bloginfo'><?php bloginfo('name' )?></div>
            <div class ='container__bandeau--landing'>
                <div><img src="../assets/ico/feuille-2.svg" alt="" srcset=""></div>
                <div class='container__bandeau--2--landing'>
                    <div class="texte--landing">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="carré--landing">
                        <span id='carré--landing'>
                        <?php the_excerpt(); ?>
                        </span>
                    </div>
                </div>
            </div>
    </section>
</div>