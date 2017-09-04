
<?php
    			$comm= ", ";
			   $first_name = $_POST['fname'];
               $middle_name = $_POST['mname'];
			   $last_name = $_POST['lname'];
               $user_name = $_POST['rusername'];
               $password = $_POST['rpassword'];
			   $occupation = $_POST['occp'];
               $email = $_POST['email'];
               $phonenum = $_POST['code'];
			   $phonenum.=$_POST['code1'];
			   $phonenum.=$_POST['code2'];
			   $phonenum.=$_POST['code3'];
               $curr_addr=$_POST['cstrad1'].$comm;
			   $curr_addr.=$_POST['cstrad2'].$comm;
			   $curr_addr.=$_POST['cstate'].$comm;
			   $curr_addr.=$_POST['ccountry'].$comm;
			   $curr_addr.=$_POST['czip'];
				$quest1 = $_POST['quesval1'];
				$quest2 = $_POST['quesval2'];
				$quest3 = $_POST['quesval3'];

if(isset($_POST['addrcheck']) && $_POST['addrcheck'] == "yes" )
{
	
			   $perm_addr = $_POST['cstrad1'].$comm;
			   $perm_addr.= $_POST['cstrad2'].$comm;
			   $perm_addr.=$_POST['cstate'].$comm;
			   $perm_addr.= $_POST['ccountry'].$comm;
			   $perm_addr.=$_POST['czip'];
				
}
else
{

				$perm_addr = $_POST['pstrad1'].$comm;
			   $perm_addr.=$_POST['pstrad2'].$comm;
			   $perm_addr.=$_POST['pstate'].$comm;
			   $perm_addr.=$_POST['pcountry'].$comm;
			   $perm_addr.=$_POST['pzip'];
}			
				
if((isset($_POST['Register'])) && 
((	empty($first_name) || empty($middle_name) || empty($last_name) || empty($user_name) || empty($password) || empty($email) || empty($curr_addr) || empty($perm_addr) || empty($phonenum) 
	|| empty($quest1) || empty($quest2) || empty($quest3))))
	{
	echo "<script> alert('Please make sure to enter all the fields') </script>";
			header("refresh:1; url=mbrregister.php"); 
		
	}	
	else
	{
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
					
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Could not connect: ' . mysqli_error());
               
            mysqli_select_db($conn,'mydb') or die('Could not connect: ' . mysqli_error());

            
			$regquery= "INSERT INTO member_register (FIRST_NAME,MIDDLE_NAME,LAST_NAME,OCCUPATION,EMAIL,PHONE_NUM,CURR_ADDR,PERM_ADDR,USER_NAME,PASSWORD,QUESTION1,QUESTION2,QUESTION3) 
			VALUES ('$first_name','$middle_name','$last_name','$occupation','$email','$phonenum','$curr_addr','$perm_addr','$user_name','$password','$quest1','$quest2','$quest3');";
			
			$retval1 = mysqli_query($conn,$regquery);
            
            if(! $retval1 ) 
			{
               die('Could not enter data: ' . mysqli_error());
            }
            else
			{
				echo "<script> alert('Member Details are Registered successfully) </script>";
	   			header("refresh:1; url=memregsuccess.php");
            }
	
            $logquery = "INSERT INTO member_login (user_id,user_password) VALUES('$user_name','$password')";
		
			$retval2 = mysqli_query( $conn,$logquery);
            
			if(! $retval2) 
			{
               die('Could not enter data: ' . mysqli_error());
            }
            else
			{
			   echo "Login Details are Registered successfully\n";
            }

			mysqli_close($conn);		

		}
            ?>