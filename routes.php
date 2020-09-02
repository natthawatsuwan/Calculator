<?php
function call($controller,$action)
{		
	require_once("controllers/".$controller."_controller.php"); 
		switch($controller){
				case "pages": 
					$controller = new pagesController();
					break;
				case "calculator": 
					require_once("models/calculatorModel.php");
					$controller = new calController();
					break;
				case "slope": 
					require_once("models/slopeModel.php");
					$controller = new slopeController();
					break;
				}
	$controller->{$action}();
}
if ( ( ($controller == "calculator") && ($action =="home")) ||(($controller == "calculator") && ($action =="error"))
   ||(($controller == "calculator") && ($action =="normal"))||(($controller == "calculator") && ($action =="pitagoras"))
   ||(($controller == "calculator") && ($action =="fibonacci"))||(($controller == "slope") && ($action =="detail")))
      {call($controller,$action);}
else{call('calculator','normal');}//error
?>