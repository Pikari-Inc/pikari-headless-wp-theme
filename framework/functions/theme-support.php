<?php
/**
 * Add Theme Support
 *
 * Called with action after_setup_theme
 *
 */

if ( ! function_exists( 'pikari_theme_support' ) ) :

  function pikari_theme_support() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' ); // Enable plugins to manage the document title
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'post-formats', array( 'gallery', 'video', 'image' ) );

    // Add RSS links to head
    add_theme_support( 'automatic-feed-links' );

    //Add Post Type Support
    add_post_type_support('page','excerpt');
    add_post_type_support('post', 'page-attributes' );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Kill the widget blog editor
    remove_theme_support( 'widgets-block-editor' );

    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for editor styles.
    add_theme_support( 'editor-styles' );

    // Enqueue editor styles.
    //add_editor_style( 'dist/css/style-editor.min.css' );
    //add_editor_style( 'dist/css/bundle.min.css' );

    // Add custom editor font sizes.
    add_theme_support(
      'editor-font-sizes',
      array(
        array(
          'name'      => __( 'Small', 'pikari' ),
          'shortName' => __( 'S', 'pikari' ),
          'size'      => 19.5,
          'slug'      => 'small',
        ),
        array(
          'name'      => __( 'Normal', 'pikari' ),
          'shortName' => __( 'M', 'pikari' ),
          'size'      => 22,
          'slug'      => 'normal',
        ),
        array(
          'name'      => __( 'Large', 'pikari' ),
          'shortName' => __( 'L', 'pikari' ),
          'size'      => 36.5,
          'slug'      => 'large',
        ),
        array(
          'name'      => __( 'Huge', 'pikari' ),
          'shortName' => __( 'XL', 'pikari' ),
          'size'      => 49.5,
          'slug'      => 'huge',
        ),
      )
    );

    // Editor color palette.
    add_theme_support(
      'editor-color-palette',
      array(
        array(
          'name'  => __( 'Primary', 'pikari' ),
          'slug'  => 'primary',
          'color' => hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
        ),
        array(
          'name'  => __( 'Secondary', 'pikari' ),
          'slug'  => 'secondary',
          'color' => hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
        ),
        array(
          'name'  => __( 'Dark Gray', 'pikari' ),
          'slug'  => 'dark-gray',
          'color' => '#111',
        ),
        array(
          'name'  => __( 'Light Gray', 'pikari' ),
          'slug'  => 'light-gray',
          'color' => '#767676',
        ),
        array(
          'name'  => __( 'White', 'pikari' ),
          'slug'  => 'white',
          'color' => '#FFF',
        ),
      )
    );

  }

endif;

