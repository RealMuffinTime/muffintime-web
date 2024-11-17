<!DOCTYPE html>
<html lang="en">
    <head>
        <title>emoji dude | MuffinTime Bots</title>
        <?php include 'php/include/head.php'?>
    </head>
    <body>
        <?php include 'php/include/header.php'?>
        <main>
            <article>
                <h2>emoji dude#7404</h2>
                <p>
                    A tiny emoji writing and utility Discord bot in Phyton.<br>
                    Every feature can be enabled/disabled.<br>
                    All Commands are enabled and all Events are disabled by default.
                </p>
                <p>
                    <a href="https://discord.com/oauth2/authorize?client_id=580065523098976256&permissions=8&integration_type=0&scope=bot" target="_blank" rel="noopener">Invite to your guild</a> - 
                    <a href="https://discord.gg/Da9haye" target="_blank" rel="noopener">Discord server</a> - 
                    <a href="https://github.com/RealMuffinTime/emoji-dude" target="_blank" rel="noopener">View source on GitHub</a>
                </p>
                
                <!-- Content tabs html based on https://www.mkdocs.org/ https://squidfunk.github.io/mkdocs-material/reference/content-tabs/-->

                <h3>Category Commands</h3>
                <div class="tabbed-set">
                    <input type="radio" name="commands" id="command-ping" checked>
                    <input type="radio" name="commands" id="command-backupchannel">
                    <input type="radio" name="commands" id="command-clear">
                    <input type="radio" name="commands" id="command-emojis">
                    <input type="radio" name="commands" id="command-help">
                    <input type="radio" name="commands" id="command-screenshare">
                    <div class="tabbed-labels">
                        <label for="command-ping">ping</label>
                        <label for="command-backupchannel">backupchannel</label>
                        <label for="command-clear">clear</label>
                        <label for="command-emojis">emojis</label>
                        <label for="command-help">help</label>
                        <label for="command-screenshare">screenshare</label>
                    </div>
                    <div class="tabbed-content">
                        <div class="tabbed-block">
                            <h4><code>ed.ping</code></h4>
                            <ul>
                                <li>PONG! Pings and message round-trips.</li>
                            </ul>
                        </div>
                        <div class="tabbed-block">
                            <h4><code>ed.backupchannel &lt;fromChannelId&gt; &lt;toChannelId&gt;</code></h4>
                            <ul>
                                <li>Can be used to back up a channel to another one.</li>
                                <li>This command is initially disabled, since it is currently only available to bot creators.</li>
                            </ul>
                        </div>
                        <div class="tabbed-block">
                            <h4><code>ed.clear &lt;user&gt;</code></h4>
                            <ul>
                                <li>Deletes messages up to a specific point, filtered by user, if given.</li>
                                <li>You need to reply to a message, then the bot deletes all messages up to the replied one.</li>
                            </ul>
                        </div>
                        <div class="tabbed-block">
                            <h4><code>ed.emojis &lt;emoji_combinations&gt; &lt;amount&gt;</code></h4>
                            <ul>
                                <li>Sends many emojis, possible to be multiplied by 1-27 times.</li>
                                <li>All emojis of Discord are supported, also custom ones and custom animated ones.</li>
                                <li>If you don't have Nitro, you need to insert animated emojis as following <code>:name_of_animated_emoji:</code>.</li>
                                <li><code>&lt;emoji_combinations&gt;</code> can be just one, or multiple, but there must be no space between these emojis!</li>
                                <li>You can reply to a previous message so the bot can reply to that message with these emojis.</li>
                            </ul>
                        </div>
                        <div class="tabbed-block">
                            <h4><code>ed.help &lt;category/command&gt;</code></h4>
                            <ul>
                                <li>Shows a help menu with categorys and their commands.</li>
                                <li>There are currently two categorys <code>commands</code> and <code>events</code>.</li>
                                <li>When admins request the help page for a command, they can update command specific settings.</li>
                                <li>This command can not be deactivated.</li>
                            </ul>
                        </div>
                        <div class="tabbed-block">
                            <h4><code>ed.screenshare</code></h4>
                            <ul dir="auto">
                                <li>Sends a screenshare link for your voice channel.</li>
                                <li>This command is initially disabled, since Discord released an update this is no longer useful.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Category Events</h3>
                <div class="tabbed-set">
                    <input type="radio" name="events" id="event-autopollthreadcreation" checked>
                    <input type="radio" name="events" id="event-autoreaction">
                    <input type="radio" name="events" id="event-managedafk">
                    <input type="radio" name="events" id="event-managedchannel">
                    <div class="tabbed-labels">
                        <label for="event-autopollthreadcreation">AutoPollThreadCreation</label>
                        <label for="event-autoreaction">AutoReaction</label>
                        <label for="event-managedafk">ManagedAFK</label>
                        <label for="event-managedchannel">ManagedChannel</label>
                    </div>
                    <div class="tabbed-content">
                        <div class="tabbed-block">
                            <h4>AutoPollThreadCreation</h4>
                            <ul>
                                <li>Automatically creates a thread, when the <code>Simple Poll#9879</code> bot creates new polls.</li>
                            </ul>
                        </div>
                        <div class="tabbed-block">
                            <h4>AutoReaction</h4>
                            <ul>
                                <li>The bot reacts to specific parts in a message with emotes.</li>
                                <li>Supported phrases are <code>cum</code>, <code>poop</code>,  <code>cool</code> and derivations.</li>
                            </ul>
                        </div>
                        <div class="tabbed-block">
                            <h4>ManagedAFK</h4>
                            <ul>
                                <li>Auto moves full muted users after specific amount of time to the guild set AFK channel.</li>
                                <li>The last used channel is saved, so when a user is no longer full mute, he will be automatically moved to his last voice channel.</li>
                                <li>You need to set an AFK channel and give permissions to move members.</li>
                            </ul>
                        </div>
                        <div class="tabbed-block">
                            <h4>ManagedChannel</h4>
                            <ul>
                                <li>Automatically creates voice channels when needed, and removes unused.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </main>
        <?php include 'php/include/footer.php'?>
    </body>
</html>