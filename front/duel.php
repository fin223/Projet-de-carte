<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> carte yu-gi-ho </title>
    <link rel="shortcut icon" type="image/png" href="yugioh.ico" sizes="196x196">
    
    <link rel="stylesheet" href="duel.scss">
</head>
<body>
    
<div class="text-center">
        <a style='margin: 1rem 0;' id="play" class='btn btn-success' role='button'><i class='fa fa-play-circle' aria-hidden='true'></i> Play Test Deck</a>
        <div id="playtest" title="Playtest Beta">
            <div class="game-board">
                <div class="actions">
                    <input type="button" value="Import" id="import">
                    <input type="button" value="Export" id="export">
                    <input type="button" value="New Hand" id="new">
                    <input type="button" value="View Deck" id="view">
                    <input type="button" value="Draw Card" id="deal">
                    <input type="button" value="Shuffle Deck" id="shuffle">
                    <div class="tools">
                        <img src="https://i.imgur.com/BYD9LdN.png" class="token"/>
                        <img src="https://i.imgur.com/1AJdr5l.png" alt="" class="coin">
                        <img src="https://i.imgur.com/oPHhyyo.png" alt="" class="dice">
                        <div style="display:inline-block"><span id="results"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAABCAQAAAAoEQWKAAAADElEQVR42mNkGCAAAADyAAKG+BtxAAAAAElFTkSuQmCC"></span></div>
                    </div>
                </div>
                <div id="deckmenu" title="Cards in Deck"></div>
                <div class="testcard-slot-row" id="field">
                    <div class="testcard-slot"></div>
                    <div class="testcard-slot"></div>
                    <div class="testcard-slot" id="center-m-z"></div>
                    <div class="testcard-slot"></div>
                    <div class="testcard-slot"></div>
                </div>
                <div class="testcard-slot-row">
                    <div class="testcard-slot"><img src="http://img3.wikia.nocookie.net/__cb20130902115200/yugioh/images/e/ee/Back-ZX-Site.png" id="playerextradeck" />
                        <div id="deckcount"><p></p></div>
                    </div>
                    <div class="testcard-slot"></div>
                    <div class="testcard-slot"></div>
                    <div class="testcard-slot"></div>
                    <div class="testcard-slot"><img src="http://img3.wikia.nocookie.net/__cb20130902115200/yugioh/images/e/ee/Back-ZX-Site.png" id="playerdeck" />
                        <div id="deckcount"><p></p></div>
                    </div>
                </div>
                <div id="hand">
                    <div class="game-board"></div>
                </div>
                <div class="export" title="Export Code"></div>
                <div class="import" title="Import Code"></div>
            </div>          
        </div>
    </div>

    <script src="duel.js"></script>
</body>
</html>