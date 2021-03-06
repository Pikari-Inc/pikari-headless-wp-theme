<?php

if ( ! function_exists( 'pikari_main_classes' ) ) :
  /**
   * Display the classes for the main site element.
   *
   * This is meant to be hooked into with 'add_filter('pikari_maincontainer_class')
   *
   * @param array $class Classes to add to the class list.
   */
  function pikari_main_classes( $class = '' ) {
    $classes = array();

    if ( ! empty( $class ) ) {
      if ( !is_array( $class ) )
        $class = preg_split( '#\s+#', $class );

      $classes = array_merge( $classes, $class );

    } else {
        // Ensure that we always coerce class to being an array.
        $class = array();
    }

    $classes = array_map( 'esc_attr', $classes);

    $classes = apply_filters( 'pikari_maincontainer_class', $classes );

    return array_unique( $classes );
  }
endif;


if ( ! function_exists( 'pikari_get_main_class' ) ) :
  /**
   * Simple wrapper function for the main container class
   * Outputs the class attribute along with the currently set classes
   *
   * @param string $class
   * @return void
   */

  function pikari_get_main_class( $class = '' ) {
    $classes = pikari_main_classes( $class );

    if ( count($classes) ) {
      echo 'class="' . join( ' ', $classes ) . '"';
    }
  }
endif;

?>