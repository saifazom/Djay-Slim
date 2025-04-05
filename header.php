<?php
/**********************************************************************
* R.One Creative Wordpress Theme
*
* File name:
*      index.php
* Brief:
*      Default file for all pages if appropriate template doesn't found.
* Author:
*      R.One Creative
* Author URI:
*      http://r1creative.net
* Contact:
*      info@r1creative.net
***********************************************************************/
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <?php
        # Enable the code below if you want to output conditional
        # class for IE 6 - IE 8
        # echo r1()->printHtmlIeConditionals(); data-scrollbar
    ?>

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <title>DJAYSLIM | Straight from Africa</title>

   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="apple-touch-icon" href="<?php echo _DjSlim_THEME_URI; ?>/assets/img/DjaySlim_AppleShare.jpg"  />
   <link rel="shortcut icon" type="image/png" href="<?php echo _DjSlim_THEME_URI; ?>/assets/img/favicon.ico"/>
   <meta property="og:image" content="<?php echo _DjSlim_THEME_URI; ?>/assets/img/DjaySlim_ShareImage.jpg" />

   <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js" type="text/javascript"></script>
   <![endif]-->
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <header id="header" class="o-panel o-panel--heaher">
      <div class="c-header">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-5 col-md-4 col-lg-3">
                  <a class="c-header__logo" href="#">
                     <img src="<?php echo _DjSlim_THEME_URI; ?>/assets/img/site-logo.png" alt="">
                  </a>
               </div><!--/ Logo -->
               <div class="col-7 col-md-8 col-lg-9">
                  <div id="s-primary-menu" class="s-primary-menu">
                     <div class="d-none d-lg-block">
                        <ul>
                           <li><a href="#bio">Bio</a></li>
                           <li><a href="#events">Upcoming Shows</a></li>
                           <li><a href="#photo-gallery">Photos</a></li>
                           <li><a href="#mixes">Mixes</a></li>
                           <li><a href="#testimonial">Testimonials</a></li>
                           <li><a href="#contact">Contact</a></li>
                        </ul>
                     </div>

                     <a class="u-button c-header__button go-to-hash-item" href="#contact">Book Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header><!-- End Header Section -->