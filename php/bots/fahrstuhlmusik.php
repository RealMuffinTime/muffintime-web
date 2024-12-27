<!DOCTYPE html>
<html lang="en">
    <head>
        <title>fahrstuhlmusik | MuffinTime Bots</title>
        <?php include 'php/include/head.php'?>
    </head>
    <body>
        <?php include 'php/include/header.php'?>
        <main>
            <article>
                <img src="img/fahrstuhlmusik.webp">
                <h2>fahrstuhlmusik#0251</h2>
                <p>
                    A bot that plays elevator music for hours and hours.<br>
                    For a support channel or even if you just like to listen to elevator music.
                </p>
                <p>
                    <a href="https://discord.com/api/oauth2/authorize?client_id=669888310507995136&permissions=2112&scope=bot" target="_blank" rel="noopener">Invite to your guild</a> - 
                    <a href="https://discord.gg/Da9haye" target="_blank" rel="noopener">Discord server</a> - 
                    <a href="https://github.com/RealMuffinTime/fahrstuhlmusik" target="_blank" rel="noopener">View source on GitHub</a>
                </p>
                
                <!-- Content tabs html based on https://www.mkdocs.org/ https://squidfunk.github.io/mkdocs-material/reference/content-tabs/-->

                <h3>Commands</h3>
                <div class="tabbed-set">
                    <input type="radio" name="commands" id="command-elevatorinfo" checked>
                    <input type="radio" name="commands" id="command-elevatormusic">
                    <input type="radio" name="commands" id="command-fahrstuhlmusik">
                    <input type="radio" name="commands" id="command-elevatorreview">
                    <input type="radio" name="commands" id="command-elevatorshutdown">
                    <div class="tabbed-labels">
                        <label for="command-elevatorinfo">elevatorinfo</label>
                        <label for="command-elevatormusic">elevatormusic</label>
                        <label for="command-fahrstuhlmusik">fahrstuhlmusik</label>
                        <label for="command-elevatorreview">elevatorreview</label>
                        <label for="command-elevatorshutdown">elevatorshutdown</label>
                    </div>
                    <div class="tabbed-content">
                        <div class="tabbed-block">
                            <h4><code>/elevatorinfo</code></h4>
                            <ul>
                                <li>Shows infos, stats and help about the bot.</li>
                            </ul>
                        </div>
                        <div class="tabbed-block">
                            <h4><code>/elevatormusic</code></h4>
                            <ul>
                                <li>Plays elevator music in your channel.</li>
                            </ul>
                        </div>
                        <div class="tabbed-block">
                            <h4><code>/fahrstuhlmusik</code></h4>
                            <ul>
                                <li>Also plays elevator music in your channel.</li>
                            </ul>
                        </div>
                        <div class="tabbed-block">
                            <h4><code>/elevatorreview</code></h4>
                            <ul>
                                <li>You can rate and review the bot on different sites.</li>
                            </ul>
                        </div>
                        <div class="tabbed-block">
                            <h4><code>/elevatorshutdown</code></h4>
                            <ul>
                                <li>The bot leaves the current channel and stops playing.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </main>
        <?php include 'php/include/footer.php'?>
    </body>
</html>