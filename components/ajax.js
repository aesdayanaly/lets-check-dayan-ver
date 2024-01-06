function submitScore(score) {
    $(document).ready(function() {
        var data = {
            action: "save",
            score: score
        }

        $.ajax({
            url: '../includes/scores.php',
            type: 'POST',
            data: data,
            success: function(response) {
                if (response == 1) {
                    window.location.href = '../leaderboard.php'; 
                } 
            }
        });

    })
}