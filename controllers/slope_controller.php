<?php
class slopeController
{ 
public function detail(){
	$number1=$_GET['X1'];
    $number2=$_GET['Y1'];
	$number3=$_GET['X2'];
    $number4=$_GET['Y2'];
	$calculator = new Slope();
	$calculator->setNumber($number1,$number2,$number3,$number4);
    $calculator->calculate();
    $calculator->getOutput();
    $result=$calculator->getOutput();
	require_once('views/slope/slope.php');
	}
}
?>