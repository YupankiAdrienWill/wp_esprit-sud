<div class="main__container--page">
<section class='header--page' style="background-image: url('<?php the_post_thumbnail_url() ?>');"> 
            <div class='bloginfo'><?php bloginfo('name' )?></div>
            <div class ='container__bandeau--page'>
                <div><img src="../assets/ico/feuille-2.svg" alt="" srcset=""></div>
                <div class='container__bandeau--2--page'>
                    <div class="texte--page">
                     <div class='titre'><?php the_title(); ?></div>
                    </div>
                    <div class="carré--page">
                        <span id='carré--page'>
                        <?php the_excerpt(); ?>
                        </span>
                    </div>
                </div>
            </div>
</section>
</div>