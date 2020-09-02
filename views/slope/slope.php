<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>My Calculator</title>
</head>
<body>
<center>
<h1>slope</h1>
<?php echo"<h1>";

echo "M :".$result; echo"</h1>";?>
<form method="get" action="">
   <input type="hidden"  name="controller" value="slope">
   <input type="hidden"  name="action" value="detail" >
  <label for="number">X1:</label>
  <input type="text" id="X1" name="X1">
  <br>
  <label for="number">Y1:</label>
  <input type="text" id="Y1" name="Y1">
  <br>
  <label for="number">X2:</label>
  <input type="text" id="X2" name="X2">
  <br>
  <label for="number">Y2:</label>
  <input type="text" id="Y2" name="Y2">
  
<br><br>
  <input type="submit" value="calculate">
</form>
<img src="views/slope/slope.jpg" alt="slope">
</body>
</html>