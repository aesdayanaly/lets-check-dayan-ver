<?php
    session_start();
    session_unset();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LesCheck | Start Game</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
    <div class="wrap">
        <div class="main-container">
            <div class="title-container">
                <div class="wrapper ten">
                    <div class="title">
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
            </div>
        </div>
        <div class="start-btn" onclick="audio.play()">
            <a href="./signup.php"><img src="./images/PNG/start.png"></a>
        </div>
        <div class="list-popup">
            <a href="#" onclick="showList()"><img src="./images/PNG/list.png"></a>
            <div id="group" class="list-grp">
                <p><b>Sheeshables</b></p>
                <p>Jamie Jasmine Sano</p>
                <p>Vashti Karmelli Camu</p>
                <p>Diane Mae Corcino</p>
                <p>Paul Adrian Torres</p>
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
    </div>

    <script>
        const audio = new Audio();
        audio.src = './clicksound.mp3';

        function showList() {
            audio.play();
            var groupList = document.getElementById('group');
            groupList.classList.toggle('show');
        }

        window.addEventListener('load', () => {
            bgm();
        });

        function bgm() {
            var music = new Audio();
            music.src = '../Top Ten - Jeremy Blake.mp3';
            music.play();
        }
    </script>
</body>
</html>