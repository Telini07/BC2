<?php
$sal = readline();
$imp = 0;

if($sal <= 2000.00)
{
    print("Isento\n");
}
elseif($sal <= 3000.00)
{
    $imp = ($sal - 2000.00) * 0.08;
    echo "R$ " . number_format($imp, 2, ".", "") . "\n";
}
elseif($sal <= 4500.00)
{
    $imp = 1000.00 * 0.08 + ($sal - 3000.00) * 0.18;
    echo "R$ " . number_format($imp, 2, ".", "") . "\n";
}
else
{   
    $imp = 1000.00 * 0.08 + 1500.00 * 0.18 + ($sal - 4500.00) * 0.28;
    echo "R$ " . number_format($imp, 2, ".", "") . "\n";
}

?>