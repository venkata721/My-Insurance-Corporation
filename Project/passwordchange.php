

<!DOCTYPE html>
<html>

	
	<head>
		<meta charset = "utf-8">
		<title>Password Change Page</title>
		<link rel="stylesheet" href="css/main4.css" />
			<script>
			  function show1() 
			{
              document.getElementById("homepage").style.display = "none";
			  document.getElementById("secleft").style.width= "1200px";
		      document.getElementById("aboutuspage").style.display = "none";
			  document.getElementById("productspage").style.display = "none";
			  document.getElementById("contactuspage").style.display = "none";
			 }
			 function show2() 
			{
						  document.getElementById("secleft").style.width= "700px";
              document.getElementById("homepage").style.display = "none";
		      document.getElementById("aboutuspage").style.display = "block";
			  document.getElementById("productspage").style.display = "none";
			  document.getElementById("contactuspage").style.display = "none";
			 }
			 function show3() 
			{
    			document.getElementById("secleft").style.width= "700px";
              document.getElementById("homepage").style.display = "none";
		      document.getElementById("aboutuspage").style.display = "none";
			  document.getElementById("productspage").style.display = "block";
			  document.getElementById("contactuspage").style.display = "none";
			 }
			 function show4() 
			{
						  document.getElementById("secleft").style.width= "700px";
              document.getElementById("homepage").style.display = "none";
		      document.getElementById("aboutuspage").style.display = "none";
			  document.getElementById("productspage").style.display = "none";
			  document.getElementById("contactuspage").style.display = "block";
			 }
			 
			 function validatenwPaswdChange()
			 {
				    	var pswd = document.getElementById("npwd").value;
					var letters = /^[0-9a-zA-Z]+$/;  
				if(pswd.match(letters) && ( (pswd.length == 8) ) ) 
						{  
					document.getElementById("npasswdtext").innerHTML = "Password Accepted";  
						}
						else
						{
						document.getElementById("npasswdtext").innerHTML = "Provide a Valid Password ";  

						}
				if(pswd == "")
							 {
 								document.getElementById("npasswdtext").innerHTML = "Password shoud not be empty!";
							  } 
				
			 }
			 
			 function validatecfPaswdChange()
			 {
				    	var pswd = document.getElementById("cpwd").value;
					var letters = /^[0-9a-zA-Z]+$/;  
				if(pswd.match(letters) && (  (pswd.length == 8) ) ) 
						{  
					document.getElementById("cpasswdtext").innerHTML = "Password Accepted";  
						}
						else
						{
						document.getElementById("cpasswdtext").innerHTML = "Provide a Valid Password ";  

						}
				if(pswd == "")
							 {
 								document.getElementById("cpasswdtext").innerHTML = "Password shoud not be empty!";
							  } 
				
			 }
</script>
	</head>
	
	<body>
				<div class="container">
				
				<header class="top">
						<img src="images/log.png" alt="Logo" class="logo" />
						<h1 class="titlesize"> Kansas City Insurance Corporation</h1>
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
				
			<a href="Homepage.html" ><img src="images/backward.ico" height="40px" width="50px" style="position: absolute; right:350px;"></a>
			
				<section class="section_left" id="secleft" style="height: 680px; width: 1200px">
						<br/>
				<br/>
						<div>			
				       <h1>Provide your Password Information</h1>
					   <br/><br/>
					   <form method = "post" action="validatePaswdChange.php">
             <label style=" font-size:20px; padding: 15px; ">
								New Password : 
								<input type='password' id = "npwd" maxlength= "8" placeholder = "Must be 8 characters in length" onblur="validatenwPaswdChange();" name="npassword" style="padding: 8px; margin-left: 45px;">
								<span id="npasswdtext" style=" font-size: 15px; color: blue;"> Must Contain A-Z,a-z,0-9,No Special Char's</span>
								<br/>
								<br/>
								</label>
								
								<label style=" font-size:20px; padding: 10px; ">
								Confirm Password : 
								<input type='password' id = "cpwd" maxlength= "8" placeholder = "Must be 8 characters in length" name="cpassword" onblur="validatecfPaswdChange();" style="padding: 8px; margin-left: 20px"> 
								<span id="cpasswdtext" style=" font-size: 15px; color: blue;"> Must Contain A-Z,a-z,0-9,No Special Char's</span>
								<br/>
								<br/>
								</label>
								<br/>
								<br/>
								<input type='submit' name="submit" value=" Change Password " style="padding: 10px; position: absolute; left: 550px; font-size: 15px;"> 
								<br/>
								<br/>
									<br/>
								<br/>
							
					</form>		
				</div>							
																						
				</section>		
								<aside class="aside_right">
							
				<aside class="aside_right">
							<div id="homepage" style="padding-bottom: 2px;">
								
								<h2 style="padding: 10px; background-color: #62bfea; text-align: center; color: #99003d;"> LOGIN DETAILS </h2>
								<br/>
								<hr>
								<br/>
									<form action="loginaction.php" id="loginform" name="LoginForm" method="post" >		
										<label style=" font-size:20px; padding: 10px; ">
								<b>User Name :</b> 
								<br/>
								<br/>
										<input type='text' id = "user" maxlength="9" name="username" onblur="validateuseformat();" style="padding: 5px;" >
										<span id= "usertext"style=" font-size: 15px; color: blue;"> Register If you donot have an User Name</span>
								<br/>
									</label>
								<br/>
								<hr>
								<br/>
									<label style=" font-size:20px; padding: 10px; ">
								<b>Password : </b>
								<br/>
									
								<br/>
										<input type='password' id = "pwd" maxlength="8" name="password" placeholder = "Must be 8 characters in length" onblur="validatepswdformat();" style="padding: 5px;"> 
										<span id="passwdtext" style=" font-size: 15px; color: blue;"> Must Contain A-Z,a-z,0-9,No Special Char's</span>
									</label>
								<br/>
								<br/>
								<hr>
								<br/>
								<br/>
								
								<input type='submit'  value=" Sign In " id="signin" name="submit" style="padding: 10px; font-size: 15px;"> 
								<input type='button' onclick= "resetFields();" value=" Reset " style="padding: 10px; font-size: 15px; margin-left: 10px;"> 
		                        <span id="validCheck" name="validcheck" style="color: red; font-size: 20px"></span>

							</form>
								<br/>
								<br/>
								<hr>
								<br/>
								<br/>	
								<a href= "passwordseccheck.php" style=" color: black; font-size:20px; padding: 10px; " > Having Trouble Signing in ? / Forgot Password </a>
								<br/>
								<br/>
								<hr>
								<br/>
								<br/>
								<a href= "mbrregister.php" style=" color: black; font-size:20px; padding: 8px; " > Click Here to Sign Up / Register as a Member </a>
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
								
								<h2 style="padding: 10px; background-color: #62bfea; text-align: center; color: #99003d;"> ABOUT US </h2>
								<br/>
								<hr>
								<br/>
								<img src="images/zuck.jpg" height="160px" width="180px" alt="President">								
								<span style=" position: absolute; font-size:20px; vertical-align: right; overflow: hidden; ">
								<b>President:</b><br/>
								<b>Venkata Anvesh T</b><br/>
								My warmest greetings to the Mules <br/> Insurance Corporation (MIC) a
								s you<br/> spearhead the 
								observance
								of the 12th<br/>
								Depositor
								Protection 
								and Awareness<br/> 
								<a href = ""> Click here to Know more</a>
								</span>
								<br/>
								<hr>
								<br/>
								<img src="images/sundar.jpeg" height="160px" width="180px" alt="President">								
								<span style=" position: absolute; font-size:20px; vertical-align: right; overflow: hidden; ">
								<b> Vice President:</b><br/>
								<b>Masthan Khadari Sd</b><br/>
								A strong banking sector is
								key to a<br/> 
								vibrant 
								economy and equitably <br/>
								progressive nation. 
								This can only be <br/>
								secured through
								the trust and confid<br/>ence 
								<a href = ""> Click here to Know more</a>
								</span>
								<br/>
								<hr>
								<br/>
								<img src="images/sundar.jpeg" height="160px" width="180px" alt="President">								
								<span style=" position: absolute; font-size:20px; vertical-align: right; overflow: hidden; ">
								<b>Cheif Executive Officer:</b><br/>
								<b>Puneeth</b><br/>
								I thank the men and women of the <br/>
								MIC for remaining steadfast in <br/> 
								fulfilling your duties as mandated <br/>
								under R.A. 3591 and R.A. 9576. <br/>
								<a href = ""> Click here to Know more</a>
								</span>
								<br/>
								<br/>
								<hr>
							</div>

							<div id="productspage" style="padding-bottom: 22px;">
								
								<h2 style="padding: 10px; background-color: #62bfea; text-align: center; color: #99003d;"> PRODUCTS OFFERED </h2>
								<br/>
								<hr>
								<br/>					
								<h3 style="font-size:25px; color: rgb(0,0,255);"><b>LIFE INSURANCE : </b></h3>
								<br/>
								<a href="lifeinsinfo.html" style="font-size:20px; padding-right: 10px; color: black"> Know About the Product </a> 
								<a href="lifeinsapply.html" style="font-size:20px; padding-left: 20px;color: black"> Get a Quote & Apply </a> 
								<br/>
								<br/>
								<hr>
								<br/>					
								<h3 style="font-size:25px; color: rgb(0,0,255);"><b>HEALTH INSURANCE : </b></h3>
								<br/>
								<a href="healthinsinfo.html" style="font-size:20px; padding-right: 10px; color: black"> Know About the Product </a> </li>
								<a href="healthinsaply.html" style="font-size:20px; padding-left: 20px; color: black"> Get a Quote & Apply  </a> 
								<br/>
								<br/>
								<hr>
								<br/>
								<h3 style="font-size:25px; color: rgb(0,0,255);"><b>AUTO INSURANCE : </b></h3>
								<br/>
								<a href="autoinsinfo.html" style="font-size:20px; padding-right: 10px; color: black"> Know About the Product </a> </li>
								<a href="autoinsaply.html" style="font-size:20px; padding-left: 20px; color: black"> Get a Quote & Apply   </a> 						
								<br/>
								<br/>
								<hr>
								<br/>					
								<h3 style="font-size:25px; color: rgb(0,0,255); "><b>DENTAL INSURANCE : </b></h3>
								<br/>
								<a href="dentinsinfo.html" style="font-size:20px; padding-right: 10px;color: black"> Know About the Product </a> </li>
								<a href="dentalinsaply.html" style="font-size:20px; padding-left: 20px;color: black">  Get a Quote & Apply </a> 
								<br/>
								<br/>
								<br/>
								<hr>
								<br/>
													
								<h3 style="font-size:25px; color: rgb(0,0,255);"><b>PROPERTY INSURANCE : </b></h3>
								<br/>
								<a href="propinsinfo.html" style="font-size:20px; padding-right: 10px;color: black"> Know About the Product </a> </li>
								<a href="propinsaply.html" style="font-size:20px; padding-left: 20px; color: black"> Get a Quote & Apply  </a> 
								<br/>
								<br/><br/>
								
															
							</div>
				
								<div id="contactuspage" style="padding-bottom: 40px;" >
								<h2 style="padding: 10px; background-color: #62bfea; text-align: center; color: #99003d;"> CONTACT US </h2>
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
								CUST_SERVICE@UCMO.EDU<br/>
								<b>IT Service Email</b><br/>
								IT_SERVICE@UCMO.EDU<br/>
								<b>Official Email</b><br/>
								OFFICIAL@UCMO.EDU<br/>
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
																		
				</aside>
				<footer class="page_footer">
					<b>&copy; Copyright @  Students of University of Central Missouri</b><br/>
					Kansas City Insurance Corporation<br/>
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
