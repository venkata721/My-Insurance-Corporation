<?php

session_start();

$uservalue = $_POST['username'];
$paswdvalue = $_POST['password']; 

if($uservalue&&$paswdvalue)
{
	if(isset($_POST['submit']))
	{
	$con = mysqli_connect('localhost', 'root', '') or 	die('Could not connect to the Database');

	mysqli_select_db($con,'mydb') or 	die('Could not connect to the Database');

	$query=mysqli_query($con, "SELECT * FROM member_login where user_id ='$uservalue';");
	$numrows = mysqli_num_rows($query);
	if($numrows != 0)
	{
		$row = mysqli_fetch_assoc($query);

		$dbusername= $row['user_id'];
		$dbpassword= $row['user_password'];

		if($uservalue == $dbusername AND $paswdvalue == $dbpassword)
		{
			$_SESSION['username'] = $uservalue;
			$_SESSION['loggedin'] = "YES";	
			header("refresh:1; url=memberpage.php");
		}
		else
		{
			$validCheckerr = "Invalid User Name or Password";
			header("refresh: 1; url=Homepage.html");
		}
		}
		else
		{
				header("refresh:0; url=Homepage.html");
				echo "<script> alert('That user does not exist !!');
				</script> ";
				die("That user does not exist !!");
				mysqli_close($con);
		}
	}
}
else
		{
			header("refresh:0; url=Homepage.html");
			echo "<script> alert('Please provide your User Name or Password ! ');
				</script> ";
		}

		mysqli_close($con);
?>