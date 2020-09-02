<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>My Calculator</title>
</head>
<body>
<center>
<h1>Pitagoras</h1>
<?php
if(empty($number1))
  echo "A";
elseif(empty($number2))
  echo "B";
elseif(empty($number3))
  echo "C";
else
  echo"Error";
echo ":".$result;

?>


<form method="get" action="">
   <input type="hidden"  name="controller" value="calculator">
   <input type="hidden"  name="action" value="pitagoras" >
  <label for="A">A:</label>
  <input type="text" id="num1" name="num1">
  
<br>
 <label for="B">B:</label><input type="text" id="num2" name="num2"><br>
  <label for="C">C:</label>
  <input type="text" id="num3" name="num3"><br><br>
   <br><br>
  <input type="submit" value="calculate">
</form>
<font color=red>
**กรอกเฉพาะ2ตัวเท่านั้น**</font><br>
<img src="views/pitagoras/pitagoras.jpg" alt="pitagoras">

</body>
</html>