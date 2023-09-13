<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
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
    <?php
    function getWeatherReport($temperature)
    {
        if ($temperature <= 4) {
            return "It's freezing!";
        } elseif ($temperature >4 and $temperature <= 20) {
            return "It's cool.";
        }else {
            return "It's warm.";
        }
    }


    $temperature = isset($_POST['temperature']) ? $_POST['temperature'] : null;
    $output = null;
    if ($temperature) {
        $output = getWeatherReport($temperature);
    }
    ?>
    <div class="row text-center">
        <h1>Hello there, welcome to my Weather Report</h1>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Enter Temperature</h3>
            <form action="weather_report.php" method="POST">
                <div class="form-group">
                    <label for="temperature">Number</label>
                    <input type="number" name="temperature" placeholder="Enter Temperature" value="<?php echo $temperature ?>" required>
                </div>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-6">
            <?php
            if ($output) {

            ?>
                <h3> <b><?php echo $temperature ?></b> degree temperature means: <?php echo $output ?></h3>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>