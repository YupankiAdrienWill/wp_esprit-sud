<!-- Container for the image gallery -->
<div class="container">
  <!-- Image text -->
  <div class="titleImg">
  <?php $loop = new WP_Query((array('post_type' => 'réalisation','order'=>'DSC', 'posts_per_page'=>1)));
   while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div id='title'> <?php the_title();?></div>
    <?php endwhile; wp_reset_query(); ?>
  </div>

  <!-- Full-width images with number text -->
      <div class="bigImg">
            <?php $loop = new WP_Query((array('post_type' => 'réalisation','order'=>'DSC', 'posts_per_page'=>1)));
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                  <div id="bigImg__child__" class="bigImg__child" style="background-image: url('<?= the_post_thumbnail_url(); ?>');"></div>
            <?php endwhile; wp_reset_query(); ?>
      </div>

  <!-- content text -->
  <div class="contentImg">
  <?php $loop = new WP_Query((array('post_type' => 'réalisation','order'=>'DSC', 'posts_per_page'=>1)));
   while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div id='content'> <?php the_content();?></div>
    <?php endwhile; wp_reset_query(); ?>
  </div>

  <!-- Thumbnail images -->

  <div class="gallerie">
      <?php $loop = new WP_Query((array('post_type' => 'réalisation','order'=>'DSC', 'posts_per_page'=>50)));
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <img src="<?= the_post_thumbnail_url(); ?>" alt="" onclick="changeback('<?= the_post_thumbnail_url(); ?>' , 'bigImg__child__','<?php the_title();?>')">
      <?php endwhile; wp_reset_query(); ?>
      </div>
    
    
  </div>
</div>