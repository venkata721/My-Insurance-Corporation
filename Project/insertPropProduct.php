
<?php
	session_start();
	$user = $_SESSION['username'];
	$productname= $_POST['productname'];
	$productstatus = "APPLIED";
	$prodpremium = "42$/Month";	

if(isset($_POST['confirm'])) 
{
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
					
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Could not connect: ' . mysqli_error());
			
               
            mysqli_select_db($conn,'mydb') or die('Could not connect: ' . mysqli_error());
           
 
			$regquery= "INSERT INTO member_products (userid,product_name,product_status,product_premium) VALUES ('$user','$productname','$productstatus','$prodpremium');";
			
			$retval1 = mysqli_query($conn,$regquery);
            
            if(! $retval1 ) 
			{
               die('Could not enter data: ' . mysqli_error($conn));
            }
            else
			{
	   			header("refresh:1; url=membpropinsaplyconfirm.php");
            }
	
		mysqli_close($conn);		

}
		
            ?>