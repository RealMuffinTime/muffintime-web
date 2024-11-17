<?php
require 'php/require/calculate.php';
list($domain, $subdomain) = domains();

if (array_key_exists('filename', $_GET)) {
    $filename = trim($_GET['filename'], "/");    
} else {
    $filename = '';
}

switch ($subdomain) {
    case '':
    case 'www':
        switch ($filename) {
            case 'fun':
                include 'php/www/fun.php';
                break;

            case 'morefun':
                include 'php/www/morefun.php';
                break;

            case 'loading':
                include 'php/www/loading.php';
                break;
        
            default:
                if ($filename == '') {
                    include 'php/www.php';
                } else {
                    header('HTTP/1.0 404 Not Found');
                    include 'php/errors/404.php';
                }
                break;
        }
        break;
    case 'bots':
        switch ($filename) {
            case 'emoji-dude':
                include 'php/bots/emoji-dude.php';
                break;
        
            case 'fahrstuhlmusik':
                include 'php/bots/fahrstuhlmusik.php';
                break;
        
            default:
                if ($filename == '') {
                    include 'php/bots.php';
                } else {
                    header('HTTP/1.0 404 Not Found');
                    include 'php/errors/404.php';
                }
                break;
        }
        break;

    default:
        header('HTTP/1.0 404 Not Found');
        include 'php/errors/404.php';
        break;
} ?>