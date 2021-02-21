<?php

//Recharge Card Pin Generation

for ($x=0; $x < 200; $x++) { 
    echo "<br>";
$i = 0;
$pin = mt_rand(1,9);
do {
    $pin .= mt_rand(0, 9);
} while(++$i < 14);
echo $pin;
}
?>