<?php


//******************************************************************
//Ajoute le style parent (style.css) et le style enfant (theme.css)

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

//******************************************************************





//******************************************************************
//Ajoute le lien vers l'admin dans le menu

function add_admin_link_to_menu($items, $args)
{
  if ($args->theme_location == 'main-menu' && is_user_logged_in()) {
    $items .= '<li class="admin-menu"><a href="' . admin_url() . '">Admin</a></li>';
  }
  return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);

//******************************************************************





//******************************************************************
//Permet l'utilisation de shortcode dans wpcf7

function delicious_wpcf7_form_elements($form)
{
  $form = do_shortcode($form);
  return $form;
}
add_filter('wpcf7_form_elements', 'delicious_wpcf7_form_elements');

//******************************************************************





//******************************************************************
//Execute le script burger-menu-script.js

function wpmu_burger_menu_scripts()
{

  wp_enqueue_script('burger-menu-script', get_stylesheet_directory_uri() . '/assets/js/burger-menu-script.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'wpmu_burger_menu_scripts');

//******************************************************************






//******************************************************************
//Ajoute un emplacement de menu dans le footer

function register_footer_menu()
{
  register_nav_menu('footer_menu', __('Footer Menu'));
}
add_action('after_setup_theme', 'register_footer_menu');

//******************************************************************