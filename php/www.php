<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MuffinTime</title>
        <?php include 'include/head.php'?>
    </head>
    <body>
        <?php 
            include 'include/header.php';
            require_once 'require/calculate.php'
        ?>
        <main>
            <article>
                <h2>Some Minecraft related projects</h2>
                BlueMap Banners <a href="https://modrinth.com/mod/bluemap-banners" target="_blank" rel="noopener">View Mod on Modrinth</a> - <a href="https://github.com/RealMuffinTime/bluemap-banners" target="_blank" rel="noopener">View source on GitHub</a><br>
                The MuffinTime Recourcepack <a href="https://modrinth.com/datapack/muffintime-resource-pack" target="_blank" rel="noopener">View Pack on Modrinth</a> - <a href="https://github.com/RealMuffinTime/muffintime-resource-pack" target="_blank" rel="noopener">View source on GitHub</a><br>
                The MuffinTime Datapack <a href="https://modrinth.com/datapack/muffintime-data-pack" target="_blank" rel="noopener">View Pack on Modrinth</a> - <a href="https://github.com/RealMuffinTime/muffintime-data-pack" target="_blank" rel="noopener">View source on GitHub</a><br>
            </article>
            <article>
                <h2>The MuffinTime Minecraft</h2> 
                Server adresss <buttton tabindex="0"><code>mc.muffintime.tk</code></buttton><br>
                Map <a href="<?php echo protocol() . 'mc.' . $_SERVER['SERVER_NAME']?>">mc.<?=$_SERVER['SERVER_NAME']?></a><br>
                Statistics <a href="<?php echo protocol() . 'mc-stats.' . $_SERVER['SERVER_NAME']?>">mc-stats.<?=$_SERVER['SERVER_NAME']?></a><br>
                Discord <a href="https://discord.gg/mKBhEBgZfa">discord.gg/mKBhEBgZfa</a>
            </article>
            <article>
                <h2>Some Discord bots</h2> 
                <a href="<?php echo protocol() . 'bots.' . $_SERVER['SERVER_NAME']?>">bots.<?=$_SERVER['SERVER_NAME']?></a>
            </article>
            <article>
                <h2>A customized Garry's Mod loading screen</h2>
                <a href="<?php echo protocol() . $_SERVER['SERVER_NAME']?>/loading"><?=$_SERVER['SERVER_NAME']?>/loading</a>
            </article>
            <article>
                <h2>Wanna have fun?</h2>
                <a href="<?php echo protocol() . $_SERVER['SERVER_NAME']?>/fun"><?=$_SERVER['SERVER_NAME']?>/fun</a><br>
                <a href="<?php echo protocol() . $_SERVER['SERVER_NAME']?>/morefun"><?=$_SERVER['SERVER_NAME']?>/morefun</a>
            </article>
        </main>
        <?php include 'include/footer.php'?>
    </body>
</html>