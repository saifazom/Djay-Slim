      <footer id="footer" class="o-panel o-panel--footer">
         <div class="c-footer">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-sm-12 col-md-12 col-lg-4 c-footer__btn-col">
                     <div class="c-footer__box">
                        <a class="c-footer__back-btn" href="#">BACK TO TOP</a>
                     </div>
                  </div><!--/ Footer Col -->

                  <div class="col-sm-12 col-md-12 col-lg-4">
                     <div class="c-footer__copyright">
                        <p>© Copyright 2023 Djay Slim. All Rights Reserved.<br/> Design by <a href="https://r1creative.net/" target="_blank">R1 Creative.</a></p>
                     </div>
                  </div><!--/ Footer Col -->

                  <div class="col-sm-12 col-md-12 col-lg-4 c-footer__social-col">
                     <div class="c-footer__box c-footer__social-box">
                        <div class="c-hero__social c-footer__social">
                        <?php if( get_field('facebook', 'options') ){ ?>
                        <a href="<?php echo get_field('facebook', 'options'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <?php }
                        if( get_field('instagram', 'options') ){ ?>
                        <a href="<?php echo get_field('instagram', 'options'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        <?php }
                        if( get_field('twitter', 'options') ){ ?>
                        <a href="<?php echo get_field('twitter', 'options'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <?php }
                        if( get_field('youtube', 'options') ){ ?>
                        <a href="<?php echo get_field('youtube', 'options'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                        <?php }
                        if( get_field('snapchat', 'options') ){ ?>
                        <a href="<?php echo get_field('snapchat', 'options'); ?>" target="_blank"><i class="fab fa-snapchat-ghost"></i></a>
                        <?php }
                        if( get_field('tiktok', 'options') ){ ?>
                           <a class="c-hero__tictak" href="<?php echo get_field('tiktok', 'options'); ?>" target="_blank">
                              <img class="tictak-regular" src="<?php echo _DjSlim_THEME_URI; ?>/assets/img/tictak.png" alt=""/>
                              <img class="tictak-hvr" src="<?php echo _DjSlim_THEME_URI; ?>/assets/img/tictak-hvr.png" alt=""/>
                           </a>
                        <?php }
                        if( get_field('soundcloud', 'options') ){ ?>
                        <a href="<?php echo get_field('soundcloud', 'options'); ?>" target="_blank"><i class="fab fa-soundcloud"></i></a>
                        <?php }
                        if( get_field('mixcloud', 'options') ){ ?>
                        <a href="<?php echo get_field('mixcloud', 'options'); ?>" target="_blank"><i class="fab fa-mixcloud"></i></a>
                        <?php }
                        if( get_field('twitch', 'options') ){ ?>
                        <a href="<?php echo get_field('twitch', 'options'); ?>" target="_blank"><i class="fab fa-twitch"></i></a>
                        <?php }
                        if( get_field('yelp', 'options') ){ ?>
                           <a href="<?php echo get_field('yelp', 'options'); ?>" target="_blank"><i class="fab fa-yelp"></i></a>
                        <?php }
                        if( get_field('google', 'options') ){ ?>
                           <a href="<?php echo get_field('google', 'options'); ?>" target="_blank"><i class="fab fa-google"></i></a>
                        <?php }
                        if( get_field('threads', 'options') ){ ?>
                           <a class="c-hero__threads" href="<?php echo get_field('threads', 'options'); ?>" target="_blank">
                              <img class="threads-regular" src="<?php echo _DjSlim_THEME_URI; ?>/assets/img/threadsicon.svg" alt=""/>
                              <img class="threads-hvr" src="<?php echo _DjSlim_THEME_URI; ?>/assets/img/threadsicon-hover.svg" alt=""/>
                           </a>
                        <?php } ?>
                        </div>
                     </div>
                  </div><!--/ Footer Col -->
               </div>
            </div><!--/ Footer Columns -->
         </div>
      </footer><!-- End Footer Section -->

      <?php wp_footer(); ?>
   </body>
</html>