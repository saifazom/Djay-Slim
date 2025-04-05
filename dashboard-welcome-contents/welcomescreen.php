<?php


function customContent() {
  echo '<div><p>Custom Lorem Ipsum Content</p></div>';
}

/* add widget */
function add_customDashboardWidget() {
  wp_add_dashboard_widget('wp_dashboard_widget', 'Custom Content', 'customContent');
}

/* add action */
//add_action('wp_dashboard_setup', 'add_customDashboardWidget' );


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


// disable default dashboard widgets
function disable_default_dashboard_widgets() {
	remove_meta_box('dashboard_right_now', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');

	remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
	remove_meta_box('dashboard_primary', 'dashboard', 'core');
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');
}
//add_action('admin_menu', 'disable_default_dashboard_widgets');


//add_action('admin_head-index.php', 'show_r1_custom_dashboard_contents');

function show_r1_custom_dashboard_contents()
{
    // Check if Welcome Panel is being displayed
    //$option = get_user_meta( get_current_user_id(), 'show_welcome_panel', true );
    //if( !$option )
    //    return;

	$externalHtml = 'this is default staff';
    $externalHtml = file_get_contents(TEMPLATEPATH."/dashboard-welcome-contents/welcome-html.php", true);

    $htmlOutput = str_replace(array("\r\n", "\r"), "\n", $externalHtml);
	$htmlLines = explode("\n", $htmlOutput);
	$htmlNewLines = array();

	foreach ($htmlLines as $i => $htmlLine) {
	    if(!empty($htmlLine))
	        $htmlNewLines[] = trim($htmlLine);
	}

	$externalHtml = implode($htmlNewLines);
	$externalHtml = str_replace('@@theme_directory@@', get_stylesheet_directory_uri().'/modules', $externalHtml);

    $externalScripts = file_get_contents(TEMPLATEPATH."/dashboard-welcome-contents/script.js", true);
    $externalScripts = str_replace('@@htmlplaceholder@@', $externalHtml, $externalScripts);
    //echo '<script type="text/javascript">'.$externalScripts.'</script>';
}

//add_action ('admin_head', 'add_css_to_dashboard');
add_action( 'admin_print_styles-index.php', 'r1_custom_welcome_screen_styles' );

function r1_custom_welcome_screen_styles(){
	$externalStyles = '<link rel="stylesheet" href="'.get_stylesheet_directory_uri().'/dashboard-welcome-contents/style.css">';
	echo $externalStyles;
}

add_action( 'admin_enqueue_scripts', 'r1_custom_welcome_screen_scripts' );
function r1_custom_welcome_screen_scripts($hook) {
    if( 'index.php' != $hook )
        return;

    $externalHtml = 'this is default staff';
    $externalHtml = <<<EOT
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
EOT;

    $htmlOutput = str_replace(array("\r\n", "\r"), "\n", $externalHtml);
	$htmlLines = explode("\n", $htmlOutput);
	$htmlNewLines = array();

	foreach ($htmlLines as $i => $htmlLine) {
	    if(!empty($htmlLine))
	        $htmlNewLines[] = trim($htmlLine);
	}

	$externalHtml = implode($htmlNewLines);
	$externalHtml = str_replace('@@theme_directory@@', get_stylesheet_directory_uri().'/', $externalHtml);

    wp_enqueue_script( 'welcome_screen_script', get_stylesheet_directory_uri().'/dashboard-welcome-contents/script.js');
    wp_localize_script( 'welcome_screen_script', 'wp_cs_vars',
		array(
			'html_content' => $externalHtml
		)
	);
}
