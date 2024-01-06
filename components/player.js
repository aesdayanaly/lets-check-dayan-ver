const canvas = document.createElement('canvas');
const context = canvas.getContext('2d');
const board = document.getElementById('checkerboard');

canvas.width = 500;
canvas.height = 500;
canvas.style.border = '4px solid #FFE096';
canvas.style.borderRadius = '25px';

board.appendChild(canvas);

const tilesize = canvas.width / 8;

const tiles = [];

let moving = false;
let mousepos = 0;
let piecemoving = null;
let removed = false;
let removedPlayer = 0;
let score = 0;

function init(){

    let colorblack = false;
    let indexOfSqr = 0;
    for(let r=0; r<8; r++){
        for(let c=0; c<8; c++){
            let p = null;
            if(colorblack){
                if(BOARD_DEF.board[sqr48[indexOfSqr]] != PIECE_TYPE.NO_PIECE)
                {
                    p = new Piece(c*tilesize, r*tilesize, tilesize, BOARD_DEF.board[sqr48[indexOfSqr]]);
                }
                tiles.push(new Tile(c*tilesize, r*tilesize, tilesize, colorblack, sqr48[indexOfSqr], p));
                indexOfSqr++;
            }else{
                tiles.push(new Tile(c*tilesize, r*tilesize, tilesize, colorblack, SQR.NONE, p));
            }
            colorblack = !colorblack;
        }
        colorblack = !colorblack;
    }
}

function draw(){
    context.clearRect(0, 0, canvas.width, canvas.height);

    for(let i=0; i<tiles.length; i++){
        tiles[i].draw(context);
    }

    for(let i=0; i<tiles.length; i++){
        tiles[i].drawPiece(context);
    }
}

function collide( source, target ) {
    return !(
        ( ( source.y + source.h ) < ( target.y ) ) ||
        ( source.y > ( target.y + target.h ) ) ||
        ( ( source.x + source.w ) < target.x ) ||
        ( source.x > ( target.x + target.w ) )
    );
}

canvas.onmouseup = function(e){
    moving = false;
    let mp = getPos(canvas, e);
   
    let donePlayerMove = false;
    for(let i=0; i<tiles.length; i++){
        let t = {x: tiles[i].x, y: tiles[i].y, w: tiles[i].size, h: tiles[i].size};
        if(collide(mp, t) && piecemoving != null && tiles[i] != piecemoving && tiles[i].sqr != SQR.NONE){
            if(piecemoving.piece == null) return;
            let move = piecemoving.piece.move(piecemoving.sqr, tiles[i].sqr);

            if(move == null) return;
            if(!updatePiecesPos(piecemoving, move, i, BOARD_DEF)) break;
            donePlayerMove = true;
            break;
        }
    }

    if(piecemoving != null && piecemoving.piece != null && !donePlayerMove){
        piecemoving.piece.x = piecemoving.x;
        piecemoving.piece.y = piecemoving.y;
        piecemoving.piece.size = piecemoving.size;
        piecemoving = null;
    }
}

function updatePiecesPos(piecemoving, move, i, bf){
    if(!move[0]) return false;

    switch(move[1])
    {
        case MOVE_TYPE.MOVE_NORMAL:
        {   
            tiles[i].piece = piecemoving.piece;
            tiles[i].piece.x = tiles[i].x;
            tiles[i].piece.y = tiles[i].y;
            tiles[i].piece.size = tiles[i].size;
            piecemoving.piece = null;
            piecemoving = null;

            updateSuperPiece(bf.rPieces, PIECE_TYPE.SUPER_RED);
            updateSuperPiece(bf.yPieces, PIECE_TYPE.SUPER_YELLOW);

            break;
        }
        case MOVE_TYPE.MOVE_CAPTURE:
        {
            tiles[i].piece = piecemoving.piece;
            tiles[i].piece.x = tiles[i].x;
            tiles[i].piece.y = tiles[i].y;
            tiles[i].piece.size = tiles[i].size;            
            for(let toRemove of tiles){
                if (toRemove.sqr == move[2]){
                    toRemove.piece = null;
                    removed = true;
                    removedPlayer = bf.move;
                    score += 1;
                    break;
                }
            }
            piecemoving.piece = null;
            piecemoving = null;
            updateSuperPiece(bf.rPieces, PIECE_TYPE.SUPER_RED);
            updateSuperPiece(bf.yPieces, PIECE_TYPE.SUPER_YELLOW);
        }
        
    }   
    return true;
}

function isRemoved() {
    return removed;
}

function updateScores(player, score) {
    if (player == 1 && score !== null) {
        let play = 'P2';
        BOARD_DEF.scores[play] += score;
        for (let i = 0; i < score; i++){
            $('#p2-score').append("<div class='capturedPiece'><img src='./images/1.svg'></div>");
        }
    }
    if (player == 2 && score !== null) {
        let play = 'P1';
        BOARD_DEF.scores[play] += score;
        for (let i = 0; i<score; i++){
            $('#p1-score').append("<div class='capturedPiece'><img src='./images/2.svg'></div>");
        }
    }
    removed = false;
    removedPlayer = 0;
    score = 0;
} 

function updateSuperPiece(piecePos, pieceType){
    for(let tile of tiles){
        for(let rP of piecePos){
            if(BOARD_DEF.board[rP] == pieceType && tile.sqr == rP){
                tile.piece.pieceType = pieceType;
                break;
            }
        }
    }
}

canvas.onmousedown =  function(e){

    let mp = getPos(canvas, e);

    for(let i=0; i<tiles.length; i++){
        let t = {x: tiles[i].x, y: tiles[i].y, w: tiles[i].size, h: tiles[i].size};
        if(collide(mp, t) && tiles[i].piece != null && tiles[i].sqr != SQR.NONE){

            let pTypeSuper = tiles[i].piece.pieceType == PIECE_TYPE.SUPER_RED ? PLAYER.P1 : PLAYER.P2;

            if(BOARD_DEF.move != tiles[i].piece.pieceType){
                if(pTypeSuper != BOARD_DEF.move)
                    break;
            }

            for(let moves of BOARD_DEF.availableMoves){
                if(tiles[i].sqr == moves.piece){
                    piecemoving = tiles[i];
                    mp.size = tilesize;
                    piecemoving.piece.mouseMove(mp);
                    moving = true;
                    break;
                }
            }
            break;
        }
    }
}

canvas.onmousemove = function(e){
    if(moving && piecemoving != null){
        let pos = getPos(canvas, e);
        pos.size = tilesize;
        piecemoving.piece.mouseMove(pos);
    }
    let cleared = isRemoved();
    if(cleared){
        updateScores(removedPlayer, score);
    }
    score = 0;
}

function getPos(c, e){
    var rect = c.getBoundingClientRect();
    return {x:e.clientX - rect.left, y: e.clientY - rect.top, h: 1, w:1};
}

initBoard(BOARD_DEF);
init();

if(DEBUG){
    var zz = document.createElement('div');
    document.body.append(zz);
}

let counterAlert = 0;
let MoveCounter = 0;
let stopLoop = false;

function loop() {
    if(DEBUG){
        zz.innerHTML = "";
        zz.innerHTML = printBoard();
    }

    draw();

    if(BOARD_DEF.move == PLAYER.P1){
        MoveCounter++;
        if(MoveCounter > 20){
            if(BOARD_DEF.availableMoves.length > 0) {
                generateMove(PLAYER.P1, BOARD_DEF);
                MoveCounter = 0;
            }
        }
    }

    if(BOARD_DEF.availableMoves.length <= 0){
        counterAlert++;
    }
    if(counterAlert > 30){
        let player = $('#p2-name').text();
        let p = BOARD_DEF.move == PLAYER.P1 ? player : "Player One"; 
        let result = p + " wins!";
        $('#popupMessage').text(result);
        $('#popupScores').html("Player One score: " + BOARD_DEF.scores['P1'] + "<br>" + player + " score: " + BOARD_DEF.scores['P2']);
        $('#myModal').css('display', 'block');
        endTime();
    }
    if(!stopLoop)
        requestAnimationFrame(loop);
}

requestAnimationFrame(loop);

$('#closeModal').on('click', function () {
    $('#myModal').css('display', 'block');
});

document.addEventListener('DOMContentLoaded', function() {
    const backButton = document.getElementById('backButton');
    const confirmationPopup = document.getElementById('confirmation-popup');
    const yesButton = document.getElementById('yesButton');
    const noButton = document.getElementById('noButton');
    const retryButton = document.getElementById('retryButton');
    const homeButton = document.getElementById('homeButton');
    const saveButton = document.getElementById('saveButton');

    backButton.addEventListener('click', () => {
        confirmationPopup.style.display = 'block';
    });

    yesButton.addEventListener('click', () => {
        window.location.href = './home.php';
    });

    noButton.addEventListener('click', () => {
        confirmationPopup.style.display = 'none';
    });

    retryButton.addEventListener('click', () => {
        resetGame();
    });

    saveButton.addEventListener('click', () => {
        submitScore(BOARD_DEF.scores['P2']);
        console.log("SCORE SUBMITTED?");
    });

    homeButton.addEventListener('click', () => {
        window.location.href = './home.php';
    });

});

function resetGame() {
    $('#p1-score').html('');
    $('#p2-score').html('');

    BOARD_DEF.scores['P1'] = 0;
    BOARD_DEF.scores['P2'] = 0;
    window.location.href = './multiplayer.php';

}