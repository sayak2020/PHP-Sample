<html>
<head>
	<style>
		table, th, td
	{ border : 1px solid black ; }
	</style>
</head>
<body><h1> STUDENT DETAILS </h1><br/><br/>
	<?php
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$db="nit";
		$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
		if($conn->connect_error) {
			die("connection failed".$conn->connect_error);
		}
		$sql="SELECT * FROM student";
		$result=$conn->query($sql);
		if($result->num_rows>0)  {
			echo "<table><tr><th>NAME</th><th>Email</th><th>Phone</th><th>class</th></tr>";
			while($row=$result->fetch_assoc())
			{
				echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["class"]."</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo "0 results";
		}
		$conn->close();
		?> 
        Click ti insert:<a href="studentinsert.html">click</a>
        <br/><br/><br/><br/><a href="frontpage.php">BACK</a>	
</body>
</html>		
