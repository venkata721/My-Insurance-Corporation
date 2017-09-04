<?php 
	session_start();
	$user = $_SESSION['username'];
	$nwpwd = $_POST['npassword'];
	$cfpwd = $_POST['cpassword'];
		if( empty ($nwpwd) && empty($cfpwd) )
		{
			
		echo ("<script type='text/javascript'>alert('Please enter the Values ')</script>");
		header("refresh:1; url=passwordchange.php");
		}

	if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['submit'])
	{
		if ($nwpwd == $cfpwd && !empty($nwpwd) && !empty(cfpwd))
		{
			$dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
					
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Could not connect: ' . mysqli_error());
			
			mysqli_select_db($conn,'mydb') or die('Could not connect: ' . mysqli_error());
			
			
			$updatequery = mysqli_query($conn,"update member_login set user_password = '$nwpwd' where user_id = '$user'");
			if($updatequery)
			{
				header("refresh:1; url=paswordconfirm.html");

			}
			else
			{
				header("refresh:1; url=passwordchange.php");

			}
		mysqli_close($conn);		
		}
		
	}
		
	?>
	