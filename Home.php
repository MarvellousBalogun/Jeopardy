<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeopardy Board</title>
    <link rel="stylesheet" href="jeopardy.css">
</head>
<body>

    <header>
        <h1>Jeopardy Board</h1>
    </header>
    <form action="Home.php" method="post">
        <section class="scoreboard">
            <div class="team" id="team1">
                <h2>Team 1</h2>
                <p class="score">
                    Score: 
                    <input class="scoreDisplay" name="Team1_score" id="team1-score" value=0 readonly>
                </p>
                <input type="number" id="team1-input" class="score-adjust" placeholder="Adjust score">
                <div class="update" onclick="adjustScore('team1')" >Update</div>
            </div>
            <div class="team" id="team2">
                <h2>Team 2</h2>
                <p class="score">
                    Score: 
                    <input class="scoreDisplay" name="Team2_score" id="team2-score" value=0 readonly>
                </p>
                <input type="number" id="team2-input" class="score-adjust" placeholder="Adjust score">
                <div class="update" onclick="adjustScore('team2')">Update</div>
            </div>
            <div class="team" id="team3">
                <h2>Team 3</h2>
                <p class="score">
                    Score: 
                    <input class="scoreDisplay" name="Team3_score" id="team3-score" value=0 readonly>
                </p>
                <input type="number" id="team3-input" class="score-adjust" placeholder="Adjust score">
                <div class="update" onclick="adjustScore('team3')">Update</div>
            </div>
            <div class="team" id="team4">
                <h2>Team 4</h2>
                <p class="score">
                    Score: 
                    <input class="scoreDisplay" name="Team4_score" id="team4-score" value=0 readonly>
                </p>
                <input type="number" id="team4-input" class="score-adjust" placeholder="Adjust score">
                <div class="update" onclick="adjustScore('team4')">Update</div>
            </div>
            <input type="submit"  name="endgame" value="endgame">
        </section> 
    </form>

    <div class="popup" id="popup">
        <h2 id="questionTitle"> Hello </h2>
        <p id="question_text"> This is a jeopardy question. </p>
        <button type="button" id="closePopup">OK</button>
    </div>

    <div class="jeopardy-board">
        <div class="category">
            <div class="category-title">Literature</div>
            <div class="question" id="Category1.1">$100</div>
            <div class="question" id="Category1.2">$200</div>
            <div class="question" id="Category1.3">$300</div>
            <div class="question" id="Category1.4">$400</div>
            <div class="question" id="Category1.5">$500</div>
        </div>
        <div class="category">
            <div class="category-title">World Capitals</div>
            <div class="question" id="Category2.1">$100</div>
            <div class="question" id="Category2.2">$200</div>
            <div class="question" id="Category2.3">$300</div>
            <div class="question" id="Category2.4">$400</div>
            <div class="question" id="Category2.5">$500</div>
        </div>
        <div class="category">
            <div class="category-title">Science</div>
            <div class="question" id="Category3.1">$100</div>
            <div class="question" id="Category3.2">$200</div>
            <div class="question" id="Category3.3">$300</div>
            <div class="question" id="Category3.4">$400</div>
            <div class="question" id="Category3.5">$500</div>
        </div>
        <div class="category">
            <div class="category-title">American History</div>
            <div class="question" id="Category4.1">$100</div>
            <div class="question" id="Category4.2">$200</div>
            <div class="question" id="Category4.3">$300</div>
            <div class="question" id="Category4.4">$400</div>
            <div class="question" id="Category4.5">$500</div>
        </div>
    </div>

    <a href="project-summary.html" id="project-summary-link">Project Summary</a>
    <script src="jeopardy.js"></script>
</body>
</html>

<?php
    
    if(isset($_POST["endgame"])){

        if(isset($_POST["Team1_score"])
            && isset($_POST["Team2_score"])
            && isset($_POST["Team3_score"])
            && isset($_POST["Team4_score"])){

                 $username = $_SESSION["username"];
                
                $Team1_score = $_POST["Team1_score"];
                $Team2_score = $_POST["Team2_score"];
                $Team3_score = $_POST["Team3_score"];
                $Team4_score = $_POST["Team4_score"];

                $Teams = array($Team1_score, $Team2_score,
                                $Team3_score, $Team4_score);

                $WinnerTeam_points = 0;
                
                $n = sizeof($Teams);
                for($i = 0; $i < $n; $i++){

                    $swapped = False;

                    for($j = 0; $j < $n - $i - 1; $j++){

                        if($Teams[$j] > $Teams[$j+1]){

                            $t = $Teams[$j];
                            $Teams[$j] = $Teams[$j+1];
                            $Teams[$j+1] = $t;
                            $swapped = True;
                        }
                    }

                }

                /*$WinnerTeam_points = $Teams[3];

                $sql = "UPDATE users
                SET Winner Team Points = $WinnerTeam_points
                WHERE Username = '$username'";

                mysqli_query($conn, $sql);*/
                
            }

    }


    //mysqli_close($conn);

?>