<?php

	$remote_user = isset( $_SERVER['REMOTE_USER'] )  ? $_SERVER['REMOTE_USER'] : ''; 
	
	$op         =  isset( $_POST['op'] ) ? $_POST['op'] : '' ;        // ADD,REMOVE
	$tool_name  =  isset( $_POST['tool'] ) ? strtoupper( $_POST['tool'] ) : 'NoTool' ;
	$comment =     isset( $_POST['comment'] ) ? $_POST['comment'] : 'No Notes' ;
	$entry_date =  isset( $_POST['date'] ) ? $_POST['date'] : 'Today' ;
	$id =          isset( $_POST['id'] ) ? $_POST['id'] : '' ;

	switch ( strtolower($op) )
	{
		case 'add' :
			print "$remote_user Adding New Release Note<br>\n";
			$con = mysqli_connect("localhost","jjladero","","test");
			if ( mysqli_connect_errno($con))
			{
				echo "Failed to connect to MySQL" . mysqli_connect_error();
				break;
			}
			
			$sql = "INSERT INTO dbtable (tool,comment,date) 
				VALUES ( '$tool_name', '$comment', '$entry_date' ) ";
				
			if ( ! mysqli_query($con, $sql) )
			{
				die('Error: ' . mysqli_error($con));
			}
			
			echo "1 record added to database";
			
			
			mysqli_close($con);
			break;
			
		case 'remove' :
			print "Removing Release Note<br>\n";
			$con = mysqli_connect("localhost", "jjladero", "", "test");
			if ( mysqli_connect_errno($con))
			{
				echo "Failed to connect to MySQL" . mysqli_connect_error();
				break;
			}
			$sql = "DELETE FROM dbtable 
			WHERE id=$id";
				
			if ( ! mysqli_query($con, $sql) )
			{
				die('Error: ' . mysqli_error($con));
			}
			
			echo "1 record removed from database";
			
			
			mysqli_close($con);			
			break;
			
		default :
			break;
	}
	
	header('Location: http://localhost/project1/release_notes.php');
	
#	print "OP: $op , $tool_name , \"$comment\" , Date: \"$entry_date\" ";
	

?>
