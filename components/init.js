document.getElementById("startButton").addEventListener("click", playClickSound);
document.getElementById("multiplayerButton").addEventListener("click", playClickSound);
document.getElementById("instructionsButton").addEventListener("click", playClickSound);
document.getElementById("exitButton").addEventListener("click", playClickSound);

function playClickSound() {
    const newAudio = new Audio();
    newAudio.src = '../clicksound.mp3';
    newAudio.play();
}

window.addEventListener('load', () => {
    spin();
    bgm();
});

function spin() {
    document.documentElement.classList.add('rotating');
    document.querySelector('.object3d').classList.add('rotate');
}

function bgm() {
    var music = new Audio();
    music.src = '../Top Ten - Jeremy Blake.mp3';
    music.play();
}