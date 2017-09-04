<!DOCTYPE html>

<html>
			
	<head>
		<meta charset = "utf-8">
		<title>Dental Insurance Product Information Page</title>
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
				       <h2 style="text-align: center;background-color: white">Quote For Dental Insurance Product </h2>
				<form method="post" action="membdentalinsaplyprocess.php">
				<fieldset style="float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> PRODUCT </b></fieldset>
				<fieldset name="productname" value="DENTAL INSURANCE" style=" float:left; font-size: 20px; text-align: center; height: 30px; width: 578px; background-color: skyblue"><b> DENTAL INSURANCE </b></fieldset>

				<fieldset style="font-size: 20px; text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b> About You </b></fieldset>
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
				<fieldset style="font-size: 20px; text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b> Coverage Options </b></fieldset>
				<fieldset style="float:left; font-size: 20px; text-align: left; height: 300px; width: 580px; background-color: white;">
				<br/>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b>Type of Plan required  </b>
				<br/>
				<input type="radio" name="plan" <?php if (isset($plntype) && $plntype == "Platinum") echo "checked";?> value="Platinum" style="padding: 6px; margin:12px;">Platinum
				<input type="radio" name="plan" <?php if (isset($plntype) && $plntype == "Gold") echo "checked";?> value="Gold" style="padding: 6px; margin:12px;">Gold
				<input type="radio" name="plan" <?php if (isset($plntype) && $plntype == "Silver") echo "checked";?> value="Silver" style="padding: 6px; margin:12px;">Silver
				<input type="radio" name="plan" <?php if (isset($plntype) && $plntype == "Bronze") echo "checked";?> value="Bronze" style="padding: 6px; margin:12px;">Bronze
				
				</label>
				
				</div>
				<br/>
				<div style="border: none;">
				<label for="age" style="font-size: 20px;"><b> Have you had previous dental insurance within the past 60 days ?<br/></b>
				<br/>
				<input type="radio" name="prevdent" <?php if (isset($prevdental) && $prevdental == "Yes") echo "checked";?> value="Yes" id="prevdenty" style="padding: 6px; margin:12px;">Yes
				<input type="radio" name="prevdent" <?php if (isset($prevdental) && $prevdental == "Yes") echo "checked";?> value="No"id="prevdentn" style="padding: 6px; margin:12px;">No
				
				</label>
				</div>
				</fieldset>
		
				<fieldset style="font-size: 20px; text-align: left; height: 300px; width: 573px; background-color: white;">
				<br/>
				<div style="border: none; background-color: lightyellow">
				<label for="age" style="font-size: 20px;"><b>Add Other Valuable Benefits </b> <br/>
				Vision<br/>
				Maintain your eyesight with an affordable vision plan covering routine exams and prescription eyeware
				<br/>
				<input type="radio" name="addtnben" id="visiony" <?php if (isset($addldent) && $addldent == "Vision") echo "checked";?> value="Vision" style="padding: 6px; margin:12px;">Vision - All adults [ Add $9.96/mo ]<br/>
				<input type="radio" name="addtnben" id="visionn" <?php if (isset($addldent) && $addldent == "No additional Benefits") echo "checked";?> value="No additional Benefits" style="padding: 6px; margin:12px;">No additional "vision" benefits
				
</label>						
			</div>
				

				</fieldset>
				<fieldset style="font-size: 20px;  text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b> Life Style  </b></fieldset>
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
				<fieldset style="font-size: 20px;  text-align: left; height: 30px; width: 1200px; background-color: skyblue"><b> Medical History  </b></fieldset>
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
				
				<aside class="aside_right">
							<div id="homepage" style="display: none;">
								
								<h2 style="padding: 10px; background-color: white; text-align: center;"> LOGIN DETAILS </h2>
								<br/>
								<hr>
								<br/>
								<form action="" >		
								<label style=" font-size:20px; padding: 10px; ">
								User Name : 
								
								<br/>
								<br/>
								
								<input type='text' id = "un" maxlength="10" name="username" style="padding: 5px;" ><span style=" font-size: 15px; color: blue;"> Register If you donot have an User Name</span>
																<br/>

								</label>
								<br/>
								<hr>
																<br/>

								<label style=" font-size:20px; padding: 10px; ">
								Password : 
								<br/>
									
								<br/>
								<input type='password' id = "pwd" name="password" style="padding: 5px;"> <span style=" font-size: 15px; color: blue;"> Must Contain A-Z,a-z,0-9,No Special Char's</span>
								</label>
								<br/>
								<br/>
								<hr>
								<br/>
								<br/>
								
								<input type='button' onsubmit= "validate();" value=" Sign In " style="padding: 10px; font-size: 15px;"> 
								<input type='button' onsubmit= "validate();" value=" Reset " style="padding: 10px; font-size: 15px; margin-left: 10px;"> 
							</form>
								<br/>
								<br/>
								<hr>
								<br/>
								<br/>
								<a href= "passwordchange.html" style=" font-size:20px; padding: 10px; " > Having Trouble Signing in / Forgot Username/Password </a>
								<br/>
								<br/>
								<hr>
								<br/>
								<br/>
								<a href= "" style=" font-size:20px; padding: 8px; " > Click Here to Sign Up / Register as a Member </a>
								<br/>
								<br/>
								<hr>
								<br/>
								<br/>								
								<br/>
								<br/>
								<br/>
			
							</div>		
							
		<div id="aboutuspage" style="padding-bottom: 22px;">
								
								<h2 style="padding: 10px; background-color: white; text-align: center;"> ABOUT US </h2>
								<br/>
								<hr>
								<br/>
								<img src="images/zuck.jpg" height="160px" width="180px" alt="President">								
								<span style=" position: absolute; font-size:20px; vertical-align: right; overflow: hidden; ">
								<b>President:</b><br/>
								<b>Jagadeesh Babu T</b><br/>
								adadadasdadadasadsdasdas
								asdasdas<br/>
								dasdasd
								asdasdasdasdasdasdassd
								asd<br/>assdas
								adasd
								asdassdasasd
								assd
								adad<br/>adasdadadasadsdasdasad
								asdasdasda<br/>
								<a href = ""> Click here to Know more</a>
								</span>
								<br/>
								<hr>
								<br/>
								<img src="images/nad.jpg" height="160px" width="180px" alt="President">								
								<span style=" position: absolute; font-size:20px; vertical-align: right; overflow: hidden; ">
								<b> Vice President:</b><br/>
								<b>Jagadeesh Babu T</b><br/>
								adadadasdadadasadsdasdas
								asdasdas<br/>
								dasdasd
								asdasdasdasdasdasdassd
								asd<br/>assdas
								adasd
								asdassdasasd
								assd
								adad<br/>adasdadadasadsdasdasad
								asdasdasda<br/>
								<a href = ""> Click here to Know more</a>
								</span>
								<br/>
								<hr>
								<br/>
								<img src="images/sundar.jpeg" height="160px" width="180px" alt="President">								
								<span style=" position: absolute; font-size:20px; vertical-align: right; overflow: hidden; ">
								<b>Cheif Executive Officer:</b><br/>
								<b>Jagadeesh Babu T</b><br/>
								adadadasdadadasadsdasdas
								asdasdas<br/>
								dasdasd
								asdasdasdasdasdasdassd
								asd<br/>assdas
								adasd
								asdassdasasd
								assd
								adad<br/>adasdadadasadsdasdasad
								asdasdasda<br/>
								<a href = ""> Click here to Know more</a>
								</span>
								<br/>
								<br/>
								<hr>
							</div>
							
						<div id="productspage" style="padding-bottom: 22px;">
								
								<h2 style="padding: 10px; background-color: white; text-align: center;"> PRODUCTS OFFERED </h2>
								<br/>
								<hr>
								<br/>					
								<h3 style="font-size:25px; color: rgb(0,0,255);"><b>LIFE INSURANCE : </b></h3>
								<br/>
								<a href="" style="font-size:20px; padding-right: 10px;"> Apply For the Product </a> 
								<a href="" style="font-size:20px; padding-left: 20px;"> Know About the Product </a> </li>
								<br/>
								<br/>
								<hr>
								<br/>					
								<h3 style="font-size:25px; color: rgb(0,0,255);"><b>HEALTH INSURANCE : </b></h3>
								<br/>
								<a href="" style="font-size:20px; padding-right: 10px;"> Apply For the Product </a> 
								<a href="" style="font-size:20px; padding-left: 20px;"> Know About the Product </a> </li>
								
								<br/>
								<br/>
								<hr>
								<br/>
								<h3 style="font-size:25px; color: rgb(0,0,255);"><b>AUTO INSURANCE : </b></h3>
								<br/>
								<a href="" style="font-size:20px; padding-right: 10px;"> Apply For the Product </a> 
								<a href="" style="font-size:20px; padding-left: 20px;"> Know About the Product </a> </li>
								
								<br/>
								<br/>
								<hr>
								<br/>					
								<h3 style="font-size:25px; color: rgb(0,0,255); "><b>DENTAL INSURANCE : </b></h3>
								<br/>
								<a href="" style="font-size:20px; padding-right: 10px;"> Apply For the Product </a> 
								<a href="" style="font-size:20px; padding-left: 20px;"> Know About the Product </a> </li>
								<br/>
								<br/>
								<br/>
								<hr>
								<br/>
													
								<h3 style="font-size:25px; color: rgb(0,0,255);"><b>PROPERTY INSURANCE : </b></h3>
								<br/>
								<a href="" style="font-size:20px; padding-right: 10px;"> Apply For the Product </a> 
								<a href="" style="font-size:20px; padding-left: 20px;"> Know About the Product </a> </li>
								<br/>
								<br/><br/>
								
															
							</div>

								<div id="contactuspage" style="padding-bottom: 45px;" >
								<h2 style="padding: 10px; background-color: white; text-align: center;"> CONTACT US </h2>
								<br/>
								<hr>
								<br/>
								<img src="images/phn.png" height="160px" width="180px" alt="Phone">								
								<span style=" position: absolute; font-size:20px; vertical-align: right; overflow: hidden; ">
								<b>Phone Details:</b><br/>
								<b>Office Phone & Fax</b><br/>
								+1 316 258 5895(Phone)<br/>
								+1 316 258 5895(Fax)<br/>
								<b>Toll Free Numbers</b><br/>
								+ 1800 210 6199<br/>
								+1800 210 5698</span>
								<br/>
								<hr>
								<br/>
								<img src="images/em.png" height="160px" width="180px" alt="President">								
								<span style=" position: absolute; font-size:20px; vertical-align: right; overflow: hidden; ">
								<b>Email Details:</b><br/>
								<b>Customer Service Email</b><br/>
								MXS44840@UCMO.EDU<br/>
								<b>IT Service Email</b><br/>
								MXS44840@UCMO.EDU<br/>
								<b>Official Email</b><br/>
								MXS44840@UCMO.EDU<br/>
								</span>
								<br/>
								<hr>
								<br/>
								<img src="images/al.jpg" height="160px" width="180px" alt="Live Support">								
								<span style=" position: absolute; font-size:20px; vertical-align: right; overflow: hidden; ">
								<b>Chat Support</b><br/>
								<b>Click below for online chat</b><br/>
								<a href=""> Chat with Help Desk Representative </a><br/>
								<a href=""> Chat with Help Desk Representative </a><br/>
								<b>Click below for Skype chat</b><br/><br/>
								<a href=""> Skype Representative <img src="images/skype.jpg" height="20px" width="20px"> </a>
								<br/>
								<br/>
								<br/>
								<br/>

							</div>													
																					
				</aside>
				
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
