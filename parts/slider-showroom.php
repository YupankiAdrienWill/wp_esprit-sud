<section class="avis">
      <style id="slideStyle"></style>
      <?php $loop = new WP_Query((array('post_type' => 'showroom','order'=>'DSC', 'posts_per_page'=>1)));
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <h1><?php the_title(); ?></h1>
      <?php endwhile; wp_reset_query(); ?>
      <div class="parent_cadre_avis">
            <div class="cadre_avis">
                  
                  <img class="return" id="avis_return" src="<?php bloginfo('template_directory'); ?>/assets/ico/circled-left.svg" alt="">
                  
                  <div class="cadre_avis__intermediaire" id="avisTranslate">
                        
                  
                        <?php 
                        $count_avis = 0;
                        $loop = new WP_Query((array('post_type' => 'showroom','order'=>'DSC', 'posts_per_page'=>50)));
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                              <?php $count_avis = $count_avis + 1; ?>
                              <div class="cadre_avis__child"><p>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/ico/staryello.svg" alt="" class="star"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/staryello.svg" alt="" class="star"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/staryello.svg" alt="" class="star"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/staryello.svg" alt="" class="star"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/staryello.svg" alt="" class="star">
                                    <br><br>
                                    <b><?= the_title(); ?></b><br><br>
                                    <?= the_content(); ?>
                              </p>
                              </div>
                        <?php endwhile; wp_reset_query(); ?>
                  </div>
                  
                  <img class="after" id="avis_after" src="<?php bloginfo('template_directory'); ?>/assets/ico/circled-right.svg" alt="">
            </div>
            
            <div class="cachscrollbar"></div>
      </div>
      <hr class="yello">
</section>

<script>

      function funcTranslate(remToTranslate, remFromTranslate) {
            // document.getElementById('avisTranslate').style = 'transform:translate( -'+remToTranslate+'rem , 0rem );';
            document.getElementById('slideStyle').innerText = '@keyframes slideShow {\
      from{\
            transform: translateX(-'+remFromTranslate+unitWidth+');\
      }\
      to{\
            transform: translateX(-'+remToTranslate+unitWidth+');\
      }\
      }';
            document.getElementById('avisTranslate').style = 'transform:translate( -'+remToTranslate+unitWidth+' , 0rem ); animation-name: slideShow;';

            setTimeout (()=> document.getElementById('avisTranslate').style = 'transform:translate( -'+remToTranslate+unitWidth+' , 0rem );',300);
      }

      let iAvis = 0;
      let width = 100; // definition width
      let unitWidth = '%'; // unitées de la width
      let nbrAvisReel = <?= $count_avis; ?>; // definition nbr avis
      let nbrAvis = nbrAvisReel - 1;
      document.getElementById('avis_return').onclick = function() {
            oldAvis = iAvis;
            if (iAvis == 0) {
                  iAvis = nbrAvis * width;
            }else{
                  iAvis = iAvis - width;
            }
            console.log(iAvis);
            funcTranslate(iAvis,oldAvis);
      }
      document.getElementById('avis_after').onclick = function() {
            oldAvis = iAvis;
            if (iAvis == nbrAvis * width) {
                  iAvis = 0;
            }else{
                  iAvis = iAvis + width;
            }
            console.log(iAvis);
            funcTranslate(iAvis,oldAvis);
      }
</script>