<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>Send RSS</title>
        <meta name="deskription" content="Apk for RSS" />
        <meta name="keywords" content="RSS,aplication, send" />
        <meta http-equiv="X-UA-Compatioble" content="IE=edge,chrome=1" />
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
    </head>
    <body>
        <form method="get" action="">
            <h1>Send RSS to anyone</h1>
            <div class="url-flex row">
                <input id="url"  name="url" type="url" placeholder="url"/>
            </div>
            <div id="helper"><input id="email"  name="email" type="email" placeholder="email" /></div>
            <div class="email-flex row">

                <div id="debug">
                    <label for="debug">Dynamic rss list</label>
                    <div name="debug"  rows="10">

                    </div>

                </div>
                <button id="delete" name="deletephp">usuń</button>
                <div class="sendlist" >
                    Boguś to ogr
                    Krisu to troll
                    Michaś to Elfi Krul
                </div>

             </div>
             <div style="clear:both;"></div>
            <div class="row">
                <!--<div class="buttonCentre">-->
                    <input id="send" type="submit" value="Send"/>
                    <button id="save" name="save">Save to database</button>
                <!--</div>-->
            </div>
        </form>

    </body>
</html>