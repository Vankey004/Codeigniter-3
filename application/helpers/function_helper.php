<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('pr')) {
    /**
     * Print_r wrapped in <pre> tags for better readability.
     *
     * @param mixed $data Data to be printed
     */
    function pr($data) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

if (!function_exists('prd')) {
    /**
     * Print_r wrapped in <pre> tags for better readability and die.
     *
     * @param mixed $data Data to be printed
     */
    function prd($data) {
        pr($data);
        die();
    }
}
