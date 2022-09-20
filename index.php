<?php

// require "vendor/autoload.php";
date_default_timezone_set("Asia/Calcutta");
require "config.php";
require "functions.php";

// menualy sen information function to get result
// print_r( getShippingDate('2022-09-16',date("11")));
// echo getShippingDate('2022-09-24',date("11"));


// for set indian stander date time auto get Shiping date and day
// echo getShippingDate(date("Y-m-d"),date("H"));


// print_r($_REQUEST);
if (isset($_REQUEST['submit'])){
    $oderTime= date("H",strtotime($_REQUEST['time']));
    $orderDate= date("Y-m-d",strtotime($_REQUEST['date']));
    echo getShippingDate($orderDate,$oderTime);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shiping Test</title>
</head>
<body>
   
<form action="" method="post">
    <table>
        <tr>
            <th> Selecte date</th>
            <td><input type="date" name="date" id="" value="<?= date("Y-m-d") ?>" /></td>
        </tr>
        <tr>
            <th>Set time</th>
            <td><input type="time" name="time" value="<?= date("H:m") ?>" id="" /></td>
        </tr>
    </table>
<button name=submit type="submit">Check Shiping Date</button>

</form>

<p>Imagine there is a webshop which sells some products. We need the code that calculates the
expected shipping date when a user submits an order. The shop owner has decided NOT to ship
on certain days of the week ($holidays variable in config.php). There is a cut off time for placing
an order that will be shipped on the same day, for example, orders placed before 11 in the
morning will be shipped on the same day, else it will only be shipped the next day/next shipping
allowed day ($cutOffTime in config.php). Shipping means handing over the package to the
courier company.
</p>
<p>
The main code with logic should be added to getShippingDate in functions.php and it should
return the date (Y-m-d format) in which the product will be shipped.
</p>

</body>
</html>



