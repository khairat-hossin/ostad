<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        .text-center {
            text-align: center;
        }

        .row {
            width: 100%;
            height: auto;
            margin: 0 auto;
            /* padding: 5px; */
            display: flex;
            justify-content: center;
            /* border-bottom: 2px solid black; */
        }

        .col-6 {
            width: 50%;
            height: auto;
            margin: 5px;
            padding: 5px;
            display: inline;
        }

        .form-group {
            width: 100%;
            height: auto;
            /* margin: 0 auto; */
            padding: 10px;
            justify-content: right;
        }
    </style>
</head>

<body>
    <div class="row text-center">
        <h1>Hello there, welcome to my Grade Calculator</h1>

    </div>

    <?php
    function getLetterGrade($averagescore)
    {
        if ($averagescore >= 90) {
            return 'A';
        } elseif ($averagescore >= 80) {
            return 'B';
        } elseif ($averagescore >= 70) {
            return 'C';
        } elseif ($averagescore >= 60) {
            return 'D';
        } else {
            return 'F';
        }
    }
    ?>
    <div class="row">
        <div class="col-6">
            <form method="POST" action="">
                <label for="score1">Score in Test 1:</label>
                <input type="number" name="score1" required placeholder="enter score 1"><br>

                <label for="score2">Score in Test 2:</label>
                <input type="number" name="score2" required placeholder="enter score 2"><br>

                <label for="score3">Score in Test 3:</label>
                <input type="number" name="score3" required placeholder="enter score 3"><br>

                <button type="submit"> Submit </button>
            </form>
        </div>
        <div class="col-6">
            <?php

            if (isset($_POST["score1"]) && isset($_POST["score2"]) && isset($_POST["score3"])) {
                $score1 = $_POST["score1"] ?? 0;
                $score2 = $_POST["score2"] ?? 0;
                $score3 = $_POST["score3"] ?? 0;

                $averagescore = ($score1 + $score2 + $score3) / 3;
                $letterGrade = getLetterGrade($averagescore);

                echo "Average Score: $averagescore<br>";
                echo "Grade in Letter: $letterGrade";
            }

            ?>

        </div>
    </div>

</body>

</html>