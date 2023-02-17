<?php

// Get search visibility option from admin settings
$gecko_settings = GeckoConfigSettings::get_instance();

$pageid = get_proper_ID();

$hide_sidebars = get_post_meta($pageid, 'gecko-page-sidebars', true);
$hide_sidebars_mobile = get_post_meta($pageid, 'gecko-page-sidebars-mobile', true);
$sticky_sidebar = $gecko_settings->get_option( 'opt_sticky_sidebar', 0 );
$scroll_sidebar = $gecko_settings->get_option( 'opt_scroll_sidebar_left', 0 );

if ($scroll_sidebar) {
  $sticky_sidebar = "";
}

if (is_search() || is_archive()) {
  $hide_sidebars = 'both';

  if($gecko_settings->get_option( 'opt_sidebar_left_search_vis', 1 ) == 1) {
    $hide_sidebars = 'right';
  }

  if($gecko_settings->get_option( 'opt_sidebar_left_search_vis', 1 ) == 1 && $gecko_settings->get_option( 'opt_sidebar_right_search_vis', 1 ) == 1) {
    $hide_sidebars = 'right';
  }
}

//
// MobiLoud
//
if ( GeckoAppHelper::is_app() && PeepSo::get_option('app_gecko_hide_widgets_sidebar-left') ) {
  $hide_sidebars = 'left';
}
// end: Mobiloud

if ( ! is_active_sidebar( 'sidebar-left' ) || $hide_sidebars == 'both' || $hide_sidebars == 'left' ) {
    // do nothing
} else {
  ob_start();
	dynamic_sidebar( 'sidebar-left' );
	$content = ob_get_clean();

	if(strlen(trim($content))) {
		// load required script to implement sticky sidebar if needed
		if ($sticky_sidebar) {
			wp_enqueue_script( 'gecko-sticky-js', gecko_add_cachebust_arg(get_template_directory_uri() . '/assets/js/sticky.js'), array(), wp_get_theme()->version, true );
		}

	?>
	  <div id="sidebar-left" class="sidebar <?php echo $sticky_sidebar ? 'sidebar--sticky' : '' ?> <?php echo $scroll_sidebar ? 'sidebar--scroll' : '' ?> sidebar--left <?php if ($hide_sidebars_mobile == 1) { echo 'sidebar--hidden-mobile'; } ?>"><div class="sidebar__inner"><?php echo $content; ?></div></div>
	<?php }
}


?>
