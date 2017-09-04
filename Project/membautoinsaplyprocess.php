<!DOCTYPE html>

<html>
			
	<head>
		<meta charset = "utf-8">
		<title>Auto Insurance Product Information Page</title>
		<link rel="stylesheet" href="css/main4.css" />
			<script> 
</script>

<?php 
session_start();

$user = $_SESSION['username'];


if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($user))
{
$finame = $_POST['fname'];
$miname = $_POST['mname'];
$laname = $_POST['lname'];
$Hgt = $_POST['feet']." "."Feet";
$Hgt .= " ".$_POST['inches']." "."Inches";
$email = $_POST['email'];
 
$vectyp = $_POST['vehicle'];
$pdate = $_POST['month']."/";
$pdate .= $_POST['date']."/";
$pdate .= $_POST['year'];
$estdr = $_POST['mile'];

if(((	empty($finame) || empty($miname) || empty($laname) || empty($Hgt) || empty($vectyp) || empty($pdate) || empty($estdr) || empty($_POST['usres'])	|| 
	empty($_POST['gender']) || empty($_POST['vehipur']) || empty($_POST['pruse']) || empty($_POST['drivlicsus']) || empty($_POST['driveviol']) || 
	empty($_POST['vehicATP']) || empty($_POST['histdise']) || empty($_POST['vehABF']))) && isset($_POST["apply"]))
	{
			echo "<script> alert('Please make sure to enter all the fields') </script>";
			header("refresh:1; url=membautoinsaply.php"); 
	
	}

if(isset($_POST['usres']))
{
$usresdnt = $_POST['usres'];
}
else
{
$usresdnt = "Not Avaialble";
}

if(isset($_POST['gender']))
{
$gen = $_POST['gender'];
}
else
{
$gen = "Not Avaialble";
}
if(isset($_POST['vehipur']))
{
$vflo = $_POST['vehipur'];
}
else
{
$vflo = "Not Avaialble";
}
if(isset($_POST['pruse']))
{
 $puv = $_POST['pruse'];
}
else
{
$puv = "Not Avaialble";
}
if(isset($_POST['drivlicsus']))
{
$drlicsus = $_POST['drivlicsus'];
}
else
{
$drlicsus = "Not Avaialble";
}
if(isset($_POST['driveviol']))
{
 $motvio = $_POST['driveviol'];
}
else
{
$motvio = "Not Avaialble";
}
if(isset($_POST['vehicATP']))
{
$vehATP =$_POST['vehicATP'];
}
else
{
$vehATP = "Not Avaialble";
}
if(isset($_POST['histdise']))
{
 $Hisdis = $_POST['histdise'];
}
else
{
$Hisdis = "Not Avaialble";
}
if(isset($_POST['vehicABF']))
{
$vehABF = $_POST['vehicABF'];
}
else
{
$vehABF = "Not Avaialble";
}
}
else
{
echo "<script> window.alert('Please login with your user name') </script>";
header("refresh:1; url=Homepage.html"); 
}  

?>

	</head>	

	<body>
				<div class="container">
				
				<header class="top">
						<img src="images/log.png" alt="Logo" class="logo" />
						<h1 class="titlesize"> Mules Insurance System</h1>
						<nav class="page_nav">
									<ul style="padding-top:50px">
												 <span id="uli1" onclick="show1();">Home</span></li>
												 <span	id="uli2" onclick="show2();">About Us		</span></li>				
												 <span id="uli3" onclick="show3();">Products		</span></li>
												 <span	id="uli4" onclick="show4();">Contact Us	</span></li>																											
									</ul>					
						</nav>
						<div class="clear"></div>
				</header>
					<a href="membautoinsaply.php" ><img src="images/backward.ico"  height="40px" width="50px" style=" position: absolute; right: 350px;"></a>
			
				<section class="section_left" id="secleft" style="height: 680px;  width:1200px; overflow: auto;">
				
				<br/>			
				<div style="overflow: auto;">			
				       <h2 style="text-align: center;background-color: skyblue">Details For Applied Auto Insurance Product </h2>
				<form method="post" action="insertAutoProduct.php">
				<fieldset style="float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> PRODUCT </b></fieldset>
				<fieldset name="productname" value="AUTO INSURANCE" style=" float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> AUTO INSURANCE </b></fieldset>
				<input type="hidden" name="productname" value="AUTO INSURANCE">
				<fieldset style="font-size: 20px; text-align: center; height: 30px; width: 1200px; background-color: skyblue; border: 1px solid black;"><b> About You </b></fieldset>

				<fieldset style="float:left;  height: 1100px; width: 1180px; background-color: white;">
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				First Name
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $finame; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ;border: none; background-color: lightyellow;">
				Middle Name
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ; border: none;background-color: lightyellow;">
				<?php echo $miname; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; border: none;width:580px ; background-color: lightyellow;">
				Last Name 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $laname;?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ;border: none; background-color: lightyellow;">
				Height 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $Hgt;?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none;background-color: lightyellow;">
				Are you a permanent U.S Resident ? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $usresdnt;?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ;border: none; background-color: lightyellow;">
				Gender 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $gen;?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ;border: none; background-color: lightyellow;">
				Email
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $email; ?> 
				</fieldset>
				<br/>
				<fieldset style="font-size: 20px; text-align: center; height: 30px; width: 1200px; background-color: skyblue; border: 1px solid black;"><b> Coverage Options</b></fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Vehicle type / make
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $vectyp; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Purchase Date
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $pdate; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Is this vehicle Financed, Leased or Owned ?  
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $vflo; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Primary Use of Vehicle ? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $puv; ?> 
				</fieldset>
				<br/>
				<fieldset style="font-size: 20px; text-align: center; height: 30px; width: 1200px; background-color: skyblue; border: 1px solid black;"><b> Requirements </b></fieldset>
				<br/>

				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Estimate Miles to be driven in next year
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $estdr;?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left; height: 50px; width:580px ; border: none; background-color: lightyellow;">
				Have you had your driver's license suspended or had an accident within the last three years ? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 50px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $drlicsus;?> 
				</fieldset>
				<br/>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 50px; width:580px ; border: none; background-color: lightyellow;">
				Have you had any motor vehicle moving violations within the last three years ? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 50px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $motvio ; ?> 
				</fieldset>
				<br/>
				<br/>

				<fieldset style="font-size: 20px; text-align: center; height: 30px; width: 1200px; background-color: skyblue; border: 1px solid black;"><b> Vehicle History </b></fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Have your Vehicle equipped with Anti Theft facility ? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $vehATP; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 40px; width:580px ; border: none; background-color: lightyellow;">
				Do you have a history of heart disease, diabetes, glucose intolerance, or cancer ? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 40px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $Hisdis; ?> 
				</fieldset>
				<br/>
				<br/>

				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Have your Vehicle equipped with Air Bag facility ? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $vehABF; ?> 
				</fieldset>
				<br/>
				<fieldset align="center">
				<input  type="submit" name="confirm" value="Confirm The Product" style="padding: 10px; font-size: 15px;">
				</fieldset>		
				</div>
					 					   
				</form>																		
				</section>		
				
				
				<footer class="page_footer">
					<b>&copy; Copyright @  Students of University of Central Missouri</b><br/>
					Mules Insurance System<br/>
					Follow Us On :<br/><br/>
					<a href="www.facebook.com"> <img src="images/fb.png" alt="Facebook" height="30px" width="30px"> </a>
					<a href="www.twiiter.com"> <img src="images/twit.png" alt="Twitter" height="30px" width="30px"> </a>
					<a href="www.youtube.com"> <img src="images/yt.png" alt="You Tube" height="30px" width="30px"> </a>
					<a href="www.gmail.com"> <img src="images/gpl.png" alt="Gmail" height="30px" width="30px"> </a>
					
					<br/>
				</footer>
				
				
				</div>				

	</body>
	
</html>
