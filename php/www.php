<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MuffinTime</title>
        <?php include 'include/head.php'?>
    </head>
    <body>
        <?php include 'include/header.php'?>
        <main>
            <article>
                <h4>Here you find some links to services provided:</h4>
                <ul>
                    <li>MuffinTime <a href="https://<?=$_SERVER['SERVER_NAME']?>.tk"><?=$_SERVER['SERVER_NAME']?></a></li>
                    <li>MuffinTime Bots <a href="https://bots.<?=$_SERVER['SERVER_NAME']?>">bots.<?=$_SERVER['SERVER_NAME']?></a></li>
                    <li>MuffinTime Minecraft Server <buttton tabindex="0">mc.muffintime.tk</buttton></li>
                    <li>MuffinTime Minecraft Map <a href="https://mc.<?=$_SERVER['SERVER_NAME']?>">mc.<?=$_SERVER['SERVER_NAME']?></a></li>
                    <li>Wanna have fun? <a href="https://<?=$_SERVER['SERVER_NAME']?>/fun/"><?=$_SERVER['SERVER_NAME']?>/fun</a></li>
                    <li>Wanna have more fun? <a href="https://<?=$_SERVER['SERVER_NAME']?>/morefun/"><?=$_SERVER['SERVER_NAME']?>/morefun</a></li>
                </ul>
            </article>
        </main>
        <?php include 'include/footer.php'?>
    </body>
</html>