<?php
	$connection=mysql_connect("localhost","root","");
	$db=mysql_select_db("nit",$connection);
	if(isset($_POST['submit']))  {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$department=$_POST['department'];
		if($name!=''||$email!='') {
			$query=mysql_query("insert into teacher(name,email,department) values('$name','$email','$department')");
				echo "<br/><br/> Data inserted successfully";
				
			         
			
		}
		else {
			echo "<p> INSERTION FAILED </p>";
		}
	}
	mysql_close($connection);
	
?>
<html>
<body><br/><br/>
click here to logout <a href="logout.php" title='logout'>Session</a>
</body>
<html>