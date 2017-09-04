<!DOCTYPE html>

<html>
			
	<head>
		<meta charset = "utf-8">
		<title>Health Insurance Product Information Page</title>
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
$income = $_POST['hinc'];


if(((	empty($age) || empty($weight) || empty($Hgt) || empty($income) || empty($_POST['usres'])	|| 	empty($_POST['gender']) || empty($_POST['estye']) || 
		empty($_POST['doc']) || empty($_POST['docfac']) || empty($_POST['guiltdrvng']) || empty($_POST['motviol']) || 
		empty($_POST['drlsuspnd']) || empty($_POST['crs']) || empty($_POST['tobusg']) || empty($_POST['hisbp']) || empty($_POST['hishd']) || empty($_POST['parhd'])))
		&& isset($_POST["apply"]))
	{
			echo "<script> alert('Please make sure to enter all the fields') </script>";
			header("refresh:1; url=membhealthinsaply.php"); 
	
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
if(isset($_POST['estye']))
{
$estm = $_POST['estye'];
}
else
{
$estm = "Not Avaialble";
}
if(isset($_POST['doc']))
{
 $doct = $_POST['doc'];
}
else
{
$doct = "Not Avaialble";
}
if(isset($_POST['docfac']))
{
 $doctfac = $_POST['docfac'];
}
else
{
$doctfac = "Not Avaialble";
}

if(isset($_POST['crs']))
{
$othrpol = $_POST['crs'];
}
else
{
$othrpol = "Not Avaialble";
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
					<a href="membhealthinsaply.php" ><img src="images/backward.ico"  height="40px" width="50px" style=" position: absolute; right: 350px;"></a>
									<a href="logout.php" ><img src="images/logout.png"  height="35px" width="95px" style=" position: absolute; top:105px; right: 350px;"></a>

				<section class="section_left" id="secleft" style="height: 680px;  width:1200px; overflow: auto;">
				
				<br/>			
				<div style="overflow: auto;">			
				       <h2 style="text-align: center;background-color: skyblue">Details For Applied Health Insurance Product </h2>
				<form method="post" action="insertHealthProduct.php">
				<fieldset style="float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> PRODUCT </b></fieldset>
				<fieldset name="productname" value="HEALTH INSURANCE" style=" float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> HEALTH INSURANCE </b></fieldset>
				<input type="hidden" name="productname" value="HEALTH INSURANCE">
				<fieldset style="font-size: 20px; text-align: center; height: 30px; width: 1200px; background-color: skyblue; border: 1px solid black;"><b> About You </b></fieldset>

				<fieldset style="float:left;  height: 1250px; width: 1180px; background-color: white;">
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
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 40px; width:580px ; border: none; background-color: lightyellow;">
				Will you have other health insurance in force on the policy effective date or be eligible for MedicAid ? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 40px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $othrpol; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Would like to have a specialised doctor for treatment puroposes ?	
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $doct; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				What do you think your household income will be ?
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $income; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				 Do you want an estimate of your total yearly costs?
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $estm; ?> 
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
				<fieldset style="float: left;font-size: 20px; text-align: left; height: 50px; width:580px ; border: none; background-color: lightyellow;">
				Do you want to see if your doctors, medical facilities, and prescription drugs are covered?				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 50px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $doctfac;?> 
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
