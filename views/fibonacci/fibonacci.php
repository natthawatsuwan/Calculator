<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>My Calculator</title>
</head>
<body>
<center>
<h1>Fibonacci</h1>
<?php
if($number1==1||empty($number1))
		  echo "0"." ";
		elseif($number1==2)
		  echo "0"." "."1";
		else{
		foreach ($result as &$value) {
              echo $value." ";
         }
		}
		?>
<form method="get" action="">
   <input type="hidden"  name="controller" value="calculator">
   <input type="hidden"  name="action" value="fibonacci" >
  <label for="number">number:</label>
  <input type="text" id="num1" name="num1">
  
<br><br>
  <input type="submit" value="calculate">
</form>
</body>
</html>