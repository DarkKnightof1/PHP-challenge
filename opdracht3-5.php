<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 20-9-2019
 * Time: 11:12
 */


?>
<!DOCTYPE html>
<html lang="en">
<style>
body {
    text-align: left;
    }
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 15px;
}
</style>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    <tr>
        <td>De spartelkuikens</td>
        <td>25</td>
        <td><?php
            for($zwemmers1 = 25; $zwemmers1 >= 5; $zwemmers1 -=5) {
                echo " |*| ";
            }
            ?></td>
    </tr>
    <tr>
        <td>De waterbuffels</td>
        <td>32</td>
        <td><?php
            for ($zwemmers2 = 32; $zwemmers2 >= 5; $zwemmers2 -= 5) {
                echo " |*| ";
            }
            ?></td>
    </tr>
    <tr>
        <td>Plonsmderin</td>
        <td>11</td>
        <td><?php
            for ($zwemmers3 = 11; $zwemmers3 >= 5; $zwemmers3 -= 5) {
                echo " |*| ";
            }
            ?></td>
    </tr>
    <tr>
        <td>Bommetje</td>
        <td>23</td>
        <td><?php
            for ($zwemmers4 = 23; $zwemmers4 >= 5; $zwemmers4 -= 5) {
                echo " |*| ";
            }
            ?></td>
    </tr>
</table>
</body>
</html>