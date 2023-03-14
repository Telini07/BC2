<?php
$lin = readline();
$val = explode(' ',$lin);
$hin = intval($val[0]);
$hfi = intval($val[1]);

if($hin>$hfi)
{
    $tot = (24-$hin)+$hfi;
    print("O JOGO DUROU $tot HORA(S)\n");
}
elseif($hin<$hfi)
{
    $tot = $hfi-$hin;
    print("O JOGO DUROU $tot HORA(S)\n");
}
else
{
    print("O JOGO DUROU 24 HORA(S)\n");
}
?>