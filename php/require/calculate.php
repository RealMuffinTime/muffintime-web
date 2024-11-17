<?php 
function domains() {
    $name = explode(".", $_SERVER['SERVER_NAME']); # security?
    if (sizeof($name) < 3 ) {
        $domain = $name[0];
        $subdomain = "";
    } else {
        $domain = $name[1];
        $subdomain = $name[0];
    }
    return array($domain, $subdomain);
}

function protocol() {
    return $_SERVER['REQUEST_SCHEME'] . '://';
}
?>