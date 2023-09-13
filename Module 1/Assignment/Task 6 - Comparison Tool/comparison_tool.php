<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
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
        <h1>Hello there, welcome to my Comparison Tool</h1>
    </div>
    <div class="row text-center">
        <div class="col-6">
            <h3>Enter Two Number</h3>
            <form action="comparison_tool.php" method="POST">
                <div class="form-group">
                    <label for="number1">Number 1</label>
                    <input type="number" name="number1" placeholder="Enter number1" value="<?php echo $number1 ?>" required>
                </div>
                <div class="form-group">
                    <label for="number2">Number 2</label>
                    <input type="number" name="number2" placeholder="Enter number2" value="<?php echo $number2 ?>" required>
                </div>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>

        <div class="col-6">
            <?php
            if (isset($_POST['number1']) && isset($_POST['number2'])) {
                $larger_number= ($_POST['number1']> $_POST['number2']) ? $_POST['number1'] : $_POST['number2'];
            ?>
                <h3> <b><?php echo $larger_number ?></b> Is the larger between <?php echo $_POST['number1'] ?> and <?php echo $_POST['number2'] ?></h3>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>