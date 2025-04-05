<?php get_header(); ?>

<main>
   <section id="hero" class="o-panel o-panel--hero">
      <div class="c-hero">
         <div class="container c-hero__container">
            <?php if( get_field('select_carousel_type', 'options') == 'Video' ): ?>
               <div class="video-background">
                  <div class="video-foreground">
                     <?php echo get_field('hero_video', 'options'); ?>
                  </div>
               </div>
            <?php else: ?>
               <div id="wowslider-container1">
                  <div class="ws_images">
                     <ul>
                        <?php $count = 1; if( have_rows('image_carousel', 'options') ) :
                           while( have_rows('image_carousel', 'options') ) : the_row(); ?>
                              <li><img src="<?php echo get_sub_field('carousel_image', 'options'); ?>" alt="slider-img1" id="wows<?php echo $count; ?>_<?php echo $count; ?>"/></li>
                           <?php $count++; endwhile;
                        endif; ?>
                     </ul>
                  </div>
               </div>

               <div class="c-hero__img">
                  <img src="<?php echo get_field('hero_mobile_img', 'options'); ?>" alt="">
               </div>
            <?php endif; ?>

            <div class="c-hero__social">
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
               <?php }?>
            </div>
         </div>

         <!-- <div class="c-hero__play-btn">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-6e8373f7-19d2-472e-b6c6-deb73f6d36e9"></div>
         </div> -->
      </div>
   </section><!-- End Hero Section -->

   <section id="bio" class="o-panel o-panel--bio">
      <div class="c-bio">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-6">
                  <h3 class="c-bio__title"><?php echo get_field('bio_title', 'options'); ?></h3>
               </div>
               <div class="col-sm-12 col-md-12 col-lg-6">
                  <div class="c-bio__text">
                     <?php echo get_field('bio_text', 'options'); ?>

                     <div class="c-bio__buttons">
                        <a class="u-button go-to-hash-item" href="#contact">Book Now</a>
                        <a class="u-dowload-button" href="<?php echo get_field('download_press_kit',  'options'); ?>" target="_blank"><span>Download Press Kit</span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section><!-- End Bio Section -->

   <section id="clients" class="o-panel o-panel--clients">
      <div class="c-clients">
         <div class="container">
            <ul class="c-clients__logo">
               <?php if( have_rows('clients', 'options') ) :
                  while( have_rows('clients', 'options') ) : the_row(); ?>
                     <li><img src="<?php echo get_sub_field('clients_logo', 'options'); ?>" alt=""></li>
                  <?php endwhile;
               endif; ?>
            </ul>
         </div>
      </div>
   </section><!-- End Clients Section -->

   <section id="featured" class="o-panel o-panel--featured">
      <div class="c-featured">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 col-md-6">
                  <div class="c-featured__box c-featured__box--highlights">
                     <h4 class="c-featured__title"><span><i class="fas fa-fire"></i></span> <?php echo get_field('highlights_title', 'options'); ?></h4>
                     <?php echo get_field('highlights_text', 'options'); ?>
                  </div>
               </div>
               <div class="col-sm-12 col-md-6">
                  <div class="c-featured__box c-featured__box--residencies">
                     <h4 class="c-featured__title"><span><i class="fas fa-heart"></i></span> <?php echo get_field('residencies_title', 'options'); ?></h4>
                     <?php echo get_field('residencies_text', 'options'); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section><!-- End Featured Section -->

   <section id="events" class="o-panel o-panel--events">
      <div class="c-events">
         <div class="container c-events__container">
            <h2 class="c-events__heading"><?php echo get_field('event_heading', 'options'); ?></h2>

               <?php if( have_rows('events', 'options') ) : ?>
                  <ul class="c-events__items">
                     <?php while(have_rows('events', 'options') ) : the_row();
                     $event_index = get_row_index();
                     ?>
                        <li class="<?php if($event_index < 6){ echo 'visible-event'; }else{ echo 'hidden-event'; } ?>">
                           <div class="c-events__wrrap">
                              <div class="c-events__date">
                                 <span><?php echo get_sub_field('event_date', 'options'); ?></span>
                                 <div class="c-events__weekname"><?php echo get_sub_field('event_month', 'options'); ?> <strong><?php echo get_sub_field('event_week', 'options'); ?></strong></div>
                              </div>
                              <div class="c-events__title"><strong><?php echo get_sub_field('event_title', 'options'); ?></strong></div>
                              <div class="c-events__venue"><?php echo get_sub_field('event_venue', 'options'); ?></div>
                              <div class="c-events__btn">
                                 <a class="u-button" href="<?php echo get_sub_field('bt_button_link', 'options'); ?>" target="_blank">Buy Tickets</a>
                              </div>
                           </div>
                        </li>
                     <?php endwhile; ?>
                  </ul>

                  <div class="c-evens__more <?php if($event_index < 6){ echo 'no-event-btn'; }else{ echo 'more-event-btn'; } ?>">
                     <a href="#">View All</a>
                  </div>
               <?php else: ?>
                  <?php if(get_field('no_events_message', 'option')): ?>
                     <div class="c-events__no-event-found-message">
                        <?php echo get_field('no_events_message', 'option'); ?>
                     </div>
                  <?php endif; ?>
               <?php endif; ?>
         </div>
      </div>
   </section><!-- End Events Section -->

   <section id="photo-gallery" class="o-panel o-panel--photo-gallery">
      <div class="container">
         <div class="c-photo-gallery">
            <div class="row">
               <?php if( have_rows('photo_gallery', 'options') ) :
                  while( have_rows('photo_gallery', 'options') ) : the_row();

                  $row_index = get_row_index();
                  ?>
                     <div class="col-6 col-md-4 c-photo-gallery__col <?php if($row_index < 7){ echo 'visible-photo'; }else{ echo 'hidden-photo'; } ?>">
                        <a class="c-photo-gallery__box" data-fancybox="gallery" data-src="<?php echo get_sub_field('gallery_photo', 'options'); ?>" href="javascript:void(0)">
                           <img src="<?php echo get_sub_field('gallery_photo', 'options'); ?>" alt="">

                           <div class="c-photo-gallery__overlay">
                              <span></span>
                           </div>
                        </a>
                     </div>
                  <?php endwhile;
               endif; ?>
            </div>

            <div class="c-photo-gallery__more <?php if($row_index < 7){ echo 'nothing-more-btn'; }else{ echo 'more-btn'; } ?>">
               <a href="#">View All</a>
            </div>
         </div>
      </div>
   </section><!-- End Photo Gallery Section -->

   <section id="mixes" class="o-panel o-panel--mixes">
      <div class="container c-mixes__container">
         <div class="c-mixes">
            <div class="c-mixes__header">
               <h2 class="c-mixes__heading"><strong><?php echo get_field('mixes_heading', 'options'); ?></strong></h2>

               <div class="c-mixes__navs">
                  <button id="mixes-prev"><img src="<?php echo _DjSlim_THEME_URI; ?>/assets/img/arrow-left-gold.png" alt=""></button>
                  <button id="mixes-next"><img src="<?php echo _DjSlim_THEME_URI; ?>/assets/img/arrow-right-gold.png" alt=""></button>
               </div>
            </div>

            <div class="c-mixes__content">
               <div class="js-mixes">
               <?php if( have_rows('mixes', 'options') ) :
                  while( have_rows('mixes', 'options') ) : the_row(); ?>
                     <div class="c-mixes__item">
                        <div class="c-mixes__box">
                           <?php echo get_sub_field('mixes_embed', 'options'); ?>
                        </div>
                     </div>
                  <?php endwhile;
               endif; ?>
               </div><!--/ Mixes Carrousel -->
            </div>
         </div>
      </div>
   </section><!-- End Mixes Section -->

   <section id="video" class="o-panel o-panel--video">
      <div class="c-video">
         <div class="container c-video__container">
            <div class="c-video__heading">
               <h2 class="c-video__title"><?php echo get_field('video_heading', 'options'); ?></h2>

               <div class="c-video__navs">
                  <button id="video-prev"><img src="<?php echo _DjSlim_THEME_URI; ?>/assets/img/arrow-left-gold.png" alt=""></button>
                  <button id="video-next"><img src="<?php echo _DjSlim_THEME_URI; ?>/assets/img/arrow-right-gold.png" alt=""></button>
               </div>
            </div>

            <div class="js-video-carousel">
               <?php if( have_rows('videos', 'options') ) :
                  while( have_rows('videos', 'options') ) : the_row(); ?>
                     <div class="c-video__item">
                        <div class="c-video__embed-code">
                           <?php echo get_sub_field('video_embed', 'options'); ?>
                        </div>
                     </div>
                  <?php endwhile;
               endif; ?>
            </div>
         </div>
      </div>
   </section><!-- End Video Section -->

   <section id="testimonial" class="o-panel o-panel--testimonial">
      <div class="container c-testimonial__container">
         <div class="c-testimonial">
            <div class="c-testimonial__header">
               <h4 class="c-testimonial__heading"><?php echo get_field('testimonial_heading', 'options'); ?></h4>

               <div class="c-testimonial__navs">
                  <button id="testimonial-prev"><img src="<?php echo _DjSlim_THEME_URI; ?>/assets/img/arrow-left-gold.png" alt=""></button>
                  <button id="testimonial-next"><img src="<?php echo _DjSlim_THEME_URI; ?>/assets/img/arrow-right-gold.png" alt=""></button>
               </div>
            </div>

            <div class="c-testimonial__content">
               <div class="js-testimonials">
               <?php if( have_rows('testimonials', 'options') ) :
                  while( have_rows('testimonials', 'options') ) : the_row(); ?>
                     <div class="c-testimonial__item">
                        <div class="c-testimonial__text">
                           <h4 class="c-testimonial__title"><?php echo get_sub_field('testimonial_title', 'options') ?></h4>
                           <p><?php echo get_sub_field('testimonial_text', 'options') ?> </p>

                           <span class="c-testimonial__author"><?php echo get_sub_field('author', 'options') ?></span>
                        </div>
                     </div>
                  <?php endwhile;
               endif; ?>
               </div><!--/ Testimonials Carousel -->
            </div>
         </div>
      </div>
   </section><!-- End Testimonial Section -->

   <section id="contact" class="o-panel o-panel--contact">
      <div class="c-contact">
         <div class="container c-contact__container">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-5 c-contact__image-col">
                  <div class="c-contact__image">
                     <img src="<?php echo _DjSlim_THEME_URI; ?>/assets/img/bookings-img.png" alt="">
                  </div>
               </div>
               <div class="col-sm-12 col-md-12 col-lg-7">
                  <div class="c-contact__box">
                     <h2 class="c-contact__title">BO<em>O</em>KINGS</h2>
                     <p>For bookings fill out the form below or email <a href="mailto:utakeentgroup@gmail.com">utakeentgroup@gmail.com</a></p>

                     <div class="c-contact__form">
                        <?php echo do_shortcode('[gravityform id="1" title=false description=false ajax=true]'); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section><!-- End Contact Section -->
</main>

<?php get_footer(); ?>