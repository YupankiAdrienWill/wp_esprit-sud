<?php get_header();?>

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
                        <?php the_content(); ?>
                        </span>
                    </div>
                </div>
            </div>
    </section>
</div>
<section class='page'>
    <?php 
    $page = get_page_by_title('Notre catalogue'); 
    $content = apply_filters('the_excerpt', $page->post_excerpt); 
    $title = apply_filters('the_title', $page->post_title); 
    $link = get_page_link( $page); 
    $thumb = get_the_post_thumbnail( $page, 'post-thumbnail' );
    ?>
    <h2><?php echo $title; ?></h2>
    <?php echo $content; ?>
        <div> <?php echo $thumb; ?></div>
        <div><a href="<?php echo $link; ?>"><button>Venez découvir nos produits</button></a></div>
</section >
<section class='page'>
    <?php 
    $page = get_page_by_title('Notre Showroom'); 
    $content = apply_filters('the_excerpt', $page->post_excerpt); 
    $title = apply_filters('the_title', $page->post_title); 
    $link = get_page_link( $page); 
    $thumb = get_the_post_thumbnail( $page, 'post-thumbnail' );
    ?>
    <h2><?php echo $title; ?></h2>
    <?php echo $content; ?>
        <div> <?php echo $thumb; ?></div>
        <div><a href="http://localhost/wordpress/qui-sommes-nous/#showroom"><button>Venez découvir nos produits</button></a></div>
</section >
<?php get_footer();?>