<?php

session_start();
			$questionval1 = $_POST['quesval1'];
			$questionval2 = $_POST['quesval2'];
			$questionval3 = $_POST['quesval3'];
			$user = $_POST['user'];
			$question1 = $question2 = $question3 = "";
            
			 
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if(isset($_POST['next']))
			{
			$dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
					
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Could not connect: ' . mysqli_error());
			
			mysqli_select_db($conn,'mydb') or die('Could not connect: ' . mysqli_error());
			
			
			$profquery = mysqli_query($conn,"select * from member_login where user_id = '$user' ;");

			$rows = mysqli_num_rows($profquery);

			if($rows != 0)
			{
				$rowval = mysqli_fetch_assoc($profquery);
					$userfetch = $rowval['user_id'];
					if($userfetch == $user )	
					{
						$_SESSION['username'] =  $userfetch;
					echo ("<script type='text/javascript'>alert('Member is Avaialble')</script>");
					header("refresh:1; url=passwordseccheck.php");
					}
					else
					{
					echo ("<script type='text/javascript'>alert('Invalid Member')</script>");
					header("refresh:1; url=passwordseccheck.php");
						
						
					}
			}
			else
			{
				echo ("<script type='text/javascript'>alert('Please Enter the User Name')</script>");
				header("refresh:1; url=passwordseccheck.php");
			}
					
		
			
			$fullnmqry = mysqli_query($conn,"select QUESTION1,QUESTION2,QUESTION3 from member_register where USER_NAME = '$user'");
			$numrows = mysqli_num_rows($fullnmqry);
			if($numrows != 0)
		{
				$row = mysqli_fetch_assoc($fullnmqry);
					$question1= $row['QUESTION1'];
					$question2= $row['QUESTION2'];
					$question3= $row['QUESTION3'];	
			
			if($questionval1 == $question1 && $questionval2 == $question2 && $questionval3 == $question3)
			{	
					 echo ("<script type='text/javascript'>alert('Answers are Valid')</script>");
						header("refresh:1; url=passwordchange.php");

					}
			else
					{
							echo ("<script type='text/javascript'>alert(' Invalid Answers')</script>");
							header("refresh:1; url=passwordseccheck.php");
					}
			}
		}
		else
				{
					echo ("<script type='text/javascript'>alert(' Please enter the Answers')</script>");
					header("refresh:1; url=passwordseccheck.php");
				}
			
		
				
			
			
	mysqli_close($conn);
			}
						   
            ?>
            
