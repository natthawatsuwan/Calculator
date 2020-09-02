<?php
class Slope{

private $x1,$y1,$x2,$y2,$output;
 
public function setNumber($x1,$y1,$x2,$y2)
{
    $this->x1=$x1;
	$this->y1=$y1;
	$this->x2=$x2;
	$this->y2=$y2;
}
public function calculate()
	{    
     $this->output =($this->y2-$this->y1)/($this->x2-$this->x1);
	
	}
	public function getOutput()
	{
		return $this->output;
	}
  }
?>