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

echo "<br>";
var_dump(checkdate(1,1,1));

$date=date_create("2002-07-11");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");
    ?>
</body>
</html>