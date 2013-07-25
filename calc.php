<html>
<head>
<p>Calculator</p>

<!-- if you don't use method=post , then the values are not past to your php app -->

<form name="input" action="calc_action.php" method="post" >

<input type="text" name="num1"> 
<select name="op">
	<option value="add" selected>+</option>
	<option value="subtract" >-</option>
</select>
<input type="text" name="num2">
<input type="submit" value="CALC">

</form>
</head>
</html>

