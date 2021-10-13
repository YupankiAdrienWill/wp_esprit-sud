<?php get_header();?>

<div class="main__container--page">

</div>
<?php get_template_part ('parts/customHeaderLanding' )?>
<section class='front_page'>
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
<section class='front_page'>
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