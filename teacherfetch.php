<html>
    <head>
	<style>
		table, th, td
	{ border : 1px solid black ; }
	</style>
</head>
<body>
<?php
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$db="nit";
		$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
		if($conn->connect_error) {
			die("connection failed".$conn->connect_error);
		}
		$sql="SELECT * FROM teacher";
		$result=$conn->query($sql);
		if($result->num_rows>0)  {
			echo "<table><tr><th>NAME</th><th>Email</th><th>Department</th></tr>";
			while($row=$result->fetch_assoc())
			{
				echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["department"]."</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo "0 results";
		}
		$conn->close();
       ?><br/><br/><br/><br/><br/><br/><br/><br/><br/>
       Click to insert:<a href="teacherinsert.html">click</a>        

   <br/><br/> <a href="frontpage.php">BACK</a>	
</body>
</html>		
	
