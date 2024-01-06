var interval;

document.addEventListener("DOMContentLoaded", function() {
    var startTime = new Date();

    function updateClock() {
        var currentTime = new Date();
        var elapsedTime = new Date(currentTime - startTime);

        var hours = elapsedTime.getUTCHours().toString().padStart(2, '0');
        var minutes = elapsedTime.getUTCMinutes().toString().padStart(2, '0');
        var seconds = elapsedTime.getUTCSeconds().toString().padStart(2, '0');

        document.getElementById('timeElapsed').innerText = hours + ':' + minutes + ':' + seconds;
    }

    interval = setInterval(updateClock, 1000);

    updateClock();
});

function endTime() {
    clearInterval(interval);
}
