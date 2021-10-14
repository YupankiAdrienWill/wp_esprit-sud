<?php get_header();?>
<?php get_template_part ('parts/navbar' )?>
<div class="main__container--produits">
<?php get_template_part ('parts/customHeaderProduit' )?>
</div>
<section class='produits'>
<?php the_content();?>
</section>

<?php get_template_part ('parts/footerPart' )?>
<?php get_footer();?>