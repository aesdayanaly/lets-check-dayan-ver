<?php
class Entry extends Database {
    protected function setUsername($username) {
        $stmt = $this->connect()->prepare('INSERT INTO players (username) VALUES (?);');
        
        if (!$stmt->execute([$username])) {
            $stmt = null;
            header("location: ../index.php?error=setUNfailed");
            exit();
        }
        $stmt = null;
    }

    protected function setPassword($username, $password) {
        $password = $_POST['password']; 
        $stmt = $this->connect()->prepare('UPDATE players SET password = ? WHERE username = ?;');
            
        if (!$stmt->execute([$password, $username])) {
            $stmt = null;
            header("location: ../index.php?error=setPSFailed");
            exit();
        }
        $stmt = null;
    }

    protected function setScore($username, $score) {
        $stmt = $this->connect()->prepare('UPDATE players SET score = ? WHERE username = ?;');
        
        if (!$stmt->execute([$score, $username])) {
            $stmt = null;
            header("location: ../index.php?error=setScoreFailed");
            exit();
        }
        $stmt = null;
    }
    
    
    protected function checkUser($username) {
        $stmt = $this->connect()->prepare('SELECT COUNT(*) FROM players WHERE username = ?;');
        $stmt->execute([$username]);
        $count = $stmt->fetchColumn();
        return $count > 0;
    }
    
      
}
