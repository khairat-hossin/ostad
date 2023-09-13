<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <style>
        .text-center {
            text-align: center;
        }

        .row {
            width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 5px;
            display: flex;
            justify-content: center;
            border-bottom: 2px solid black;
        }

        .col-6 {
            width: 50%;
            height: auto;
            margin: 5px;
            padding: 5px;
            display: inline;
        }
    </style>
</head>

<body>
    <?php
    $name = "Khairat Hossin";
    $age = 28;
    $country = "Bangladesh";
    $introduction = "Hello, This is Khairat Hossin a passionate programmer who is here to learn Web Development with PHP & Laravel from the most talented industry leaders of the Bangladesh";
    ?>
    <div class="row text-center">
        <h1>Hello there, welcome to my Personal Information</h1>

    </div>
    <div class="row">
        <div class="col-6">Name</div>
        <div class="col-6"> <?php echo ($name); ?> </div>
    </div>

    <div class="row">
        <div class="col-6">Age</div>
        <div class="col-6"><?php echo $age; ?></div>
    </div>

    <div class="row">
        <div class="col-6">Country</div>
        <div class="col-6"><?php echo $country; ?></div>
    </div>

    <div class="row">
        <div class="col-6">About me</div>
        <div class="col-6"><?php echo $introduction; ?></div>
    </div>

</body>

</html>