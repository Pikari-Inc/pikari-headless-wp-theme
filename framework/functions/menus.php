<?php
/**
 * Register menus
 */

function pikari_register_menus() {

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus( array(
      'primary-menu'        => 'Primary Menu',
      'secondary-menu'      => 'Secondary Menu',
      'footer-menu-1'       => 'Footer Menu 1',
      'footer-menu-2'       => 'Footer Menu 2',
      'footer-menu-3'       => 'Footer Menu 3',
      'site-policies-menu'  => 'Site Policies Menu',
  ));

}