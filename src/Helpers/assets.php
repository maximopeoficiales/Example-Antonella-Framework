<?php

// http://localhost/wp-content/plugins/mi-custom-post-type-computers/src/Helpers/../../assets
function asset($uri = ""): string
{
    return plugin_dir_url(__FILE__) . "../../assets/$uri";
}

// /var/www/html/wp-content/plugins/mi-custom-post-type-computers/src/Helpers/../../
function path($path = ""): string
{
    return plugin_dir_path(__FILE__) . "../../$path";
}
