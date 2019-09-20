<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 20-9-2019
 * Time: 10:18
 */

$prijs = 10;
$jaar = 70;
$n1 = 0;
$n2 = 0;
$n3 = 0;
if ($jaar > 65) {
    $n1 = $prijs * 0.5;
} else if ($jaar <= 12 and $jaar >= 3) {
    $n2 = $prijs * 0.5;
} else ($jaar < 3); {
    $n3 = $prijs * 0;
}
if ($n1 + $n2  == 0 and $jaar >= 3) {
    $prijs = 10;
    echo $prijs;
}else{
        echo $n1 + $n2 + $n3;

}
?>
