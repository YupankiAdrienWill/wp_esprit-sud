<div class="main__container--cmtp">
<section class='header--cmtp' style="background-image: url('<?php the_post_thumbnail_url() ?>');"> 
<div class='bloginfo'><?php bloginfo('name' )?></div>
            <div class ='container__bandeau--cmtp'>
                <div><img src="../assets/ico/feuille-2.svg" alt="" srcset=""></div>
                <div class='container__bandeau--2--cmtp'>
                    <div class="texte--cmtp">
                        <?php the_title(); ?>
                    </div>
                    <div class="carré--cmtp">
                        <span id='carré--cmtp'>
                        <?php the_excerpt(); ?>
                        </span>
                    </div>
                </div>
            </div>
</section>
</div>