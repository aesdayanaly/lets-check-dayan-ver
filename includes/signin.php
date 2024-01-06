<?php

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $score = 0;

    include "./database.php";
    include "./entry.php";
    include "./formhandler.php";
    include "./ingame.php";

    $signin = new Formhandler($username, $score, $password);

    $signin->verifyPlayer();

    $ingame = new Ingame();

    $ingame->getPlayer($username);

    header("location: ../home.php?error=none");
}