<?php
$a = (rand(-10 , 10));
$b = (rand(-10 , 10));
$c = (rand(-10 , 10));
echo ($a . "x^2 +".$b ."x + ".$c ." = 0");
$d = ($b*$b-4*$a*$c); 
if ($d > 0) {
    $D = sqrt($b*$b-4*$a*$c);
    $x1 = ((-$b - $D)/2*$a);  
    $x2 = ((-$b + $D)/2*$a);
    echo "<span style = \" color: green;\">   x1 =</span>" .$x1;
    echo "<span style = \" color: green;\">   x2 =</span>" .$x2;

} 
elseif ($d == 0) {
    $x = ((-$b)/2*$a);
    echo ("x =". $x);

} 
elseif ($d < 0) {
    echo "<span style = \" color: red;\">   нет решений</span>";
}
