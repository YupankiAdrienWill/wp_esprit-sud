<?php get_header();?>
<?php get_template_part ('parts/navbar' )?>

<?php get_template_part ('parts/customHeaderLanding')?>

<section class='front_landing--3'>
    <?php the_content();?>
</section>

<section class='front_landing'>
    <?php 
    $page = get_page_by_title('Notre catalogue'); 
    $content =  apply_filters('the_excerpt', $page->post_excerpt); 
    $title = 'Un large choix d’articles décoratifs et d’entretien'; 
    $link = get_page_link( $page); 
    $thumb = get_the_post_thumbnail( $page, 'post-thumbnail' );
    ?>
    <h2><?php echo $title; ?></h2>
    <?php echo $content; ?>
        <div class='thumb' > <?php echo $thumb; ?></div>
        <div><a href="<?php echo $link; ?>"><button class='btn-front'>Notre catalogue</button></a></div>
</section >

<section class='front_landing--2'>
    <?php 
    $page = get_page_by_title('Découvrez notre showroom et venez nous rendre visite !'); 
    $content = apply_filters('the_excerpt', $page->post_excerpt); 
    $title = apply_filters('the_title', $page->post_title); 
    $link = get_page_link( $page);
    ?>
    <h2><?php echo $title; ?></h2>
    <?php echo $content; ?>




        <div class='container'> 
        <?php
$loop = new WP_Query( array(
    'post_type' => 'showroom'
  )
);

?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div><img src="<?= the_post_thumbnail_url(); ?>" alt="" srcset=""></div>
            <?php endwhile; wp_reset_query(); ?>
        </div>



        <div><a href="<?php bloginfo('wpurl') ?>/qui-sommes-nous/#showroom"><button class='btn-front'>Notre showroom</button></a></div>
</section >
<?php get_template_part ('parts/footerPart' )?>
<?php get_footer();?>