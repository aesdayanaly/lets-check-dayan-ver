<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LesCheck | Player</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/username.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form class="user-input" method="post" action="./includes/signin.php">
        <div class ="main-container">    
            <div class="title-container enter">
                <div class="wrapper ten">
                    <h3 class="bounce">
                        <span>L</span>
                        <span>E</span>
                        <span>S</span>
                        <span>C</span>
                        <span>H</span>
                        <span>E</span>
                        <span>C</span>
                        <span>K</span>
                    </h3>
                </div>
            </div>
            <div class="group">      
                <input type="text" name="username" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Player Name</label>
            </div> <div class="group1">      
                <input type="text" name="password" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Player Password</label>
            </div>
            <a href="signup.php">Click to Signin</a><br><br>
            <button class="button" type="submit" name="submit">Enter Game</button>   
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
    </form>
</body>
</html>