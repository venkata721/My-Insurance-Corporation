<!DOCTYPE html>

<html>
			
	<head>
		<meta charset = "utf-8">
		<title>Property Insurance Product Information Page</title>
		<link rel="stylesheet" href="css/main4.css" />
			<script>
			</script>

<?php 
session_start();

$user = $_SESSION['username'];


if($_SERVER["REQUEST_METHOD"] == "POST")
{
$finame = $_POST['fname'];
$miname = $_POST['mname'];
$laname = $_POST['lname'];
$Hgt = $_POST['feet']." "."Feet";
$Hgt .= " ".$_POST['inches']." "."Inches";

$email = $_POST['email'];
 
$noofple = $_POST['nopep'];
$pdate = $_POST['month']."/";
$pdate .= $_POST['date']."/";
$pdate .= $_POST['year'];

if(((	empty($finame) || empty($miname) || empty($laname) || empty($Hgt) || empty($email) || empty($noofple) || empty($pdate) || empty($_POST['usres'])	|| 
	empty($_POST['gender']) || empty($_POST['prevprop']) || empty($_POST['useprop']) || empty($_POST['estmile']) || empty($_POST['spool']) || 
	empty($_POST['fhyd']) || empty($_POST['busprem']) || empty($_POST['moborman'])|| empty($_POST['inscancel']))) && isset($_POST["apply"]))
	{
			echo "<script> alert('Please make sure to enter all the fields') </script>";
			header("refresh:1; url=membpropinsaply.php"); 
	
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
if(isset($_POST['prevprop']))
{
$preprop = $_POST['prevprop'];
}
else
{
$preprop = "Not Avaialble";
}
if(isset($_POST['useprop']))
{
 $usepro = $_POST['useprop'];
}
else
{
$usepro = "Not Avaialble";
}
if(isset($_POST['estmile']))
{
$estmiles = $_POST['estmile'];
}
else
{
$estmiles = "Not Avaialble";
}
if(isset($_POST['spool']))
{
 $swpool = $_POST['spool'];
}
else
{
$swpool = "Not Avaialble";
}
if(isset($_POST['fhyd']))
{
$fhydrnt =$_POST['fhyd'];
}
else
{
$fhydrnt = "Not Avaialble";
}
if(isset($_POST['busprem']))
{
 $buspremis = $_POST['busprem'];
}
else
{
$buspremis = "Not Avaialble";
}
if(isset($_POST['moborman']))
{
$mobiormanuf = $_POST['moborman'];
}
else
{
$mobiormanuf = "Not Avaialble";
}
if(isset($_POST['inscancel']))
{
$inscan = $_POST['inscancel'];
}
else
{
$inscan = "Not Avaialble";
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
					<a href="membpropinsaply.html" ><img src="images/backward.ico"  height="40px" width="50px" style=" position: absolute; right: 350px;"></a>
									<a href="logout.php" ><img src="images/logout.png"  height="35px" width="95px" style=" position: absolute; top:105px; right: 350px;"></a>

				<section class="section_left" id="secleft" style="height: 680px;  width:1200px; overflow: auto;">
				
				<br/>			
				<div style="overflow: auto;">			
				       <h2 style="text-align: center;background-color: skyblue">Details For Applied Property Insurance Product </h2>
				<form method="post" action="insertPropProduct.php">
				<fieldset style="float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> PRODUCT </b></fieldset>
				<fieldset name="productname" value="PROPERTY INSURANCE" style=" float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> PROPERTY INSURANCE </b></fieldset>
				<input type="hidden" name="productname" value="PROPERTY INSURANCE">
				<fieldset style="font-size: 20px; text-align: center; height: 30px; width: 1200px; background-color: skyblue; border: 1px solid black;"><b> About You </b></fieldset>

				<fieldset style="float:left;  height: 1050px; width: 1180px; background-color: white;">
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
				Have you moved to a new home in the last six months? 
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $preprop; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Desired coverage start date
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $pdate; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				How will you be using this property as of now ?
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $usepro; ?> 
				</fieldset>
				<br/>
				<fieldset style="font-size: 20px; text-align: center; height: 30px; width: 1200px; background-color: skyblue; border: 1px solid black;"><b> Requirements </b></fieldset>
				<br/>

				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Estimate Miles to nearest fire department(in Miles)
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $estmiles;?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left; height: 50px; width:580px ; border: none; background-color: lightyellow;">
				Is there a swimming pool on the premises ?
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 50px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $swpool;?> 
				</fieldset>
				<br/>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 50px; width:580px ; border: none; background-color: lightyellow;">
				Is your home within 1,000 feet of a fire hydrant?
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 50px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $fhydrnt ; ?> 
				</fieldset>
				<br/>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 50px; width:580px ; border: none; background-color: lightyellow;">
				Do you conduct a business on the premises?
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 50px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $buspremis ; ?> 
				</fieldset>
				<br/>
				<br/>
				<fieldset style="font-size: 20px; text-align: center; height: 20px; width: 1200px; background-color: skyblue; border: 1px solid black;"><b> Property Information </b></fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Is your home a mobile or manufactured home ?

				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $mobiormanuf; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 20px; width:580px ; border: none; background-color: lightyellow;">
				Number of people living in your household?
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 20px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $noofple; ?> 
				</fieldset>
				<br/>
				<fieldset style="float: left;font-size: 20px; text-align: left;height: 40px; width:580px ; border: none; background-color: lightyellow;">
				How many times has your home insurance been cancelled for non-payment in the past 3 years ?				
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left;height: 40px; width:585px ;border: none; background-color: lightyellow;">
				<?php echo $inscan; ?> 
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
