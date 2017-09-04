<!DOCTYPE html>

<html>
			
	<head>
		<meta charset = "utf-8">
		<title>	Member Information Page</title>
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
			
			 
</script>
<?php
			session_start();
		
			$user = $_SESSION['username'];
			
			$fullname = $occupation = $email = $phonenum = $curraddr = $permaddr = "";
			$fullnamedis = $occupationdis = $emaildis = $phonenumdis = $curraddrdis = $permaddrdis = "";

            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
					
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Could not connect: ' . mysqli_error());
			mysqli_select_db($conn,'mydb') or die('Could not connect: ' . mysqli_error());
			$fullnmqry = mysqli_query($conn,"select FIRST_NAME,MIDDLE_NAME,LAST_NAME from member_register where USER_NAME = '$user'");
			$numrows = mysqli_num_rows($fullnmqry);
			if($numrows != 0)
			{
				$row = mysqli_fetch_assoc($fullnmqry);
					$fname= $row['FIRST_NAME']." ";
					$mname= $row['MIDDLE_NAME']." ";
					$lname= $row['LAST_NAME'];
				$fullname = $fname;
				$fullname .= $mname;
				$fullname .= $lname;
				$fullnamedis = $fullname;
			}
			
			else
			{
				echo "No Rows fetched for username";
				die("That user does not exist !!");
			}
		


			$profquery = mysqli_query($conn,"select OCCUPATION,EMAIL,PHONE_NUM,CURR_ADDR,PERM_ADDR from member_register where USER_NAME = '$user' ;");

			$rows = mysqli_num_rows($profquery);

			if($rows != 0)
			{
				$row = mysqli_fetch_assoc($profquery);
					$occupation= $row['OCCUPATION'];
						if(isset($occupation))
						{
						$occupationdis = $occupation;
						}
						else
						{
						$occupationdis = "Not Avaialble";
						}
					$email= $row['EMAIL'];
						if(isset($email))
						{
						$emaildis = $email;
						}
						else
						{
						$emaildis = "Not Avaialble";
						}
					$phonenum= $row['PHONE_NUM'];
						if(isset($phonenum))
						{
						$phonenumdis = $phonenum;
						}
						else
						{
						$phonenumdis = "Not Avaialble";
						}

					$curraddr= $row['CURR_ADDR'];
						if(isset($curraddr))
						{
						$curraddrdis = $curraddr;
						}
						else
						{
						$curraddrdis = "Not Avaialble";
						}

					$permaddr= $row['PERM_ADDR'];
						if(isset($permaddr))
						{
						$permaddrdis = $permaddr;
						}
						else
						{
						$permaddrdis = "Not Avaialble";
						}

					}
			else
			{
				echo ("<script type='text/javascript'>alert('Member Not Avaialble')</script>");
				die("That user does not exist !!");
			}
			mysqli_close($conn);

			
		   
            
            ?>

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
						<a href="logout.php" ><img src="images/logout.png"  height="35px" width="95px" style=" position: absolute; top:105px; right: 350px;"></a>
			
				<section class="section_left" id="secleft" style="height: 680px;  width:1200px; overflow: auto;">
				
				<br/>			
				<div style="overflow: auto;">			
				       <h2 style="text-align: center;background-color: #e6e6ff">Hello, <?php echo ($fullnamedis); ?>. Welcome to Your Home Page !!! </h2>
				<section id="section_one" class="section_one" >
				<fieldset style=" float: left;font-size: 20px; padding: 5px; text-align: center;  height: 30px; width: 568px; background-color: #ff4d4d"><b> PRODUCTS APPLIED  </b></fieldset>
				<fieldset style="float:left;  height: 570px; width: 576px; ">

<?php
		
			$user = $_SESSION['username'];
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
					
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Could not connect: ' . mysqli_error());
			mysqli_select_db($conn,'mydb') or die('Could not connect: ' . mysqli_error());
			$prodqry = mysqli_query($conn,"select * from  member_products where userid = '$user'");
			while($row = mysqli_fetch_array($prodqry,MYSQLI_ASSOC))
			{
?>
				<h3 style="padding: 5px; text-align: left; background-color: #e6e6ff;  height: 20px; width:570px;"> <?php echo $row['product_name'] ?> </h3>
				<table >
				<tr> 
				<td style="padding: 5px; text-align: left; width:288px;"><b>PRODUCT STATUS : <?php echo $row['product_status'] ?> </b></td>
				<td style="padding: 5px; text-align: left; width:288px;"><b>PRODUCT PREMIUM :  <?php echo $row['product_premium'] ?> </b></td>				
				</tr>
				<tr> 
				<td style="padding: 5px; font-size: 17px; text-align: left;   width:288px;"><a href="http://www.bankofamerica.com" >Pay Your Premium</a></td>
				<td style="padding: 5px; font-size: 17px;text-align: left; width:288px;"><a href="http://www.google.com" >Call our Agent </a></td>				
				</tr>
				</table>		
<?php
			
			}
			
			mysqli_close($conn);
?>



				</fieldset>

				</section>
				<section id="section_two"class ="section_two">
				<fieldset style="padding: 5px;font-size: 20px;  height: 30px; width: 568px; text-align: center; background-color: #ff4d4d"><b> PROFILE INFORMATION </b></fieldset>
				
				<fieldset style="font-size: 20px; height: 570px; width: 576px;">
				<table border = 0 style="border: 2px solid black; background-color: #e6e6ff;" >
				<tr >
				<td style="font-size: 20px; text-align: right; height: 50px; width: 250px; "><b> Full Name :</b></td>
				<td style="font-size: 20px; text-align: left; height: 50px; width: 500px;"><b><?php echo $fullnamedis ;?></b> </td>
				</tr>
				<tr >
				<td style="font-size: 20px; text-align: right; height: 50px; width: 250px;"> <b>Occupation :  </b></td>
				<td style="font-size: 20px; text-align: left; height: 50px; width: 500px;"><b><?php echo $occupationdis ;?></b> </td>
				</tr>
				<tr >
				<td style="font-size: 20px; text-align: right; height: 50px; width: 250px;"><b> Phone Number  :</b></td>
				<td style="font-size: 20px; text-align: left; height: 50px; width: 500px;"><b><?php echo $phonenumdis ;?></b> </td>
				</tr>
				<tr >
				<td style="font-size: 20px; text-align: right; height: 50px; width: 250px;"> <b>Current Address :</b> </td>
				<td style="font-size: 20px; text-align: left; height: 50px; width: 500px;"><b><?php echo $curraddrdis ;?></b> <br/> </td>
				</tr>
				<tr >
				<td style="font-size: 20px; text-align: right; height: 50px; width: 250px;"> <b>Permanent Address  :</b></td>
				<td style="font-size: 20px; text-align: left; height: 50px; width: 500px;"><b><?php echo $permaddrdis ;?></b> <br/> </td>
				</tr>
				
				</table>
				<fieldset style=" float:left; padding: 2px;font-size: 20px;  height: 30px; width: 567px; text-align: center; background-color: #ff4d4d"><b> PREMIUM PAYMENT TYPE </b></fieldset>
				<a href=""><img style="border : 1px solid black;" src="images/payol.jpg" width ="284px" height ="159px" ><a>
				<a href=""><img style="border : 1px solid black;"src="images/check.jpg" width ="283px" height ="159px" ><a>
				<a href=""><img style="border : 1px solid black;"src="images/freequote.png" width ="572px;" height ="100px" ><a>

				</fieldset>

</section>

																						
</section>		
				
				<aside class="aside_right">
							<div id="homepage" style="padding-bottom: 2px; display :none">
								
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
								<a href="memblifeinsinfo.html" style="font-size:20px; padding-right: 10px; color: black"> Know About the Product </a> 
								<a href="memblifeinsapply.php" style="font-size:20px; padding-left: 20px;color: black"> Get a Quote & Apply </a> 
								<br/>
								<br/>
								<hr>
								<br/>					
								<h3 style="font-size:25px; color: rgb(0,0,255);"><b>HEALTH INSURANCE : </b></h3>
								<br/>
								<a href="membhealthinsinfo.html" style="font-size:20px; padding-right: 10px; color: black"> Know About the Product </a> </li>
								<a href="membhealthinsaply.php" style="font-size:20px; padding-left: 20px; color: black"> Get a Quote & Apply  </a> 
								<br/>
								<br/>
								<hr>
								<br/>
								<h3 style="font-size:25px; color: rgb(0,0,255);"><b>AUTO INSURANCE : </b></h3>
								<br/>
								<a href="membautoinsinfo.html" style="font-size:20px; padding-right: 10px; color: black"> Know About the Product </a> </li>
								<a href="membautoinsaply.php" style="font-size:20px; padding-left: 20px; color: black"> Get a Quote & Apply   </a> 						
								<br/>
								<br/>
								<hr>
								<br/>					
								<h3 style="font-size:25px; color: rgb(0,0,255); "><b>DENTAL INSURANCE : </b></h3>
								<br/>
								<a href="membdentinsinfo.html" style="font-size:20px; padding-right: 10px;color: black"> Know About the Product </a> </li>
								<a href="membdentalinsaply.php" style="font-size:20px; padding-left: 20px;color: black">  Get a Quote & Apply </a> 
								<br/>
								<br/>
								<br/>
								<hr>
								<br/>
													
								<h3 style="font-size:25px; color: rgb(0,0,255);"><b>PROPERTY INSURANCE : </b></h3>
								<br/>
								<a href="membpropinsinfo.html" style="font-size:20px; padding-right: 10px;color: black"> Know About the Product </a> </li>
								<a href="membpropinsaply.php" style="font-size:20px; padding-left: 20px; color: black"> Get a Quote & Apply  </a> 
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
