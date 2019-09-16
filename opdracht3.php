<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 16-9-2019
 * Time: 10:59
 */
?>
<!DOCTYPE html>
<html lang="en">
<style>
body {
    text-align: center;
    }
</style>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$boom = 45;
for($stip = 0; $stip < $boom; $stip++) {
    for($aantal = 0; $aantal < $stip; $aantal++) {
        echo " * ";
    }
    echo " * ";
    echo "<br>";
}
?>

</body>
</html>