<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Add support for custom header.
add_theme_support( 'custom-header', array(
  'width'           => 600,
  'height'          => 160,
  'header-selector' => '.site-title a',
  'header-text'     => false,
  'flex-height'     => true,
) );

// Aggiunta del menu Wordpress
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu'  => __( 'Header Menu' ),
      'menu_class'   => 'menu',
      'container_id' => 'menu-id',
    )
  );
}
add_action( 'init', 'register_my_menus' );

//* CSS ADMIN AREA
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '
  <style>
    body, td, textarea, input, select {
      font-family: "Lucida Grande";
      font-size: 12px;
    }

  #option-tree-header {
        background: #d2ac65;
      color: #fff;
      display: block;
      margin: 11px 5px 0 2px;
      min-width: 535px;
      overflow: hidden;
      position: relative;
      -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.05);
      -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.05);
      box-shadow: 0 1px 3px rgba(0,0,0,0.05);
      -webkit-border-radius: 2px 2px 0 0;
      -moz-border-radius: 2px 2px 0 0;
      border-radius: 20px 20px 2px 2px;
  }

  #option-tree-header #option-tree-version span, #option-tree-header #theme-version span {
      border-left: 1px solid #d2ac65;
    }
    #option-tree-sub-header {
      background: #242426;
      border-radius: 2px 2px 20px 20px;
  }

  .wp-core-ui .button-primary {
      background: #d2ac65;
      border-color: #b19053 #ab843c #ab843c;
      -webkit-box-shadow: 0 1px 0 #ab843c;
      box-shadow: 0 1px 0 #ab843c;
      color: #fff;
      text-decoration: none;
      text-shadow: 0 -1px 1px #ab843c, 1px 0 1px #ab843c, 0 1px 1px #ab843c, -1px 0 1px #ab843c;
  }



  </style>';
}
