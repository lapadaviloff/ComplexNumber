<?php
//include 'ioutput.php';
//include 'ComplexNumber.php';
//вывод для браузера
class outputBrowser implements ioutput{
    public function output (ComplexNumber $firstNumber,$char,ComplexNumber $secondNumber,ComplexNumber $result){
        
        
        if($firstNumber->getImaginary()>0)echo $firstNumber->getReal().'+'.$firstNumber->getImaginary().'i';
        else echo $firstNumber->getReal().$firstNumber->getImaginary().'i';
        
        echo $char;

        if($secondNumber->getImaginary()>0)echo $secondNumber->getReal().'+'.$secondNumber->getImaginary().'i';
        else echo $secondNumber->getReal().$secondNumber->getImaginary().'i';

        echo ' = ';

        if($result->getImaginary()>0) echo $result->getReal().'+'.$result->getImaginary().'i';
         else echo $result->getReal().$result->getImaginary().'i';

         echo '<br>';
    }
}
?>