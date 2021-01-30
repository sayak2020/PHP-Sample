<?php
	ob_start();
	session_start();
?>
<?
	//error_reporting(E_ALL);
	//ini_set("display_errors",1);
?>
<html>
	<body>
	<h2> Enter user name and password </h2>
	<?php
		$msg="";
	if(isset($_POST['login'])&&!empty($_POST['username'])&&!empty($_POST['password'])) {
	
		if($_POST['username']=='teacher' && $_POST['password']=='1234') {
			$_SESSION['valid']=true;
			$_SESSION['timeout']=time();
			$_SESSION['username']='login';
			echo "you have enter valid usrname and pw";
			header('Refresh: 0; URL = teacherfetch.php');
			
		}
		else  {
			$msg='wrong user name or password';
			echo $msg;
			
		}
	}
	
	?>
	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='post'>
	ID : <input type ="text" name ="username"><br/><br/>
	PASSWORD  : <input type ="text" name ="password"><br/><br/>
	<input type='submit' name='login' value='login'><br/><br/><br/><br/><br/>
	</form>
	
	
	</body>
</html>	
