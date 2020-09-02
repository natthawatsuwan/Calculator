<?php
class Calculator{

private $number1,$number2,$operator,$output;
 
public function setNumber($number1,$number2)
{
    $this->number1=$number1;
	$this->number2=$number2;
}

public function setOperator($operator)
	{
		$this->operator =$operator;
	}
public function calculate()
	{
		if($this->operator == "+")
		    $this->output = $this->number1+$this->number2;
		elseif($this->operator == "-")
		    $this->output = $this->number1-$this->number2;
		elseif($this->operator == "*")
		    $this->output = $this->number1*$this->number2;
		elseif($this->operator == "/")
		    $this->output = $this->number1/$this->number2;
		elseif($this->operator == "%")
		    $this->output = $this->number1%$this->number2;
		elseif($this->operator == "sqrt")
		    $this->output = pow($this->number1,(1/$this->number2));
		elseif($this->operator == "power")
		    $this->output = pow($this->number1,$this->number2);
		elseif($this->operator == "log")
		    $this->output = log($this->number1,$this->number2);
	    else
		    $this->output = "an error has";
	}
	
	public function getOutput()
	{
		return $this->output;
	}
    public function pitagoras($A,$B,$C)
	{  
		if(empty($C))
		{   $ans="C";
			$C=pow((pow($A,2)+pow($B,2)),(1/2));
			return $C;
		}
		elseif(empty($B))
		{  $ans="B";
		    $B=pow((pow($C,2)-pow($A,2)),(1/2));
			return $B;
		}
		elseif(empty($A))
		{   $ans="A";
			$A=pow((pow($C,2)-pow($B,2)),(1/2));
			return $A;
			
		}
	  //return 0;
	}
    public function fibonacci($number1)
	{   $number = $number1;
		$num_array[0]=0;
		$num_array[1]=1;
    if ($number == 0) 
        return 0;     
    else if ($number == 1) 
        return 1;
    else
	  for($i=2;$i<$number;$i++)
	  { 
	    $num_array[$i]=$num_array[$i-1]+$num_array[$i-2];
         
	  }
	  return $num_array;
    }
  
}
?>