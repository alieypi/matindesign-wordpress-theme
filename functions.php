<?php

function add_styles_and_scripts()
{
    $uri = get_template_directory_uri();

    // Tailwind
    wp_enqueue_script("tailwind", "https://cdn.tailwindcss.com");

    // Default
    wp_enqueue_style("fonts", $uri . "/assets/css/font.css");
    wp_enqueue_style("style", $uri . "/assets/css/style.css");
    wp_enqueue_script("index", $uri . "/assets/js/index.js", [], "1.0.0", true);

    // ViewerJs
    wp_enqueue_style("viewercss", $uri . "/assets/css/viewer.min.css");
    wp_enqueue_script("viewerjs", $uri . "/assets/js/viewer.min.js");
    wp_enqueue_script("viewer-config", $uri . "/assets/js/viewer-config.js", [], "1.0.0", true);

    // SwiperJs
    wp_enqueue_style("Swipercss", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");
    wp_enqueue_script("Swiperjs", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js");
    wp_enqueue_script("swiper-config", $uri . "/assets/js/swiper-config.js", [], "1.0.0", true);
}
add_action("wp_enqueue_scripts", "add_styles_and_scripts");


function theme_setup()
{
    add_theme_support("title-tag");
    add_theme_support("custom-logo", array(
        "width" => 130,
        "height" => 50,
        "flex-height" => true,
    ));
}
add_action("after_setup_theme", "theme_setup");

require_once get_parent_theme_file_path("/inc/matindesign-redux/redux-config.php");
require_once get_template_directory() . "/inc/tgm/class-tgm-plugin-activation.php";
require_once get_template_directory() . "/inc/tgm/required-plugins.php";
