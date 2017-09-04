<!DOCTYPE html>

<html>
			
	<head>
		<meta charset = "utf-8">
		<title>Life Insurance Product Information Page</title>
		<link rel="stylesheet" href="css/main4.css" />
			<script>
			 
</script>

<?php 
session_start();

$user = $_SESSION['username'];


if($_SERVER["REQUEST_METHOD"] == "POST")
{
$age = $_POST['age']." "."Years";
$weight = $_POST['weight']." "."Lbs";
$Hgt = $_POST['feet']." "."Feet";
$Hgt .= " ".$_POST['inches']." "."Inches";

if(((	empty($age) || empty($weight) || empty($Hgt) || empty($_POST['usres'])	|| 	empty($_POST['gender']) || empty($_POST['yrsglpc']) || 
		empty($_POST['spf']) || empty($_POST['covergamt']) || empty($_POST['guiltdrvng']) || empty($_POST['motviol']) || 
		empty($_POST['drlsuspnd']) || empty($_POST['crs']) || empty($_POST['tobusg']) || empty($_POST['hisbp']) || empty($_POST['hishd']) || empty($_POST['parhd'])))
		&& isset($_POST["apply"]))
	{
			echo "<script> window.alert('Please make sure to enter all the fields') </script>";
			header("refresh:1; url=memblifeinsapply.php"); 
	
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
if(isset($_POST['yrsglpc']))
{
$yersglpc = $_POST['yrsglpc'];
}
else
{
$yersglpc = "Not Avaialble";
}
if(isset($_POST['spf']))
{
 $specfet = $_POST['spf'];
}
else
{
$specfet = "Not Avaialble";
}
if(isset($_POST['covergamt']))
{
$coveramt = $_POST['covergamt'];
}
else
{
$coveramt = "Not Avaialble";
}
if(isset($_POST['guiltdrvng']))
{
 $guiltdrv = $_POST['guiltdrvng'];
}
else
{
$guiltdrv = "Not Avaialble";
}
if(isset($_POST['motviol']))
{
$motorviol =$_POST['motviol'];
}
else
{
$motorviol = "Not Avaialble";
}
if(isset($_POST['drlsuspnd']))
{
 $drlsus = $_POST['drlsuspnd'];
}
else
{
$drlsus = "Not Avaialble";
}
if(isset($_POST['tobusg']))
{
$tobusage = $_POST['tobusg'];
}
else
{
$tobusage = "Not Avaialble";
}
if(isset($_POST['hisbp']))
{
 $histbp = $_POST['hisbp'];
}
else
{
 $histbp = "Not Avaialble";
}	
if(isset($_POST['hishd']))
{
 $histhd = $_POST['hishd'];
}
else
{
$histhd = "Not Avaialble";
}
if(isset($_POST['parhd']))
{
 $parthd = $_POST['parhd'];
}
else
{
$parthd = "Not Avaialble";
}
}
else
{
echo "<script> alert('Please login with your user name') </script>";
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
					<a href="memblifeinsapply.php"><img src="images/backward.ico"  height="40px" width="50px" style=" position: absolute; right: 350px;"></a>
									<a href="logout.php" ><img src="images/logout.png"  height="35px" width="95px" style=" position: absolute; top:105px; right: 350px;"></a>

				<section class="section_left" id="secleft" style="height: 680px;  width:1200px; overflow: auto;">
				
				<br/>			
				<div style="overflow: auto;">			
				       <h2 style="text-align: center;background-color: skyblue">Details For Applied Life Insurance Product </h2>
		<form method="post" action="insertLifeProduct.php">
				<fieldset style="float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> PRODUCT </b></fieldset>
				<fieldset name="productname" value="LIFE INSURANCE" style=" float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> LIFE INSURANCE </b></fieldset>
				<input type="hidden" name="productname" value="LIFE INSURANCE">
				<fieldset style="font-size: 20px; text-align: center; height: 30px; width: 1200px; background-color: skyblue; border: 1px solid black;"><b> About You </b></fieldset>

				<fieldset style="float:left;  height: 1100px; width: 1180px; background-color: white;">
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Age
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $age; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ;border: none; background-color: lightyellow;">
				Height 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ; border: none;background-color: lightyellow;">
				<?php echo $Hgt; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; border: none;width:580px ; background-color: lightyellow;">
				Weight 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $weight;?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ;border: none; background-color: lightyellow;">
				Gender  
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $gen;?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none;background-color: lightyellow;">
				Are you a permanent U.S Resident ? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $usresdnt;?> 
				</fieldset>
				<br/>
				
				<fieldset style="font-size: 20px; text-align: center; height: 30px; width: 1200px; background-color: skyblue; border: 1px solid black;"><b> Coverage Options</b></fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Years of Guranteed Level Premium Coverage 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $yersglpc; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Special Features 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $specfet; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Coverage Amount 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $coveramt; ?> 
				</fieldset>
				<br/>
				<fieldset style="font-size: 20px; text-align: center; height: 30px; width: 1200px; background-color: skyblue; border: 1px solid black;"><b> Life Style </b></fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 50px; width:580px ; border: none; background-color: lightyellow;">
				Have you ever been found guilty of driving under the influence (DUI/DWI) or of reckless driving ?	
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 50px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $guiltdrv;?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left; height: 50px; width:580px ; border: none; background-color: lightyellow;">
				Have you had your driver's license suspended or had an accident within the last three years ? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 50px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $drlsus;?> 
				</fieldset>
				<br/>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 50px; width:580px ; border: none; background-color: lightyellow;">
				Have you had any motor vehicle moving violations within the last three years ? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 50px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $motorviol ; ?> 
				</fieldset>
				<br/>
				<br/>

				<fieldset style="font-size: 20px; text-align: center; height: 30px; width: 1200px; background-color: skyblue; border: 1px solid black;"><b> Medical History </b></fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 68px; width:580px ; border: none; background-color: lightyellow;">
				Which statement best describes your use of tobacco or nicotine products (including cigarettes, dip, snuff, chewing tobacco, pipe tobacco, and nicotine patches or gum)?				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 68px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $tobusage; ?> 
				</fieldset>
				<br/>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 50px; width:580px ; border: none; background-color: lightyellow;">
				Do you have a history of heart disease, diabetes, glucose intolerance, or cancer ? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 50px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $histhd; ?> 
				</fieldset>
				<br/>
				<br/>

				<fieldset style="float: left;font-size: 20px; text-align: left;height: 50px; width:580px ; border: none; background-color: lightyellow;">
				Do you or have you recently taken medicine for or had a history of high blood pressure or high cholesterol?	
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 50px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $histbp; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 45px; width:580px ; border: none; background-color: lightyellow;">
				Have your parents or any siblings died as a result of cancer, heart disease, or stroke before age 60? (Answer for blood-relations only) 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 45px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $parthd; ?> 
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
