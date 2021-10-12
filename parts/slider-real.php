<div class="bigImg">
      <?php $loop = new WP_Query((array('post_type' => 'ralisation'.$id,'order'=>'DSC', 'posts_per_page'=>1)));
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div id="bigImg__child__<?= $id2 ?>" class="bigImg__child" style="background-image: url('<?= the_post_thumbnail_url(); ?>');">
            </div>
      <?php endwhile; wp_reset_query(); ?>
</div>
<div class="gallerie">
      <?php $loop = new WP_Query((array('post_type' => 'ralisation'.$id2,'order'=>'DSC', 'posts_per_page'=>50)));
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <img src="<?= the_post_thumbnail_url(); ?>" alt="" onclick="changeback('<?= the_post_thumbnail_url(); ?>' , 'bigImg__child__<?= $id2 ?>')">
      <?php endwhile; wp_reset_query(); ?>
</div>