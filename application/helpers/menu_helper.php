<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('active_link')) {
    function activate_menu($controller)
    {
        // Getting the class instance.
        $ci = get_instance();
        // Getting the router class to actived it.
        $class = $ci->router->fetch_class();
        return ($class == $controller) ? 'active' : '';
    }
}
