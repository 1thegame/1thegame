<?php

$number1 = fwrite(STDOUT, "Enter first number: ");
$number1 = fgets(STDIN);
if (is_numeric($number1)) {
    $operand = fwrite(STDOUT, "Enter 1 operand: +,-,/,* ");
    $operand = fgets(STDIN);
    if ($operand == '+' || $operand == '-' || $operand == '/' || $operand == '*') {
        echo $operand . "\n";
        $number2 = fwrite(STDOUT, "Enter second number: ");
        $number2 = fgets(STDIN);
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
    echo "Only numbers!!you need to start from begiingn \n";

}



