<?php
	$connection=mysql_connect("localhost","root","");
	$db=mysql_select_db("nit",$connection);
	if(isset($_POST['submit']))  {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
        $class=$_POST['class'];
		if($name!=''||$email!='') {
			$query=mysql_query("insert into student(name,email,phone,class) values('$name','$email','$phone','$class')");
				echo "<br/><br/> Data inserted successfully";
				
			        		
		}
		else {
			echo "<p> INSERTION FAILED </p>";
		}
	}
	mysql_close($connection);
    
?>
<html>
<body>

	click here to logout <a href="logout.php" title='logout'>Session</a><br/><br/>

	<a href="frontpage.php">BACK</a>

<body>
</html>