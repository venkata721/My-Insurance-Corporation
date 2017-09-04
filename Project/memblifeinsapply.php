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
				       <h2 style="text-align: center;background-color: white">Quote For Life Insurance Product </h2>
				<form method="post" action="memblifeinsapplyprocess.php">
				<fieldset style="float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> PRODUCT </b></fieldset>
				<fieldset name="productname" value="LIFE INSURANCE" style=" float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> LIFE INSURANCE </b></fieldset>

				<fieldset style="font-size: 20px; text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b>ABOUT YOU </b></fieldset>
				<fieldset style="float:left; font-size: 20px; text-align: left; height: 300px; width: 580px; background-color: white;">
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Age</b>   
				<br/>
				<input type="text" size="4" maxlength="3" name="age" id="age" style="padding: 6px; margin:12px;">years
				</label>
				</div>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Height</b> 
				<br/>
				<input type="text" size="3" maxlength="1" name="feet" id="feet" style="padding: 6px; margin:12px;">Feet
 				<input type="text" size="3" maxlength="1" name="inches" id="inches" style="padding: 6px; margin:12px;">Inches
				</label>
				</div>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Are you a permanent U.S Resident ? </b>
				<br/>
				<input type="radio" name="usres" id="Yes" <?php if (isset($usresdnt) && $usresdnt == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="usres" id="No" <?php if (isset($usresdnt) && $usresdnt == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;">No
				</label>
				</div>
				
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 300px; width: 573px; background-color: white;">
				<br/>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Weight</b> 
				<br/>
				<input type="text" size="4" maxlength="3" name="weight" id="weight" style="padding: 6px; margin:12px;">lbs
				</label>
				</div>
				<br/>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Gender </b> 
				<br/>
				<input type="radio" name="gender" <?php if (isset($gen) && $gen == "Male") echo "checked";?> value="Male" id="male" style="padding: 6px; margin:12px;">Male
				<input type="radio" name="gender" <?php if (isset($gen) && $gen == "Yes") echo "checked";?> value="Female" id="female" style="padding: 6px; margin:12px;">Female
				</label>
				</div>
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b> COVERAGE OPTIONS </b></fieldset>
				<fieldset style="float:left; font-size: 20px; text-align: left; height: 300px; width: 580px; background-color: white;">
				<br/>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Years of Guranteed Level Premium Coverage *  </b>
				<br/>
				<input type="radio" name="yrsglpc" <?php if (isset($yersglpc) && $yersglpc == "10") echo "checked";?> value="10" id="ten" style="padding: 6px; margin:12px;">10
				<input type="radio" name="yrsglpc" <?php if (isset($yersglpc) && $yersglpc == "15") echo "checked";?> value="15" id="fifteen" style="padding: 6px; margin:12px;">15
				<input type="radio" name="yrsglpc" <?php if (isset($yersglpc) && $yersglpc == "10") echo "checked";?> value="20" id="twenty" style="padding: 6px; margin:12px;">20
				<input type="radio" name="yrsglpc" <?php if (isset($yersglpc) && $yersglpc == "10") echo "checked";?> value="30" id="thirty" style="padding: 6px; margin:12px;">30
				
				</label>
				
				</div>
				<br/>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b> Special Features  <br/></b>Available at an additional cost('Only one available') 
				<br/>
				<br/>
				<input type="radio" name="spf" id="adb" <?php if (isset($specfet) && $specfet == "Accidental Death Benefit") echo "checked";?> value="Accidental Death Benefit" style="padding: 6px; margin:12px;">Accidental Death Benefit<br/>
				<input type="radio" name="spf" id="cpf" <?php if (isset($specfet) && $specfet == "Children's Protection Rider") echo "checked";?> value="Children's Protection Rider"style="padding: 6px; margin:12px;"> Children's Protection Rider<br/>
				
				</label>
				</div>
		
	
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 300px; width: 573px; background-color: white;">
				<br/><br/>
				<div style="border: none; background-color: lightyellow">
				<label for="age" style="font-size: 20px;"><b>Coverage Amount </b> 
				<br/>
				<input type="radio" name="covergamt" id="covergamt1" <?php if (isset($coveramt) && $coveramt == "100,000 - 200,000 $") echo "checked";?> value="100,000 - 200,000 $" style="padding: 6px; margin:12px;">100,000 - 200,000 $
				<input type="radio" name="covergamt" id="covergamt2" <?php if (isset($coveramt) && $coveramt == "200,000 - 300,000 $") echo "checked";?> value="200,000 - 300,000 $" style="padding: 6px; margin:12px;"> 200,000 - 300,000 $
				<input type="radio" name="covergamt" id="covergamt2" <?php if (isset($coveramt) && $coveramt == "300,000 - 400,000 $") echo "checked";?> value="300,000 - 400,000 $" style="padding: 6px; margin:12px;"> 300,000 - 400,000 $
				<input type="radio" name="covergamt" id="covergamt2" <?php if (isset($coveramt) && $coveramt == "400,000 - 500,000 $") echo "checked";?> value="400,000 - 500,000 $" style="padding: 6px; margin:12px;"> 400,000 - 500,000 $

			
</label>			<p style="font-size: 15px;">
<br/>Overall maximum and minimum coverage amounts vary by issue age, rating class, and other underwriting factors.
					For quotes above $ 500,000 contact your financial services professional.
					</p>			
			</div>
				

				</fieldset>
				<fieldset style="font-size: 20px;  text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b> LIFE STYLE </b></fieldset>
				<fieldset style="float:left; font-size: 20px; text-align: left; height: 300px; width: 580px; background-color: white;">
				<div style="border: none;">
				<br/>
				<label for="age" style="font-size: 20px;"><b>Have you ever been found guilty of driving under the influence (DUI/DWI) or of reckless driving ? </b>
				<br/>
				<br/>
				<input type="radio" name="guiltdrvng" id="Yes" <?php if (isset($guiltdrv) && $guiltdrv == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="guiltdrvng" id="No" <?php if (isset($guiltdrv) && $guiltdrv == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;">No
				</label>
				</div>
				
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Have you had any motor vehicle moving violations within the last three years ? </b>
				<br/>
				<br/>
				<input type="radio" name="motviol" id="Yes" <?php if (isset($motorviol) && $motorviol == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="motviol" id="No" <?php if (isset($motorviol) && $motorviol == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;">No
				</label>
				</div>
				
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 300px; width: 573px; background-color: white;">
				<br/>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Have you had your driver's license suspended or had an accident within the last three years ? </b>
				<br/>
				<br/>
				<input type="radio" name="drlsus" id="Yes" <?php if (isset($drlsuspnd) && $drlsuspnd == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="drlsus" id="No" <?php if (isset($drlsuspnd) && $drlsuspnd == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;">No
				</label>
				</div>
				
				</fieldset>
				<fieldset style="font-size: 20px;  text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b>MEDICAL HISTORY  </b></fieldset>
				<fieldset style="float:left; font-size: 20px; text-align: left; height: 300px; width: 580px; background-color: white;">
				<div style="border: none;">
				<label for="age" style="font-size: 20px;">
				<b>Which statement best describes your use of tobacco or nicotine products (including cigarettes, dip, snuff, chewing tobacco,
				pipe tobacco, and nicotine patches or gum)?
				</b>
				<br/>
				<input type="radio" name="tobusg" id="tobusg1" <?php if (isset($tobusage) && $tobusage == "Never Used Last Five Years") echo "checked";?> value="Never Used Last Five Years" style="padding: 6px; margin:12px;">Never Used Last Five Years
				<input type="radio" name="tobusg" id="tobusg2" <?php if (isset($tobusage) && $tobusage == "Not within last Three Years") echo "checked";?> value="Not within last Three Years" style="padding: 6px; margin:12px;"> Not within last Three Years
				<input type="radio" name="tobusg" id="tobusg3" <?php if (isset($tobusage) && $tobusage == "Not used last 12 Months") echo "checked";?> value="Not used last 12 Months" style="padding: 6px; margin:12px;"> Not used last 12 Months
				<input type="radio" name="tobusg" id="tobusg4" <?php if (isset($tobusage) && $tobusage == "Used last 12 Months") echo "checked";?> value="Used last 12 Months" style="padding: 6px; margin:12px;"> Used last 12 Months
				</label>
				</div>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Do you or have you recently taken medicine for or had a history of high blood pressure or high cholesterol? </b>
				<br/>
				<br/>
				<input type="radio" name="hisbp" id="Yes" <?php if (isset($histbp) && $histbp == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="hisbp" id="No" <?php if (isset($histbp) && $histbp == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;">No
				</label>
				</fieldset>
				<fieldset style="font-size: 20px; text-align: left; height: 300px; width: 573px;background-color: white;">
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Do you have a history of heart disease, diabetes, glucose intolerance, or cancer ? </b> </label>
				<br/>
				<br/>
				<input type="radio" name="hishd" id="Yes" <?php if (isset($histhd) && $histhd == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="hishd" id="No" <?php if (isset($histhd) && $histhd == "No") echo "checked";?> value="No" style="padding: 6px; margin:12px;">No
				
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Have your parents or any siblings died as a result of cancer, heart disease, or stroke before age 60? (Answer for blood-relations only)</b>
				<br/>
				<br/>
				<input type="radio" name="parhd" id="Yes" <?php if (isset($parthd) && $parthd == "Yes") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="parhd" id="No" <?php if (isset($parthd) && $parthd == "No") echo "checked";?> value="Yes" style="padding: 6px; margin:12px;">No
				</label>
				</div>
				</fieldset>
	
				
				
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
