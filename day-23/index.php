<!DOCTYPE html>
<html>
<body>

<?php
// foreach loop
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
    echo "$value <br>";
    }

$student = array("Sohana" => 500 ."tk", "Sharmin" => 2000 ."tk", "Sultana" =>3000 ."tk", "Ruma" => 500 ."tk", "Amena" =>300 ."tk", "Armin" =>2900 ."tk");

foreach ($student as $name => $tk) {
    echo $name . " : " . $tk ;
    echo "<br>";
}

// function
function sum($x,$y){
    return $x + $y;
}

$v = sum(4,5);
echo $v . "<br>";
$v2 = sum(10,20);
echo $v2 . "<br>" ;

function simple($x,$y){
    $z = $x * $x + 3 * $x + 9 * $y + 6 * ($y * $y) + 32 * $x + 7 * ($y * $y * $y);
    return $z;
}
echo simple(10,3) ."<br>";

$p = simple(20, 30);
echo $p ."<br>";

// indexed array
$cars = array("VOLVO","BMW","TOYOTA");
$arrleanth = count($cars);

for ($x = 0; $x < $arrleanth; $x++){
    echo $cars[$x];
    echo "<br>";
}

?>

</body>
</html>