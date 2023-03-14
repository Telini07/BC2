<?php
$lin = readline();
$val = explode(' ',$lin);
$a = $val[0];
$b = $val[1];
$c = $val[2];

if($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b))
{
    $som = $a+$b+$c;
    $som = number_format(1, ".", "");
    print("Perimetro = $som\n");
}
else
{
    $ans = 0.5*($a+$b)*$c;
    $ans = number_format(1, ".", "");
    print("Area = $ans\n");
    
}


?>