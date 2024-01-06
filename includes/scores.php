<?php
// BACK-END FOR DATABASE
include './database.php';
include "./ingame.php";

if(isset($_POST["action"])) {
    if($_POST["action"] == "save") {
       save();
    }
    else {
        echo "<script>console.log('ERROR IN SCORES.PHP');</script>";
    }
}
 
function save() {
    $dbase = new Database();
    $ingame = new Ingame();
    $player = $ingame->getPlayerName();
    $result = $_POST["score"];

    try {
        $stmt = $dbase->connect()->prepare('UPDATE players SET score = ? WHERE username = ?;');
    
        if(!$stmt->execute(array($result, $player))) {
            $stmt = null;
            header("location: ../index.php?error=scoreboardNotUpdated");
            exit();
        }
        $stmt = null;
        echo 1;
    } 
    catch (Exception $e) {
        die("Query Failed in scores.php: " . $e->getMessage());
    }
}

