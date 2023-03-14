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
        print("Em percentual: $15 %\n");
    }
    elseif($sal>400.01 && $sal <=800.00)
    {
        $x = $sal+($sal*0.12);
        $x = number_format($x, 2, ".", "");
        $y = ($sal*0.12);
        $y = number_format($y, 2, ".", "");
        print("Novo salario: $x\n");
        print("Reajuste ganho: $y\n");
        print("Em percentual: 12 %\n");
    }
    elseif($sal>800.01 && $sal <=1200.00)
    {
        $x = $sal+($sal*0.10);
        $x = number_format($x, 2, ".", "");
        $y = ($sal*0.10);
        $y = number_format($y, 2, ".", "");
        print("Novo salario: $x\n");
        print("Reajuste ganho: $y\n");
        print("Em percentual: 10 %\n");
    }
    elseif($sal>1200.01 && $sal <=2000.00)
    {
        $x = $sal+($sal*0.07);
        $x = number_format($x, 2, ".", "");
        $y = ($sal*0.07);
        $y = number_format($y, 2, ".", "");
        print("Novo salario: $x\n");
        print("Reajuste ganho: $y\n");
        print("Em percentual: 7 %\n");
    }
    else
    {
        $x = $sal+($sal*0.04);
        $x = number_format($x, 2, ".", "");
        $y = ($sal*0.04);
        $y = number_format($y, 2, ".", "");
        print("Novo salario: $x\n");
        print("Reajuste ganho: $y\n");
        print("Em percentual: 4 %\n");
    }

    ?>