<?php require_once('Calculator.php');?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>My Calculator</title>
</head>
<body>
<center>
<h1>My Calculator</h1>
<?php 

echo"<center><h1>";
echo $number1." ".$operator." ".$number2."=".$calculator->getOutput();
echo"</center></h1>";
?>
<form method="get" action="">
<input type="hidden"  name="controller" value="calculator">
<input type="hidden"  name="action" value="normal" >
  <label for="fname">input1:</label>
  <input type="text" id="num1" name="num1" value=<?php echo $result; ?>>
 
 <select name="operator" id="operator">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
	<option value="%">%</option>
	<option value="sqrt">√</option>
	<option value="power">ยกกำลัง</option>
	<option value="log">log</option>
  </select>
 
  <label for="lname">input2:</label>
  <input type="text" id="num2" name="num2"><br><br>
   <br><br>
  <input type="submit" value="calculate">
</form>
<br>
<font color=red>
**input2 ใน  √ คือราก**</font>

</body>
</html>