<?php

/* -------------------------------------------------------------------------- *\
    Require the function files below
\* -------------------------------------------------------------------------- */
$functions = array(
  'arr-to-str',
  'convert-hsl-hex',
  'excerpt-length',
  'excerpt-more',
  'get-latest-post',
  'get-single-template',
  'get-archive-template',
  'get-featured-posts',
  'get-template-partial',
  'image-sizes',
  'post-meta',
  'post-thumbnail',
  'posts-load-more',
  'posts-pagination',
  'pretty-print',
  'main-container-class',
  'menus',
  'query-for-posts',
  'svg-icons',
  'theme-support',
);

wp_file_loader( $functions, 'functions' );

// Unset the global variable.
unset( $functions );

?>