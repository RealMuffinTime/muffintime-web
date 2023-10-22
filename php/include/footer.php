<footer>
    <hr>
    You are here 
    <?php 
    # some-link/ without / is ignored

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
    $index = 0;
    if (str_ends_with($_SERVER['REQUEST_URI'], '/')) {
        $index = 1;
    }
    for ($i=0; $i < sizeof($uri) - 1 - $index; $i++) {
        echo ' > <a href="https://' . $subdomain . $domain . '.tk/' . $uri[$i + 1] . ' "rel="noopener">' . urldecode($uri[$i + 1]) . '</a>';
    }?>
    <br>
    Made with <span alt="love"><3</span> by MuffinTime.
</footer>