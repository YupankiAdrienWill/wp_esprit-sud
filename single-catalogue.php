<?php get_header();?>
<?php get_template_part ('parts/navbar' )?>
<div class="main__container--produits">
<?php get_template_part ('parts/customHeaderProduit' )?>
</div>
<section class='produits'>
<?php the_content();?>
<?php 
    $page = get_page_by_title('Notre catalogue'); 
    $link = get_page_link( $page); 
    ?>

</section>
<div class='back'><a href="<?php echo $link; ?>"><button class='btn-front'>Retour au catalogue</button></a></div>
<?php get_template_part ('parts/footerPart' )?>
<?php get_footer();?>