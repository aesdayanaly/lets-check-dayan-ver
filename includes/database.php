<?php

class Database {
    
    public function connect() {
        try {
            $dbusername = "root";
            $dbpassword = "";
            $db = new PDO('mysql:host=localhost;dbname=scoreboard', $dbusername, $dbpassword);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "CONNECTED successfully";
            return $db;
        }
        catch (PDOException $e) {
            print "Error: " . $e->getMessage() . "<br>";
            die();
        }
    }
}