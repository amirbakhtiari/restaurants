<?php
/**
 * Created by PhpStorm.
 * User: amir.bakhtiari@ymail.com
 * Date: 03/09/2016
 * Time: 09:31 AM
 */

if(!function_exists('captcha')) {
    function captcha() {
        return App\Utility\Utility::random_code();
    }
}

if(!function_exists('check_captcha')) {
    function check_captcha($captcha) {

    }
}

function getIpAddress() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}