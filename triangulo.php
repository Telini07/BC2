<?php
$lin = readline();
$val = explode(' ',$lin);
$a = $val[0];
$b = $val[1];
$c = $val[2];

if(($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a))
{
    $per = $a+$b+$c;
    $per = number_format($per, 1);
    print("Perimetro = $per\n");
}
else
{
    $are = (($a + $b) * $c) / 2;
    $are = number_format($are, 1);
    print("Area = $are\n");
    
}

?>