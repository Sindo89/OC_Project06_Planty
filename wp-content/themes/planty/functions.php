<?php

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{

  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style(
    'child-style',
    get_stylesheet_directory_uri() . '/assets/css/theme.css',
    array('parent-style'),
    wp_get_theme()->get('Version')
  );
}

function add_admin_link_to_menu($items, $args)
{
  if (is_user_logged_in() && has_nav_menu('main-menu')) { // vérifie que l'utilisateur est connecté et que le menu existe
    $items = '<li><a href="/nous-rencontrer/">Nous rencontrer</a></li> <li><a href="' . admin_url() . '">Admin</a></li> <li><a href="/commander/)">Commander</a></li>'; // ajoute le lien vers l'admin
  }
  return $items; // retourne le menu
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2); // ajoute le filtre pour ajouter le lien vers l'admin dans le menu


add_filter('wpcf7_form_elements', 'delicious_wpcf7_form_elements');

function delicious_wpcf7_form_elements($form)
{
  $form = do_shortcode($form);
  return $form;
}

function wpmu_burger_menu_scripts()
{

  wp_enqueue_script('burger-menu-script', get_stylesheet_directory_uri() . '/assets/js/burger-menu-script.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'wpmu_burger_menu_scripts');
