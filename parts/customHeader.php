<div class="main__container--page">
<section class='header--page' style="background-image: url('<?php the_post_thumbnail_url() ?>');"> 
            <div><h1><?php bloginfo('name' )?></h1></div>
            <div class ='container__bandeau--page'>
                <div><img src="../assets/ico/feuille-2.svg" alt="" srcset=""></div>
                <div class='container__bandeau--2--page'>
                    <div class="texte--page">
                        <h1> Esprit Sud by CMTP,</h1>
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="carré--page">
                        <span id='carré--page'>
                        <H2><?php the_excerpt(); ?></H2>
                        </span>
                    </div>
                </div>
            </div>
</section>
</div>