

<section class="avis">
      <?php $loop = new WP_Query((array('post_type' => 'showroom','order'=>'DSC', 'posts_per_page'=>1)));
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <h1><?php the_title(); ?></h1>
      <?php endwhile; wp_reset_query(); ?>
      <div class="parent_cadre_avis">
            <img class="return" id="avis_return" src="<?php bloginfo('template_directory'); ?>/assets/ico/circled-left.svg" alt="">
            <div class="cadre_avis">
                  <div class="cadre_avis__intermediaire" id="avisTranslate">
                        <div class="cadre_avis__child"><img   class='slideshow' src="<?= the_post_thumbnail_url(); ?>" style="width:100%"></div>
<!--                         <div class="cadre_avis__child">avis 2</div>
                        <div class="cadre_avis__child">avis 3</div> -->
                  </div>
            </div>
            <img class="after" id="avis_after" src="<?php bloginfo('template_directory'); ?>/assets/ico/circled-right.svg" alt="">
      </div>
</section>

<script>

      function funcTranslate(remToTranslate) {
            document.getElementById('avisTranslate').style.transform = 'translate( -'+remToTranslate+'rem , 0rem )';




            var style = document.createElement('style');
            style.type = 'text/css';
            var keyFrames = '.cadre_avis__child{background-color:blue;}';
            style.innerHTML = keyFrames;
      }

      let iAvis = 0;
      let width = 20; // definition width
      let nbrAvisReel = 2; // definition nbr avis
      let nbrAvis = nbrAvisReel - 1;
      document.getElementById('avis_return').onclick = function() {
            if (iAvis == 0) {
                  iAvis = nbrAvis * width;
            }else{
                  iAvis = iAvis - width;
            }
            console.log(iAvis);
            funcTranslate(iAvis);
      }
      document.getElementById('avis_after').onclick = function() {
            if (iAvis == nbrAvis * width) {
                  iAvis = 0;
            }else{
                  iAvis = iAvis + width;
            }
            console.log(iAvis);
            funcTranslate(iAvis);
      }
</script>