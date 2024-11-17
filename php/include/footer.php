<footer>
    <hr>
    You are here 
    <?php
    require_once 'php/require/calculate.php';

    list($domain, $subdomain) = domains();

    if ($subdomain != "") {
        echo '<a href="' . protocol() . $domain . '.tk/" rel="noopener">' . $domain . '</a>';
        echo ' > <a href="' . protocol() . $subdomain . '.' . $domain . '.tk/" rel="noopener">' . $subdomain . '</a>';
    } else {
        echo '<a href="' . protocol() . $domain . '.tk/" rel="noopener">' . $domain . '</a>';
    }


    $uri = explode("/", $_SERVER['REQUEST_URI']);
    if ($subdomain != "") {
        $subdomain = $subdomain . '.';
    }
    if (str_ends_with($_SERVER['REQUEST_URI'], '/')) {
        array_pop($uri);
    }

    for ($i=0; $i < sizeof($uri) - 1; $i++) {
        $urilink = "";
        for ($j=0; $j <= $i; $j++) {
            $urilink = $urilink . $uri[$j + 1] . "/";
        }
        echo ' > <a href="' . protocol() . $subdomain . $domain . '.tk/' . $urilink . ' "rel="noopener">' . urldecode(explode("?", $uri[$i + 1])[0]) . '</a>';
    }?>
    <br>
    Made with <span alt="love"><3</span> by MuffinTime.
</footer>