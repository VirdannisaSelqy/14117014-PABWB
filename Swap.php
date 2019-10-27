<!DOCTYPE html>
<html>
<head>
<title>SWAP</title>
</head>
<body>

<?php
function swap(&$x, &$y){
    $temp = $x;
    $x=$y;
    $y=$temp;
}
$x = 4;
$y = 5;
    echo "Angka Asli <br>";
    echo "$x <br>";
    echo "$y <br>";
    echo "<br>";

    echo "Setelah ditukar <br>";
    swap($x,$y);
    echo "$x <br>";
    echo "$y <br>";
?>
</body>
</html>