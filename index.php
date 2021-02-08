<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <?php
    echo "HELLO WORLD";

    $d=cal_days_in_month(CAL_GREGORIAN,2,2019);
echo "<br>There was $d days in February 2019.<br>";
    ?>
</body>
</html>