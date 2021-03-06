<?php

/* -------------------------------------------------------------------------- *\
    Required Files
\* -------------------------------------------------------------------------- */
require_once('framework/core/file-loader.php');
require_once('framework/core/file-path-helpers.php');



/**
 * Include theme files
 *
 * The $includes array determines the theme specific code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 */

$includes = array(

  'admin-init',                   // WP Admin Setup
  'classes/class-svg-icons',      // Sites SVG images
  'functions/functions',          // Template View Functions
  //'filters/filters',            // Filters
  'plugins/plugins',              //
  //'post-types/post-types',      // Custom Post Types Registration
  // 'widgets/widgets',           // Custom widgets
  //'shortcodes/shortcodes',      // Custom Shortcodes
  //'scripts',                    // Theme Scripts (Enqueued JS and CSS)
  'actions',                      // Hooks
  //'partials/partials',
);


wp_file_loader( $includes );

// Unset the global variable.
unset( $includes );


?>