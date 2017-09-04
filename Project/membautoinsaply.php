<!DOCTYPE html>

<html>
			
	<head>
		<meta charset = "utf-8">
		<title>Auto Insurance Product Information Page</title>
		<link rel="stylesheet" href="css/main4.css" />
			<script>
			function addNewVehicle(){
			
									  document.getElementById("addvehicle").style.display= "block";

			}
			 
</script>
	
<?php 
session_start();

$user = $_SESSION['username'];

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
					<a href="memberpage.php" ><img src="images/backward.ico"  height="40px" width="50px" style=" position: absolute; right: 350px;"></a>
									<a href="logout.php" ><img src="images/logout.png"  height="35px" width="95px" style=" position: absolute; top:105px; right: 350px;"></a>

				<section class="section_left" id="secleft" style="height: 680px;  width:1200px; overflow: auto;">
				
				<br/>			
				<div style="overflow: auto;">			
				       <h2 style="text-align: center;background-color: white">Quote For Auto Insurance Product </h2>
			<form method="post" action="membautoinsaplyprocess.php">
				<fieldset style="float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> PRODUCT </b></fieldset>
				<fieldset name="productname" value="AUTO INSURANCE" style=" float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> AUTO INSURANCE </b></fieldset>

				<fieldset style="font-size: 20px; text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b> About You </b></fieldset>
				<fieldset style="float:left; font-size: 20px; text-align: left; height: 300px; width: 580px; background-color: white;">
				<div style="border: none;">
				<label for="firstname" style="font-size: 20px;"><b>First Name</b>   
				<input type="text" size="10" maxlength="15" name="fname" id="fname" style="padding: 6px; margin:12px;">
				<label for="middlename" style="font-size: 20px;"><b>Middle Name</b>   
				<input type="text" size="1" maxlength="1" name="mname" id="mname" style="padding: 6px; margin:12px;">
				<br/>
				<label for="lastname" style="font-size: 20px;"><b>Last Name</b>   
				<input type="text" size="10" maxlength="15" name="lname" id="lname" style="padding: 6px; margin:12px;">
				</label>
				</div>
				<div style="border: none;">
				<label for="height" style="font-size: 20px;"><b>Height</b> 
				<br/>
				<input type="text" size="3" maxlength="1" name="feet" id="feet" style="padding: 6px; margin:12px;">Feet
 				<input type="text" size="3" maxlength="1" name="inches" id="inches" style="padding: 6px; margin:12px;">Inches
				</label>
				</div>
				<div style="border: none;">
				<label for="resident" style="font-size: 20px;"><b>Are you a permanent U.S Resident ? </b>
				<br/>
				<input type="radio" name="usres" id="Yes" <?php if (isset($usresdnt) && $usresdnt == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="usres" id="No" <?php if (isset($usresdnt) && $usresdnt == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;">No
				</label>
				</div>
				
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 300px; width: 573px; background-color: white;">
				<br/>
				<div style="border: none;">
				<label for="gender" style="font-size: 20px;"><b>Gender </b> 
				<br/>
				<input type="radio" name="gender" id="male" <?php if (isset($gen) && $gen == "Male") echo "checked";?> value="Male" style="padding: 6px; margin:12px;" >Male
				<input type="radio" name="gender" id="female" <?php if (isset($gen) && $gen == "Female") echo "checked";?> value="Female" style="padding: 6px; margin:12px;"> Female
				</label>
				</div>
				
				<div style="border: none;">
				<label for="email" style="font-size: 20px;"><b>Email</b> (To receive quote copy)
				<br/>
				<input type="text" size="40" maxlength="30" name="email" id="email" style="padding: 6px; margin:12px;">
				</label>
				</div>
				<br/>
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b> Coverage Options </b></fieldset>
				<fieldset style="float:left; font-size: 20px; text-align: left; height: 300px; width: 580px; background-color: white;">
				<br/>
				<div style="border: none;">
				<label for="VehiType" style="font-size: 20px;"><b>Add your Vehicle type / make </b>
				<br/>
				</label>
 				<input type="text" size="13" maxlength="15" name="vehicle" id="vehicle" style="padding: 6px; margin:12px;">
				<br/>
				</div>
				<span style=" text-decoration: underline; color: blue; margin-left: 20px;" onclick="addNewVehicle();"> + Add More</span>
				<div id="addvehicle" style="display: none; margin-bottom: 0; padding-bottom: 0;">
				<label for="AnotherVehi" style="font-size: 20px;"><b>Another Vehicle type / make </b>
				<input type="text" size="9" maxlength="15" name="vehicle" id="vehicle" style="padding: 6px; margin:12px;">
				</label>
				</div>
				<br/>
				<div style="border: none;">
				<label for="Vehiinfo" style="font-size: 20px;"><b> Is this vehicle Financed, Leased or Owned?  <br/></b> 
				<br/>
				<input type="radio" name="vehipur" id="vehifin" <?php if (isset($vflo) && $vflo == "Financed") echo "checked";?> value="Financed" style="padding: 6px; margin:12px;" > Financed
				<input type="radio" name="vehipur" id="vehileas" <?php if (isset($vflo) && $vflo == "Leased") echo "checked";?> value="Leased" style="padding: 6px; margin:12px;"> Leased
				<input type="radio" name="vehipur" id="vehiown" <?php if (isset($vflo) && $vflo == "Owned") echo "checked";?> value="Owned" style="padding: 6px; margin:12px;"> Owned
				</label>
				</div>
		
	
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 300px; width: 573px; background-color: white;">
				<br/>
				<div style="border: none;">
				<label for="purchasedt" style="font-size: 20px;"><b>Purchase Date</b> 
				<br/>
				<input type="text" size="3" maxlength="2" name="month" id="month" placeholder= "MM" style="padding: 6px; margin:12px;">
				<input type="text" size="3" maxlength="2" name="date" id="date" placeholder= "DD" style="padding: 6px; margin:12px;">
				<input type="text" size="3" maxlength="4" name="year" id="year" placeholder= "YYYY"style="padding: 6px; margin:12px;">
				</label>
			</div>
			<div style="border: none;">
				<label for="Vehiinfo" style="font-size: 20px;"><b> Primary Use of Vehicle ?  <br/></b> 
				<br/>
				<input type="radio" name="pruse" id="personal" <?php if (isset($puv) && $puv == "Personal") echo "checked";?> value="Personal" style="padding: 6px; margin:12px;">Personal
				<input type="radio" name="pruse" id="busines" <?php if (isset($puv) && $puv == "Business") echo "checked";?> value="Business" style="padding: 6px; margin:12px;">Business
				</label>
				</div>
				</fieldset>
				<fieldset style="font-size: 20px;  text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b> Requirements </b></fieldset>
				<fieldset style="float:left; font-size: 20px; text-align: left; height: 300px; width: 580px; background-color: white;">
				<div style="border: none;">
				<label for="VehiType" style="font-size: 20px;"><b>Estimate Miles to be driven in next year </b>(Average vehicle mileage is 12,000 to 15,000 miles per year.)
				<br/>
				</label>
 				<input type="text" size="13" maxlength="15" name="mile" id="mile" style="padding: 6px; margin:12px;">
				<br/>
				</div>
				
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Have you had any motor vehicle moving violations within the last three years ? </b>
				<br/>
				<br/>
				<input type="radio" name="driveviol" id="Yes" <?php if (isset($motvio) && $motvio == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;"> Yes
				<input type="radio" name="driveviol" id="No" <?php if (isset($motvio) && $motvio == "No") echo "checked";?> value ="No" style="padding: 6px; margin:12px;"> No
				</label>
				</div>
				
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 300px; width: 573px; background-color: white;">
				<br/>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Have you had your driver's license suspended or had an accident within the last three years ? </b>
				<br/>
				<br/>
				<input type="radio" name="drivlicsus" id="Yes" <?php if (isset($drlicsus) && $drlicsus == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;"> Yes
				<input type="radio" name="drivlicsus" id="No" <?php if (isset($drlicsus) && $drlicsus == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;">No
				</label>
				</div>
				
				</fieldset>
				<fieldset style="font-size: 20px;  text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b> Vehicle History  </b></fieldset>
				<fieldset style="float:left; font-size: 20px; text-align: left; height: 300px; width: 580px; background-color: white;">
				<div style="border: none;">
				<label for="antithft" style="font-size: 20px;"><b>Have your Vehicle equipped with Anti Theft facility ? </b>
				<br/>
				<br/>
				<input type="radio" name="vehicATP" id="Yes" <?php if (isset($vehATP) && $vehATP == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;"> Yes
				<input type="radio" name="vehicATP" id="No" <?php if (isset($vehATP) && $vehATP == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;"> No
				</label>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Have your Vehicle equipped with Air Bag facility ? </b>
				<br/>
				<br/>
				<input type="radio" name="vehicABF" id="Yes"  <?php if (isset($vehABF) && $vehABF == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;"> Yes
				<input type="radio" name="vehicABF" id="No" <?php if (isset($vehABF) && $vehABF == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px"> No
				</label>
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 300px; width: 573px;background-color: white;">
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Do you have a history of heart disease, diabetes, glucose intolerance, or cancer ? </b> </label>
				<br/>
				<br/>
				<input type="radio" name="histdise" id="Yes" <?php if (isset($Hisdis) && $Hisdis == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;" >Yes
				<input type="radio" name="histdise" id="No" <?php if (isset($Hisdis) && $Hisdis == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;" > No
				
				</fieldset>
				<fieldset align="center">
				<input  type="submit" name="apply" value="Continue To Apply the Product" style="padding: 10px; font-size: 15px;">
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
