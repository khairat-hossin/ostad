<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
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
    $temperature = isset($_POST['temperature']) ? $_POST['temperature'] : null;
    $scale = isset($_POST['scale']) ? $_POST['scale'] : null;
    $target = isset($scale) ? (($scale == "Celsius") ? "Fahrenheit" : "Celsius") : null;
    $output = null;
    if ($temperature && $scale && $target) {
        $output = ($scale == "Celsius") ? (($temperature * 9 / 5) + 32) : (($temperature - 32) * (5 / 9));
    }
    ?>
    <div class="row text-center">
        <h1>Hello there, welcome to my Temperature Calculator</h1>

    </div>
    <div class="row">
        <div class="col-6">
            <h3>Enter your temperature and Scale</h3>
            <form action="temperature_converter.php" method="POST">
                <div class="form-group">
                    <label for="temperature">Temperature</label>
                    <input type="number" name="temperature" placeholder="Enter your temperature here" value="<?php echo $temperature ?>" required>
                </div>
                <div class="form-group">
                    <label for="scale">Scale</label>
                    <select name="scale" id="scale" required>
                        <option value="">Select a scale</option>
                        <option value="Celsius" <?php if ($scale == "Celsius") echo "selected"; ?>>Celsius</option>
                        <option value="Fahrenheit" <?php if ($scale == "Fahrenheit") echo "selected"; ?>>Fahrenheit</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-6">
            <?php
            if (isset($output)) {

            ?>
                <h3> <b><?php echo $temperature ?></b> Degree <?php echo $scale ?> = <?php echo $output ?></b> Degree <?php echo $target ?></h3>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>