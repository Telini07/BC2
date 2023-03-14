<?php
$lin = readline();
$val = explode(' ', $lin);
$a = intval($val[0]);
$b = intval($val[1]);
$c = intval($val[2]);
$d = intval($val[3]);

if(($b > $c) && ($d > $a) && ($c + $d > $a + $b) && $c > 0 && $d > 0 && ($a % 2 == 0))
{
    print("Valores aceitos\n");
}
else
{
    print("Valores nao aceitos\n");
}