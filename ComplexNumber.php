<?php 
class ComplexNumber {
private $real=0;
private $imaginary=0;
function __construct($real,$imaginary)
{
    $this->real=$real;
    $this->imaginary=$imaginary;
}
//установка чисел
function set($real,$imaginary){
    $this->real=$real;
    $this->imaginary=$imaginary;
    }
//сложение двух комплексных чисел
function add(ComplexNumber $complex){
    $this->real = $this->real + $complex->real;
    $this->imaginary = $this->imaginary + $complex->imaginary;
    }
//вычитание двух комплексных чисел
function sub(ComplexNumber $complex){
    $this->real = $this->real - $complex->real;
    $this->imaginary = $this->imaginary - $complex->imaginary;
    }
//умножение двух комплексных чисел
function mult(ComplexNumber $complex){

    $tempReal = $this->real * $complex->real - $this->imaginary * $complex->imaginary;
    $tempImaginary = $this->real * $complex->imaginary + $complex->real * $this->imaginary;
    $this->real = $tempReal;
    $this->imaginary = $tempImaginary;
     }
//деление двух комплексных чисел
function div(ComplexNumber $complex){
   try{
    $tempReal = ($this->real * $complex->real + $this->imaginary * $complex->imaginary)/
    (pow($complex->real,2) + pow($complex->imaginary,2));

    $tempImaginary =  ($complex->real * $this->imaginary - $this->real * $complex->imaginary)/
    (pow($complex->real,2)+pow($complex->imaginary,2));
    
    $this->real = $tempReal;
    $this->imaginary = $tempImaginary;
   }
   catch  (DivisionByZeroError  $ex) {
       echo $ex->getMessage().PHP_EOL;
       $this->real = 0;
       $this->imaginary = 0;
   }
    }
// вывод числа
function output (){
    if($this->imaginary>0) echo $this->real.'+'.$this->imaginary.'i';
    else echo $this->real.$this->imaginary.'i';

}
}
?>