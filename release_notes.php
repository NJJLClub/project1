<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>


<div id="container">

	
	<div id="content">
	<br class="clear" />  <!-- makes sure container grows around content -->


		<h1>Add Release Notes</h1>

		<!-- if you don't use method=post , then the values are not past to your php app -->

		<form name="input" action="release_notes_action.php" method="post" >


		<input type="text" name="op" value="add" hidden>


		Tool: 
		<select name="tool">
			<option value="opus" selected>Opus</option>
			<option value="presto" >Presto</option>
		</select>

		<input type="text" name="comment" size="40" placeholder="Enter Comment Here" >

		Date: 
		<input type="date" name="date" value="<?= date("Y-m-d") ?>" >

		<input type="submit" value="GO">

		</form>

		<h1>Remove Selected Release Notes</h1>

		<form name="input" action="release_notes_action.php" method="post" >

		<input type="text" name="op" value="remove" hidden>

		Release Note ID: 
		<input type="text" name="id" placeholder="Enter Id Number Here" >

		<input type="submit" value="REMOVE">

		</form>

		<table>
		<tr>
			<th>ID</th>
			<th>Tool</th>
			<th>Comment</th>
			<th>Date</th>
			<th>User</th>
		</tr>

			<?php
				$con = mysqli_connect("localhost","jjladero","","test");
				$sql = "SELECT * FROM dbtable WHERE 1";
				$result = mysqli_query($con, $sql);
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<tr>';
					
					echo "<td> ${row['id']}  </td>";
					echo "<td> ${row['tool']}  </td>";
					echo "<td> ${row['comment']}  </td>";
					echo "<td> ${row['date']}  </td>";
					echo "<td> ${row['user']} </td>";
					
					echo '</tr>';
					
				}
				mysqli_free_result($result);
				mysqli_close($con);
			?>

		</table>

	</div> <!--  content -->
	
	<div id="footer"
	</div>
	
</div> <!-- container -->


</html>