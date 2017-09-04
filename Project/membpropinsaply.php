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
				       <h2 style="text-align: center;background-color: white">Quote For Property Insurance Product </h2>
				<form method="post" action="membpropinsaplyprocess.php">
				<fieldset style="float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> PRODUCT </b></fieldset>
				<fieldset name="productname" value="PROPERTY INSURANCE" style=" float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> PROPERTY INSURANCE </b></fieldset>

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
				<label for="VehiType" style="font-size: 20px;"><b>Have you moved to a new home in the last six months? </b>
				<br/>
				<input type="radio" name="prevprop" id="prevpropy" <?php if (isset($preprop) && $preprop == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="prevprop" id="prevpropn" <?php if (isset($preprop) && $preprop == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;">No
				<br/>
				</label>
				</div>
				<br/>
				<div style="border: none;">
				<label for="purchasedt" style="font-size: 20px;"><b> Desired coverage start date</b> 
				<br/>
				<input type="text" size="3" maxlength="2" name="month" id="month" placeholder= "MM" style="padding: 6px; margin:12px;">
				<input type="text" size="3" maxlength="2" name="date" id="date" placeholder= "DD" style="padding: 6px; margin:12px;">
				<input type="text" size="3" maxlength="4" name="year" id="year" placeholder= "YYYY"style="padding: 6px; margin:12px;">
				</label>
			</div>
		
	
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 300px; width: 573px; background-color: white;">
				<br/>
				<br/>
				
				<div style="border: none;">
				<label for="purchasedt" style="font-size: 20px;"><b> How will you be using this property as of now?</b> 
				<br/>				
				<input type="radio" name="useprop" id="primocft" <?php if (isset($usepro) && $usepro == "Primary Owner Occupied - Full Time") echo "checked";?> value="Primary Owner Occupied - Full Time" style="padding: 6px; margin:12px;">Primary Owner Occupied - Full Time
				<input type="radio" name="useprop" id="secresd" <?php if (isset($usepro) && $usepro == "Secondary Residence") echo "checked";?> value="Secondary Residence" style="padding: 6px; margin:12px;">Secondary Residence
				<input type="radio" name="useprop" id="seasresd" <?php if (isset($usepro) && $usepro == "Seasonal Residence") echo "checked";?> value="Seasonal Residence" style="padding: 6px; margin:12px;">Seasonal Residence
				<input type="radio" name="useprop" id="leasrent" <?php if (isset($usepro) && $usepro == "Lease Rental") echo "checked";?> value="Lease Rental" style="padding: 6px; margin:12px;">Lease Rental
				<input type="radio" name="useprop" id="vactrent" <?php if (isset($usepro) && $usepro == "Vacation Rental") echo "checked";?> value="Vacation Rental" style="padding: 6px; margin:12px;">Vacation Rental
				</label>
			</div>
				</fieldset>
				<fieldset style="font-size: 20px;  text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b> Requirements </b></fieldset>
				<fieldset style="float:left; font-size: 20px; text-align: left; height: 300px; width: 580px; background-color: white;">
				<div style="border: none;">
				<label for="VehiType" style="font-size: 20px;"><b>Estimate Miles to nearest fire department(in Miles) </b>
				<br/>
				</label>
				<input type="radio" name="estmile" id="estmile1" <?php if (isset($estmiles) && $estmiles == "1-15") echo "checked";?> value="1-15" style="padding: 6px; margin:12px;">1-15
				<input type="radio" name="estmile" id="estmile1" <?php if (isset($estmiles) && $estmiles == "Greater than 15") echo "checked";?> value="Greater than 15" style="padding: 6px; margin:12px;">Greater than 15
								</div>
				
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Is there a swimming pool on the premises? </b>
				<br/>
				<br/>
				<input type="radio" name="spool" id="spooly" <?php if (isset($swpool) && $swpool == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="spool" id="spooln" <?php if (isset($swpool) && $swpool == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;">No
				</label>
				</div>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Is your home within 1,000 feet of a fire hydrant?   </b>
				<br/>
				<br/>
				<input type="radio" name="fhyd" id="fhydy" <?php if (isset($fhydrnt) && $fhydrnt == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="fhyd" id="fhydn" <?php if (isset($fhydrnt) && $fhydrnt == "No") echo "checked";?> value="No"style="padding: 6px; margin:12px;">No
				</label>
				</div>
				
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 300px; width: 573px; background-color: white;">
								<br/><br/>

				<div style="border: none;">
				<label for="antithft" style="font-size: 20px;"><b>Do you conduct a business on the premises?  </b>(A child care, home salon or other activity that involves customers visiting your home is considered as a business) 
				<br/>
				<input type="radio" name="busprem" id="Yes" <?php if (isset($buspremis) && $buspremis == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="busprem" id="No" <?php if (isset($buspremis) && $buspremis == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;">No
				</label>
				</div>
				</fieldset>
				<fieldset style="font-size: 20px;  text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b> Property Information  </b></fieldset>
				<fieldset style="float:left; font-size: 20px; text-align: left; height: 300px; width: 580px; background-color: white;">
				<div style="border: none;">
				<label for="antithft" style="font-size: 20px;"><b>Is your home a mobile or manufactured home? </b><sup style="color: red;"> * </sup>	
				<br/><br/>
				<input type="radio" name="moborman" id="mobormany" <?php if (isset($mobiormanuf) && $mobiormanuf == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="moborman" id="mobormann" <?php if (isset($mobiormanuf) && $mobiormanuf == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;">No
				</label>
				</div>
				<br/><br/>

				<div style="border: none;">
				<label for="antithft" style="font-size: 20px;"><b>Number of people living in your household?</b> 
				<br/>
				<input type="text" size="3" maxlength="2" name="nopep" id="nopep" style="padding: 6px; margin:12px;">
			</label>
				</div>
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 300px; width: 573px;background-color: white;">
							<br/><br/>

				<div style="border: none;">
				<label for="Vehiinfo" style="font-size: 20px;"><b> How many times has your home insurance been cancelled for non-payment in the past 3 years ?  <br/></b> 
				<br/>
				<input type="radio" name="inscancel" id="inscancel1" <?php if (isset($inscan) && $inscan == "1") echo "checked";?> value="1" style="padding: 6px; margin:12px;">1
				<input type="radio" name="inscancel" id="inscancel2" <?php if (isset($inscan) && $inscan == "2") echo "checked";?> value="2" style="padding: 6px; margin:12px;">2
				<input type="radio" name="inscancel" id="inscancel3" <?php if (isset($inscan) && $inscan == "3") echo "checked";?> value="3" style="padding: 6px; margin:12px;">3
				<input type="radio" name="inscancel" id="inscancel4" <?php if (isset($inscan) && $inscan == "4 +") echo "checked";?> value="4 +" style="padding: 6px; margin:12px;">4 +
				</label>
				</div>
				
				</fieldset>
				<fieldset align="center">
				<input  type="submit" name="apply" value="Continue To Apply the Product" style="padding: 10px; font-size: 15px;">
				</fieldset>
				</div>
					 					   
																						
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
