<?php   

    $bank_balance = 208;
    if ($bank_balance < 100){  // condición if
        $money = 1000;
        $bank_balance += $money;
    }
    elseif($bank_balance > 200){ // condición elseif
        $bank_balance -= 100;
    }
    else{
        $bank_balance -= 50;  // condición else
    }
    echo("$bank_balance");


    // Condicional switch

    $page = "Home";
    switch ($page){
        case "Home":
            echo "Selecionaste Home";
            break;
        case "About":
            echo "Selecionaste About";
            break;
        case "Login":
            echo "Selecionaste Login";
            break;
        default:
            echo "Selecion no reconosida";
            break;
    }

    // Operador ?
    $fuel  = 1;
    $enough = $fuel <= 1 ? "es falso" : "Es verdadero";
    echo $enough ;



?>