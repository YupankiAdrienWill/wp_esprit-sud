<?php
/*
  Template Name: CMTP
*/
	get_header();

?>

<div class="main__container--cmtp">
<section class='header--cmtp' style="background-image: url('<?php the_post_thumbnail_url() ?>');"> 
            
            <div class ='container__bandeau--cmtp'>
                <div><img src="../assets/ico/feuille-2.svg" alt="" srcset=""></div>
                <div class='container__bandeau--2--cmtp'>
                    <div class="texte--cmtp">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="carré--cmtp">
                        <span id='carré--cmtp'>
                        <H2><?php the_excerpt(); ?></H2>
                        </span>
                    </div>
                </div>
            </div>
</section>
</div>
<?php the_title(); ?>
<section class="section__cmtp" id="1">
<?php the_content(); ?>
</section>


<?php

	get_footer();
?>