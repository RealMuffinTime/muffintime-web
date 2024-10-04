<footer>
    <hr>
    You are here 
    <?php

    if (!isset($domain)) {
        require '../calculate.php';
    }
    list($domain, $subdomain) = domains();

    if ($subdomain != "") {
        echo '<a href="https://' . $domain . '.tk/" rel="noopener">' . $domain . '</a>';
        echo ' > <a href="https://' . $subdomain . '.' . $domain . '.tk/" rel="noopener">' . $subdomain . '</a>';
    } else {
        echo '<a href="https://' . $domain . '.tk/" rel="noopener">' . $domain . '</a>';
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
        echo ' > <a href="https://' . $subdomain . $domain . '.tk/' . $urilink . ' "rel="noopener">' . urldecode($uri[$i + 1]) . '</a>';
    }?>
    <br>
    Made with <span alt="love"><3</span> by MuffinTime.
</footer>