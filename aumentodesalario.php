<?php
$sal = readline();
$sal = number_format($sal,2,".","");

if($sal>=0 && $sal <=400.00)
{
    $x = $sal+($sal*0.15);
    $x = number_format($x, 2, ".", "");
    $y = ($sal*0.15);
    $y = number_format($y, 2, ".", "");
    print("Novo salario: $x\n");
    print("Reajuste ganho: $y\n");
}
elseif($sal>400.01 && $sal <=800.00)
{
    $x = $sal+($sal*0.12);
    $x = number_format($x, 2, ".", "");
    $y = ($sal*0.12);
    $y = number_format($y, 2, ".", "");
    print("Novo salario: $x\n");
    print("Reajuste ganho: $y\n");
}

?>