window.onload = function()
{
    var today = new Date();

    // Force it to dark on Spooktober or when it's late
    var isHalloween = today.getMonth() == 10 && today.getDate() >= 15 || today.getMonth() == 11 && today.getDate() <= 5;

    var darkMode = today.getHours() >= 19 || today.getHours() <= 7;

    var isSupportsSystemDarkMode = navigator.userAgent.match(/Chrome\/(\d+)/)[1] >= 76;

    var systemDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (isHalloween || (isSupportsSystemDarkMode ? systemDarkMode : darkMode)) {
        $("body").addClass("dark");
    }
}

function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode, volume, lang, gamemodeNice )
{
    $("#serverName").text( servername );
    $("#serverMap").text( mapname );
    $("#serverGamemode").text( gamemodeNice );
    $("#mapimg").attr("src", "asset://mapimage/" + mapname );
    $("body").css( "background-image", "url( 'asset://mapimage/" + mapname + "' )" );

    $(".server_info").addClass( "visible" );

    // Do with these what you will :)
    // this function gets called only when joining a multiplayer server
    /*$("#spambox").append("serverurl: " + serverurl + "<br>");
    $("#spambox").append("servername: " + servername + "<br>");
    $("#spambox").append("maxplayers: " + maxplayers + "<br>");
    $("#spambox").append("steamid: " + steamid + "<br>");
    $("#spambox").append("gamemode: " + gamemode + "<br>");
    $("#spambox").append("mapname: " + mapname + "<br>");
    $("#spambox").append("volume: " + volume + "<br>");
    $("#spambox").append("lang: " + lang + "<br>");*/
}

// A file has begun downloading
function DownloadingFile( file )
{
    //$("#spambox").prepend( "<span style='color:red'>" + file + "</span><br>");
}

// This will not be called when DownloadingFile() is
function SetStatusChanged( status )
{
    //$("#spambox").prepend( status + "<br>");
}