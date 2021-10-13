<?php get_header();?>
<div class="main__container--produits">
<?php get_template_part ('parts/customHeaderProduit' )?>
</div>
<section class='produits'>
<?php the_content();?>
</section>


<?php get_footer();?>