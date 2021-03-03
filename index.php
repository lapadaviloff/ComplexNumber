<?php 
/** тестовое задание с действиями над комплексными числами 
 * miam.devsoft@yandex.ru
 * 03.03.2021
 **/ 
include 'ComplexNumber.php';
include 'outputConsole.php';
include 'outputBrowser.php';
$browser=true; //если вывод в браузер - true консоль - false
$firstNumber = new ComplexNumber(-7,3);
$secondNumber = new ComplexNumber(2,-4);

if ($browser) $output = new outputBrowser();
else $output = new outputConsole();

$output->output($firstNumber, ' + ', $secondNumber, $firstNumber->add($secondNumber));
$output->output($firstNumber, ' - ', $secondNumber, $firstNumber->sub($secondNumber));
$output->output($firstNumber, ' * ', $secondNumber, $firstNumber->mult($secondNumber));
$output->output($firstNumber, ' / ', $secondNumber, $firstNumber->div($secondNumber));
$secondNumber->set(0,0);
$output->output($firstNumber, ' / ', $secondNumber, $firstNumber->div($secondNumber));
?>

