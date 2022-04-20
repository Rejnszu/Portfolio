<?php



function portfolio_register_styles()
{
    $version = wp_get_theme()->get('Version');


    wp_enqueue_style('portfolio-boostrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css", array(), '1.0', 'all');
    wp_enqueue_style('portfolio-bootstrap-style', get_template_directory_uri() . "/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('portfolio-fontawsome-style', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css", array(), '1.0', 'all');
    if (is_page(array('portfolio_en'))) {
        wp_enqueue_style('portfolio-style', get_template_directory_uri() . "/style.css", array("portfolio-bootstrap-style"), $version, 'all');
    }
    if (is_front_page()) {
        wp_enqueue_style('portfolio-style', get_template_directory_uri() . "/style.css", array("portfolio-bootstrap-style"), $version, 'all');
    }
    if (is_page(array('quiz'))) {
        wp_enqueue_style('portfolio-style', get_template_directory_uri() . "/style1.css", array("portfolio-bootstrap-style"), $version, 'all');
    }
}

add_action('wp_enqueue_scripts', 'portfolio_register_styles');


function portfolio_register_scripts()
{
    wp_enqueue_script('portfolio-jq-script', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1', true);
    wp_enqueue_script('portfolio-jqcColor-script', "https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js", array(), '2.1.2', true);
    wp_enqueue_script('portfolio-popper-script', "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), '1.0', true);
    wp_enqueue_script('portfolio-bootstrap-script',  get_template_directory_uri() . "/bootstrap.min.js", array(), '1.0', true);
    if (is_page(array('quiz'))) {
        wp_enqueue_script('portfolio-quiz-init',  get_template_directory_uri() . "/quiz.js", array(), '1.0', false);
    }

    if (is_front_page()) {
        wp_enqueue_script('portfolio-main-script', get_template_directory_uri() . "/portfolio.js", array(), '3.7', true);
    }
    if (is_page(array('portfolio_en'))) {
        wp_enqueue_script('portfolio-main-script',  get_template_directory_uri() . "/portfolio.js", array(), '1.0', false);
    }
    $translation_array = array('templateUrl' => get_template());
    wp_localize_script('portfolio-main-script', 'object_name', $translation_array);
}

add_action('wp_enqueue_scripts', 'portfolio_register_scripts');


// function defer_parsing_of_js($url)
// {
//     if (FALSE === strpos($url, '.js')) return $url;
//     if (strpos($url, 'jquery.js')) return $url;
//     return "$url' defer ";
// }
// add_filter('clean_url', 'defer_parsing_of_js', 11, 1);
function defer_parsing_of_js($url)
{
    if (is_user_logged_in()) return $url; //don't break WP Admin
    if (FALSE === strpos($url, '.js')) return $url;
    if (strpos($url, 'jquery.js')) return $url;
    return str_replace(' src', ' defer src', $url);
}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);
