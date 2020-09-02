<?php
class calController
{ 
public function normal(){
		$number1=$_GET['num1'];
        $number2=$_GET['num2'];
        $operator=$_GET['operator'];
        $calculator = new Calculator();
        $calculator->setNumber($number1,$number2);
        $calculator->setOperator($operator);
        $calculator->calculate();
        $calculator->getOutput();
        $result=$calculator->getOutput();
		require_once('views/calculator/calculator.php');
	}
	public function pitagoras(){
		$number1=$_GET['num1'];
        $number2=$_GET['num2'];
		$number3=$_GET['num3'];
		$result=Calculator::pitagoras($number1,$number2,$number3);
		require_once('views/pitagoras/pitagoras.php');
	}
	public function fibonacci(){
		$number1=$_GET['num1'];
		$result=Calculator::fibonacci($number1);
		require_once('views/fibonacci/fibonacci.php');
	}
}
?>