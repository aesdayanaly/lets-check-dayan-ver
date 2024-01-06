<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@200&family=Raleway:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/game.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Checkers</title>
</head>
<body>
    <div id="checkerboard"></div>
    <div id="clock"> 
        <span id="timeElapsed"></span>
    </div>
    
    <div class="button-container">
        <button id="backButton">Back to Menu</button>
    </div>

    <div id="p1-score">
        <h3>Player One</h3>
    </div>

    <div id="p2-score">
        <h3 id="p2-name"><?php echo $_SESSION["playername"]; ?></h3>
    </div>

    <div id="confirmation-popup">
        <p>Are you sure you want to go back to the menu?</p>
        <button id="yesButton"></button>
        <button id="noButton"></button>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <h1 class="results" id="popupMessage"></h1>
            <p id="popupScores"></p>
            <button id="retryButton"></button>
            <button id="saveButton"></button>
            <button id="homeButton"></button>
        </div>
    </div>

    <script type="text/javascript" src="./components/board.js"></script>
    <script type="text/javascript" src="./components/piece.js"></script>
    <script type="text/javascript" src="./components/tile.js"></script>
    <script type="text/javascript" src="./components/ai.js"></script>
    <script type="text/javascript" src="./components/clock.js"></script>
    <script type="text/javascript" src="./components/ajax.js"></script>
    <script type="text/javascript" src="./components/player.js"></script>
    
</body>
</html>