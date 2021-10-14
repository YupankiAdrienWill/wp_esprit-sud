<?php
/*
  Template Name: CMTP
*/
	get_header();

?>

<?php get_template_part ('parts/navbarCmtp' )?> 
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

<section class="section__cmtp" id="1">
<?php the_content(); ?>
</section>
<section>
<?php
$loop = new WP_Query( array(
    'post_type' => 'activites_CMTP',
    'post__not_in' => array( '262' ) 
  )
);

?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div><?php the_title(); ?></div>
    <div><?php the_content(); ?></div>
    <?php endwhile; wp_reset_query(); ?>
</section>


<section>

<?php
$id=262;
$post = get_post($id); //assuming $id has been initialized
setup_postdata($post);

// display the post here
the_title();
the_excerpt();
the_post_thumbnail();

wp_reset_postdata();
?>

</section>
<?php get_template_part ('parts/footerPartCmtp' )?>
<?php

	get_footer();
?>
</div>