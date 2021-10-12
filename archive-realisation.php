<?php get_header();?>
!-- Container for the image gallery -->
<div class="container">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext"><?php the_title(); ?></div>
    <?php the_post_thumbnail(); ?>
      <?php endwhile; endif; ?>
  </div>

  

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption">ESPRIT SUD</p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
  
    <div class="column">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
       <?php the_post_thumbnail(); ?>
      <?php endwhile; endif; ?>
    </div>  
</div>
<?php get_footer();?>