<?php
$lin = readline();
$val = explode(' ',$lin);
$a = intval($val[0]);
$b = intval($val[1]);
$c = intval($val[2]);

$t;
$t2;
$aux;

for($t=0; $t<3; $t++){
    for($t2=0; $t2<3; $t2++){
        if($val[$t]<$val[$t2]){
            $aux=$val[$t2];
            $val[$t2]=$val[$t];
            $val[$t]=$aux;
        }
    }
}

print("$val[0]\n$val[1]\n$val[2]\n\n");
print("$a\n$b\n$c\n");
?>