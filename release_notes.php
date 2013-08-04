<html>
<head>
<p>Add Release Notes</p>

<!-- if you don't use method=post , then the values are not past to your php app -->

<form name="input" action="release_notes_action.php" method="post" >


<input type="text" name="op" value="add" hidden>


 Tool: 
<select name="tool">
	<option value="opus" selected>Opus</option>
	<option value="presto" >Presto</option>
</select>
 Note: 
<input type="text" name="comment" placeholder="Enter Comment Here" >

 Date: 
<input type="date" name="date"  >

<input type="submit" value="GO">

</form>

<p>Remove Selected Release Notes</p>

<form name="input" action="release_notes_action.php" method="post" >

<input type="text" name="op" value="remove" hidden>

Release Note ID: 
<input type="text" name="id" placeholder="Enter Id Number Here" >

<input type="submit" value="GO">

</form>


</head>
</html>