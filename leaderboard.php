<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LesCheck | Leaderboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Londrina+Solid:wght@100;300;400;900&family=Poppins:wght@400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/leaderboard.css">
</head>
<body>
    <div class="main-container box">
        <div class="title-container">
            <h1 class="instr-title">LesCheck</h1>
            <h4 class="sub-title">Leaderboard</h4>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Players</th>
                    <th>Scores</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include './includes/database.php';

                    $dbase = new Database();
                    $stmt = $dbase->connect()->prepare('SELECT * FROM players ORDER BY score DESC;');
                    $stmt->execute();
                    $counter = 0;
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row["username"]; ?></td>
                            <td><?php echo $row["score"]; ?></td>
                        </tr>
                    <?php } 
                ?>
            </tbody>
        </table>
        <div class="button-container">
            <a href="./home.php"><button class="button">Back to Menu</button></a>
        </div>
    </div>
    
    <DIV class="spinning">
        <DIV class="object3d chess-defaults">
            <!-- The Stage -->
            <div class="reusable-rect main-stage">
                <div class="sides side1"></div>
                <div class="sides side2"></div>
            
                <!-- Elements over Stage -->
                <div class="main-elements">
                    <DIV class="board">
                        <!-- RED -->
                        <div class="piece PAWN" style="--v:5;--h:1;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece PAWN" style="--v:5;--h:3;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece PAWN" style="--v:5;--h:5;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                        
                        <div class="piece PAWN" style="--v:5;--h:7;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece PAWN" style="--v:6;--h:0;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece PAWN" style="--v:6;--h:2;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece PAWN" style="--v:6;--h:4;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                        
                        <div class="piece PAWN" style="--v:6;--h:6;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                        
                        <div class="piece PAWN" style="--v:7;--h:1;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece PAWN" style="--v:7;--h:3;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece PAWN" style="--v:7;--h:5;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                        
                        <div class="piece PAWN" style="--v:7;--h:7;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div> 
                        
                        <!-- BLUE -->
                        <div class="piece BLUE PAWN" style="--v:0;--h:0;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece BLUE PAWN" style="--v:0;--h:2;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece BLUE PAWN" style="--v:0;--h:4;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                        
                        <div class="piece BLUE PAWN" style="--v:0;--h:6;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece BLUE PAWN" style="--v:1;--h:1;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece BLUE PAWN" style="--v:1;--h:3;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece BLUE PAWN" style="--v:1;--h:5;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                        
                        <div class="piece BLUE PAWN" style="--v:1;--h:7;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                        
                        <div class="piece BLUE PAWN" style="--v:2;--h:0;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece BLUE PAWN" style="--v:2;--h:2;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                    
                        <div class="piece BLUE PAWN" style="--v:2;--h:4;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>
                        
                        <div class="piece BLUE PAWN" style="--v:2;--h:6;">
                            <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                        </div>           
                    </DIV>
                </div>
            </div>
        </DIV>
    </DIV>
    <div class="circles">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</body>
</html>
