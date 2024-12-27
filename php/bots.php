<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MuffinTime Bots</title>
        <?php include 'include/head.php'?>
    </head>
    <body>
        <?php 
            include 'include/header.php';
            require_once 'require/calculate.php'
        ?>
        <main>
            <article>
                <img src="img/fahrstuhlmusik.webp">
                <h2>fahrstuhlmusik#0251</h2>
                <p>
                    A bot which plays hours and hours elevatormusic.<br>
                    <a href="https://discord.com/api/oauth2/authorize?client_id=669888310507995136&permissions=2112&scope=bot" target="_blank" rel="noopener">Invite to your guild</a> - <a href="<?php echo protocol();?><?=$_SERVER['SERVER_NAME']?>/fahrstuhlmusik" rel="noopener">View more infos about this bot</a> - <a href="https://github.com/RealMuffinTime/fahrstuhlmusik" target="_blank" rel="noopener">View on GitHub</a>
                </p>
            </article>
            <article>
                <img src="img/emoji-dude.webp">
                <h2>emoji dude#7404</h2>
                <p>
                    A small utility bot, with some fun emoji stuff.<br>
                    <a href="https://discord.com/api/oauth2/authorize?client_id=580065523098976256&permissions=2112&scope=bot" target="_blank" rel="noopener">Invite to your guild</a> - <a href="<?php echo protocol();?><?=$_SERVER['SERVER_NAME']?>/emoji-dude" rel="noopener">View more infos about this bot</a> - <a href="https://github.com/RealMuffinTime/emoji-dude" target="_blank" rel="noopener">View on GitHub</a>
                </p>
            </article>
        </main>
        <?php include 'include/footer.php'?>
    </body>
</html>