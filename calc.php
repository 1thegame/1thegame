<?php

$number1 = readline("enter a number 1 \n :");
if (is_numeric($number1)) {
    $operand = readline("enter a operand \n :");
    if ($operand == '+' || $operand == '-' || $operand == '/' || $operand == '*') {
        $number2 = readline("second number \n :");
        switch ($operand) {
            case '-':
                $result = $number1 - $number2;
                echo "Your results is : $result \n";
                break;
            case '+':
                $result = $number1 + $number2;
                echo "Your results is : $result \n";
                break;
            case '/':
                $result = $number1 / $number2;
                echo "Your results is : $result \n";
                break;
            case '*':
                $result = $number1 * $number2;
                echo "Your results is : $result \n";
                break;

            default:
                echo "something wrong \n";
        }

    } else {
        echo "Do it again noob!and Only choose one of this operators : +,-,/,* \n";
    }
}else {
    echo "Only numbers!!you need to start from begining \n";

}



