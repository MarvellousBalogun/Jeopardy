function adjustScore(teamId) {
    var inputElement = document.getElementById(teamId + "-input");
    var scoreElement = document.getElementById(teamId + "-score");

    if (inputElement.value.trim() !== "") {
        var newScore = parseInt(inputElement.value);
        var currentScore = parseInt(scoreElement.textContent);
        var updatedScore = currentScore + newScore;
        scoreElement.textContent = updatedScore;
        inputElement.value = ""; 
    }
}
