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
    $temp =new ComplexNumber(0,0);
    $temp->real = $this->real + $complex->real;
    $temp->imaginary = $this->imaginary + $complex->imaginary;
    return $temp;
    }
//вычитание двух комплексных чисел
function sub(ComplexNumber $complex){
   
    $temp =new ComplexNumber(0,0);
    $temp->real = $this->real - $complex->real;
    $temp->imaginary = $this->imaginary - $complex->imaginary;
    return $temp;
    }
//умножение двух комплексных чисел
function mult(ComplexNumber $complex){
    $temp =new ComplexNumber(0,0);
    $temp->real = $this->real * $complex->real - $this->imaginary * $complex->imaginary;
    $temp->imaginary = $this->real * $complex->imaginary + $complex->real * $this->imaginary;
    return $temp;
     }
//деление двух комплексных чисел
function div(ComplexNumber $complex){
    $temp =new ComplexNumber(0,0);
   // ловим деление на ноль
    try{
    $temp->real = ($this->real * $complex->real + $this->imaginary * $complex->imaginary)/
    (pow($complex->real,2) + pow($complex->imaginary,2));

    $temp->imaginary =  ($complex->real * $this->imaginary - $this->real * $complex->imaginary)/
    (pow($complex->real,2)+pow($complex->imaginary,2));
    return $temp;
   }
   catch  (DivisionByZeroError  $ex) {
       echo $ex->getMessage().' ';
       return $temp;
   }
    }
// вывод мнимой и действительной части
function getReal (){
    return $this->real;
}
function getImaginary (){
    return $this->imaginary;
}
}
?>