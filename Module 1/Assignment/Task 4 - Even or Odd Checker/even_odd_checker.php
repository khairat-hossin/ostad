<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
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
    $number_to_check = isset($_POST['number_to_check']) ? $_POST['number_to_check'] : null;
    $output = null;
    if ($number_to_check) {
        $output = ($number_to_check % 2 == 0) ? "Even" : "Odd";
    }
    ?>
    <div class="row text-center">
        <h1>Hello there, welcome to my Even Odd checker</h1>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Enter a Number</h3>
            <form action="even_odd_checker.php" method="POST">
                <div class="form-group">
                    <label for="number_to_check">Number</label>
                    <input type="number" name="number_to_check" placeholder="Enter a number" value="<?php echo $number_to_check ?>" required>
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
                <h3> <b><?php echo $number_to_check ?></b> is an <?php echo $output ?> number</h3>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>