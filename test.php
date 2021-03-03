<?php 
include 'ComplexNumber.php';
$firstNumber = new ComplexNumber(-7,3);
$secondNumber = new ComplexNumber(2,-4);
$firstNumber->output();
echo ' + ';
echo $secondNumber->output().' = ';
$firstNumber->add($secondNumber);
$firstNumber->output();
echo '<br>'.PHP_EOL;
$firstNumber->set(-7,3);
$firstNumber->output();
$firstNumber->sub($secondNumber);
$firstNumber->output();
$firstNumber->set(-7,3);
$firstNumber->output();
$firstNumber->mult($secondNumber);
$firstNumber->output();
$firstNumber->set(-7,3);
$firstNumber->output();
$firstNumber->div($secondNumber);
$firstNumber->output();
$firstNumber->set(0,0);
$firstNumber->output();
$firstNumber->div($secondNumber);
$firstNumber->output();

?>

