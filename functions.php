<?php

/**********************************************************************
* R.One Creative Wordpress Theme
*
* File name:
*      functions.php
* Brief:
*      Wordpress functions
* Author:
*      R.One Creative
* Author URI:
*      http://r1creative.net
* Contact:
*      info@r1creative.net
***********************************************************************/

/* ==  WARNING! DO NOT EDIT THIS FILE! (PLEASE)  ==============================
*
*	  If you know what you're doing and would like to add your own custom
*     functions to this theme, DO NOT EDIT THIS FILE. Instead, use the
*     custom-functions.php file to defin e custom functions. Adding your
*     custom functions there will make it much easier to upgrade to a newer
*	  version of this theme without losing any of your customizations.
*
* ============================================================================*/

class _DjSlimTheme{
    public function __construct(){
        // Add some constants
		$this->constants();

        // Additional Init Functions
		$this->include_action_hook();

        if( function_exists('acf_add_options_page') ) {
            // add parent
            $parent = acf_add_options_page(array(
                'page_title' 	=> 'Theme Options',
                'menu_title' 	=> 'Theme Options',
                'redirect' 		=> false
            ));
        }

        register_nav_menus( array(
            'primary_nav' => 'Primary Menu'
        ) );

        add_editor_style( 'assets/css/app.css' );
    }
    /**
	 * Define some constants variables
	 */
	public function constants(){
		define( '_DjSlim_THEME_DIR', get_stylesheet_directory() );
		define( '_DjSlim_THEME_URI', get_stylesheet_directory_uri() );
	}

    /**
	 * Include action hooks
	 */
	public function include_action_hook(){
		// Enqueue style and javascripts
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_script_and_styles' ) );

        // Admin script
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts_styles' ) );

        // Dashboard Customize
        remove_action( 'welcome_panel', 'wp_welcome_panel' );

        function wpex_wp_welcome_panel() { ?>
            <div id="custom-welcome-screen">
                <div class="custom-welcome-header">
                    <h2 class="c-dashboard__title">Welcome to your dashboard!</h2>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/dashboard-welcome-contents/images/dash_logo.png" />
                </div>
                <hr />
                <div class="custom-welcome-body">
                    <div class="task-button-panel">
                        <ul class="task-buttons">
                            <li class="task-button">
                                <a href="admin.php?page=acf-options-theme-options#field_64aea09c7373f">Hero Section</a>
                            </li>
                            <li class="task-button">
                                <a href="admin.php?page=acf-options-theme-options#field_64aea41964aa4">Update Bio</a>
                            </li>
                            <li class="task-button">
                                <a href="admin.php?page=acf-options-theme-options#field_64aef5e0d0e19">Featured Boxes</a>
                            </li>
                            <li class="task-button">
                                <a href="admin.php?page=acf-options-theme-options#field_64aeb50870b68">Update Shows</a>
                            </li>
                            <li class="task-button">
                                <a href="admin.php?page=acf-options-theme-options#field_64aeba4909725">Photo Gallery</a>
                            </li>
                            <li class="task-button">
                                <a href="admin.php?page=acf-options-theme-options#field_64ea2675880f8">Update Mixes</a>
                            </li>
                            <li class="task-button">
                                <a href="admin.php?page=acf-options-theme-options#field_64aebace09727">Update Videos</a>
                            </li>
                            <li class="task-button">
                                <a href="admin.php?page=acf-options-theme-options#field_64aebb6a0972b">Testimonials</a>
                            </li>
                            <li class="task-button">
                                <a href="admin.php?page=acf-options-theme-options#field_64aea1dc671ae">Social Links</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="custom-welcome-footer">
                    <a href="http://r1creative.net" target="_blank">BUILT BY R. ONE CREATIVE</a>
                </div>
            </div>
        <?php }
        add_action( 'welcome_panel', 'wpex_wp_welcome_panel' );

        function remove_dashboard_widgets() {
            global $wp_meta_boxes;

            unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
            unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
            unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
            unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
            unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
            unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
            unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
            unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
        }

        add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

        function r1_custom_welcome_screen_styles(){
            $externalStyles = '<link rel="stylesheet" href="'.get_stylesheet_directory_uri().'/dashboard-welcome-contents/dashboard.css">';
            echo $externalStyles;
        }

        add_action( 'admin_print_styles-index.php', 'r1_custom_welcome_screen_styles' );

    }

    /**
	 * Enqueue style and javascripts
	 */
    public function enqueue_script_and_styles(){
        // Load the Stylesheet
        wp_enqueue_style( 'r1-theme-style', _DjSlim_THEME_URI.'/style.css', array(), time() );
        wp_enqueue_style( 'r1-font-awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css', array(), '');
        wp_enqueue_style( 'r1-bootstrap5-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css', array(), '' );
        wp_enqueue_style( 'r1-slick-style', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '' );
        wp_enqueue_style( 'r1-fancybox-style', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css', array(), '' );
        wp_enqueue_style( 'r1-wowslider-style', _DjSlim_THEME_URI.'/assets/css/wowslider.css', array(), time(), false );
        wp_enqueue_style( 'r1-main-style', _DjSlim_THEME_URI.'/assets/css/app.css', array(), time(), false );

        // Load the Scripts
        wp_enqueue_script( 'r1-bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array(), '', true );
        wp_enqueue_script( 'r1-fontawesome-script', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js', array(), '', true );
        wp_enqueue_script(' r1-slick-scripts', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], '', true );
        wp_enqueue_script( 'r1-fancybox-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'), time(), true);
        wp_enqueue_script( 'r1-wowslider-scripts', _DjSlim_THEME_URI . '/assets/js/wowslider.js', array('jquery'), time(), true);
        wp_enqueue_script( 'r1-wowscript', _DjSlim_THEME_URI . '/assets/js/wowscript.js', array('jquery', 'r1-wowslider-scripts'), time(), true);
        wp_enqueue_script( 'r1-main-scripts', _DjSlim_THEME_URI . '/assets/js/app.js', array('jquery'), time(), true);

        wp_localize_script( 'djslim-main-scripts', 'ad_vars', array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'theme_uri' => _DjSlim_THEME_URI,
            'theme_dir' => _DjSlim_THEME_DIR,
            'site_url' => get_bloginfo('url')
        ));
    }

    /**
     * Enqueue scripts and styles
     */
    public function enqueue_scripts_styles(){
        // Enqueue Scripts
        wp_enqueue_script( 'admin-custom-scripts', _DjSlim_THEME_URI . '/dashboard-welcome-contents/script.js', array('jquery'), time(), true );

        wp_localize_script(
            'admin-custom-scripts',
            'djslim_scripts_js_vars',
            array(
                'ajax_url' => admin_url( 'admin-ajax.php' ),
                'stylesheet_url' => _DjSlim_THEME_URI,
                'stylesheet_dir' => _DjSlim_THEME_DIR
            )
        );
    }
}

new _DjSlimTheme();

add_filter( 'gform_next_button', 'input_to_button', 10, 2 );
add_filter( 'gform_previous_button', 'input_to_button', 10, 2 );
add_filter( 'gform_submit_button', 'input_to_button', 10, 2 );

function input_to_button( $button, $form ) {

    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $new_button = $dom->createElement( 'button' );
    $new_button->appendChild( $dom->createTextNode( $input->getAttribute( 'value' ) ) );
    $input->removeAttribute( 'value' );
    foreach( $input->attributes as $attribute ) {
        $new_button->setAttribute( $attribute->name, $attribute->value );
    }
    $input->parentNode->replaceChild( $new_button, $input );

    return $dom->saveHtml( $new_button );
}



if (!function_exists('write_log')) {
	function write_log($log) {
		if (true === WP_DEBUG) {
			if (is_array($log) || is_object($log)) {
				error_log(var_export($log, true));
			} else {
				error_log($log);
			}
		}
	}
}


