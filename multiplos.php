<?php
$lin = readline();
$val = explode(' ',$lin);
$a = intval($val[0]);
$b = intval($val[1]);

if($a%$b==0 || $b%$a==0)
{
    print("Sao Multiplos\n");
}
else
{
    print("Nao sao Multiplos\n");
}

?>