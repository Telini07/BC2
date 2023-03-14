<?php
$lin = readline();
$val = explode(' ',$lin);
$cod = intval($val[0]);
$qnt = intval($val[1]);

switch($cod)
{
    case 1:
        $total = 4.00 * $qnt;
        $total = number_format($total, 2, ".", "");
        print("Total: R$ $total\n");
        break;
        case 2:
            $total = 4.50 * $qnt;
            $total = number_format($total, 2, ".", "");
            print("Total: R$ $total\n");
            break;
            case 3:
                $total = 5.00 * $qnt;
                $total = number_format($total, 2, ".", "");
                print("Total: R$ $total\n"); 
                break;  
                case 4:
                    $total = 2.00 * $qnt;
                    $total = number_format($total, 2, ".", "");
                    print("Total: R$ $total\n");  
                    break;
                    case 5:
                        $total = 1.50 * $qnt;
                        $total = number_format($total, 2, ".", "");
                        print("Total: R$ $total\n");     
                        break;              
}
?>