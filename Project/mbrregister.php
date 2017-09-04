<!DOCTYPE html>

<html>
			
	<head>
		<meta charset = "utf-8">
		<title> Member Registration Page</title>
			<link rel="stylesheet" href="css/main4.css" />
			<script>
			   function show1() 
			{
              document.getElementById("homepage").style.display = "none";
			  document.getElementById("secleft").style.width= "1200px";
			    document.getElementById("membregtable").style.width= "1200px";
			    document.getElementById("aboutuspage").style.display = "none";
			  document.getElementById("productspage").style.display = "none";
			  document.getElementById("contactuspage").style.display = "none";
			 }
			 function show2() 
			{
			  document.getElementById("secleft").style.width= "700px";
			  document.getElementById("membregtable").style.width= "700px";
			  document.getElementById("homepage").style.display = "none";
		      document.getElementById("aboutuspage").style.display = "block";
			  document.getElementById("productspage").style.display = "none";
			  document.getElementById("contactuspage").style.display = "none";
			 }
			 function show3() 
			{
    			document.getElementById("secleft").style.width= "700px";
              document.getElementById("homepage").style.display = "none";
  			  document.getElementById("membregtable").style.width= "700px";
		      document.getElementById("aboutuspage").style.display = "none";
			  document.getElementById("productspage").style.display = "block";
			  document.getElementById("contactuspage").style.display = "none";
			 }
			 function show4() 
			{
			  document.getElementById("secleft").style.width= "700px";
			  document.getElementById("membregtable").style.width= "700px";

              document.getElementById("homepage").style.display = "none";
		      document.getElementById("aboutuspage").style.display = "none";
			  document.getElementById("productspage").style.display = "none";
			  document.getElementById("contactuspage").style.display = "block";
			 }
			function validateuseformat()
				{
   				var user = document.getElementById("rusername").value;
				if(isNaN(user))
							 {
  								document.getElementById("usertext").style.color = "red";
 								document.getElementById("usertext").innerHTML = "* Username must be numbers( Preffered UCM ID)!";
							  } 
				if(user == "")
							 {
   								document.getElementById("usertext").style.color = "red";
								document.getElementById("usertext").innerHTML = "* Username shoud not be empty!";
							  } 
							  
							 
				}
				function validatepswdformat()
				{
				   	var pswd = document.getElementById("rpassword").value;
					
					if(pswd.match(/^[0-9a-zA-Z]+$/) && ( (pswd.length == 8) )) 
						{  
						document.getElementById("passwdtext").innerHTML = "* Password Accepted";  
						}
						 else
						{
						document.getElementById("passwdtext").style.color = "red";
						document.getElementById("passwdtext").innerHTML = "* Provide a Valid Password !";
						 }
						 
				if(pswd == "")
							 {
								 document.getElementById("passwdtext").style.color = "red";					 
								document.getElementById("passwdtext").innerHTML = "* Password shoud not be empty!";
							  } 
											
				 
			}
			function validateFname()
			{
				var fnme = document.getElementById("fname").value;
				if(!(isNaN(fnme)))
							 {
 								document.getElementById("fnametext").innerHTML = " * Must Contain Alphabets!";
							  }
							else{
						document.getElementById("fnametext").innerHTML = "";

							}	
				if(fnme == "")
							 {
 								document.getElementById("fnametext").innerHTML = "* First Name shoud not be empty!";
							  } 
			}
			function validateLname()
			{
				var lnme = document.getElementById("lname").value;
				if(!(isNaN(lnme)))
							 {
 								document.getElementById("lnametext").innerHTML = " * Must Contain Alphabets!";
							  }
							else{
						document.getElementById("lnametext").innerHTML = "";

							}	
				if(lnme == "")
							 {
 								document.getElementById("lnametext").innerHTML = "* Last Name shoud not be empty!";
							  } 
			}
			function validateMname()
			{
				var mnme = document.getElementById("mname").value;
				if(!(isNaN(mnme)))
							 {
 								document.getElementById("mnametext").innerHTML = " * Must Contain Alphabets!";
							  }
							else{
						document.getElementById("mnametext").innerHTML = "";

							}
				if(mnme == "")
							 {
 								document.getElementById("mnametext").innerHTML = "* Middle Name shoud not be empty!";
							  } 
			}
			function validateOccupation()
			{
				var occ = document.getElementById("occp").value;
				if(!(isNaN(occ)))
							 {
 								document.getElementById("occptext").innerHTML = " * Must Contain Alphabets!";
							  }
							else{
						document.getElementById("occptext").innerHTML = "";

							}
				if(occ == "")
							 {
 								document.getElementById("occptext").innerHTML = "* Occupation shoud not be empty!";
							  } 
			}
			function validateEmail()
			{
			var em = document.getElementById("email").value;

				if(em == "")
							 {
 								document.getElementById("emailtext").innerHTML = "* Email shoud not be empty!";
							  } 
							  else
							  {
								document.getElementById("emailtext").innerHTML = "";
  
							  }
			}
						function validatePhone1()
						{
									var phn1 = document.getElementById("code1").value;
						if( isNaN(phn1))
						{
		 								document.getElementById("phntext").innerHTML = "* Must Contain Numbers!";
						} else if( phn1=="")
						{
						document.getElementById("phntext").innerHTML = "* Phone number must not be Empty!";
						}
						else if( phn1.length == "3")
						{
						document.getElementById("phntext").innerHTML = "";
						}
						else
						{
						document.getElementById("phntext").innerHTML = "* Please Enter a Valid Phone number !";

						}
						}
			
			function validatePhone2()
						{
									var phn2 = document.getElementById("code2").value;
						if( isNaN(phn2))
						{
		 								document.getElementById("phntext").innerHTML = "* Must Contain Numbers!";
						} else if( phn2=="")
						{
						document.getElementById("phntext").innerHTML = "* Phone number must not be Empty!";
						}
						else if( phn2.length == "3")
						{
						document.getElementById("phntext").innerHTML = "";
						}
						else
						{
						document.getElementById("phntext").innerHTML = "* Please Enter a Valid Phone number !";

						}
						}
			
			function validatePhone3()
						{
									var phn3 = document.getElementById("code3").value;
						if( isNaN(phn3))
						{
		 				document.getElementById("phntext").innerHTML = "* Must Contain Numbers!";
						} else if( phn3=="")
						{
						document.getElementById("phntext").innerHTML = "* Phone number must not be Empty!";
						}
						else if( phn3.length == "4")
						{
						document.getElementById("phntext").innerHTML = "";
						}
						else
						{
						document.getElementById("phntext").innerHTML = "* Please Enter a Valid Phone number !";

						}
						}
								
			function validatecstrad1()
			{
				var cstr1 = document.getElementById("cstrad1").value;
			if(cstr1 == "")
							 {
 								document.getElementById("cstradd1text").innerHTML = "* Field shoud not be empty!";
							  } 
							  else
							  {
   								document.getElementById("cstradd1text").innerHTML = "";
							  }
								  
				
			}
			function validatecstate()
			{
				var cste = document.getElementById("cstate").value;
			if(cste == "")		
				{
 				document.getElementById("cstatetext").innerHTML = "* Field shoud not be empty!";


			} else if(!(isNaN(cste)))
			 {
				document.getElementById("cstatetext").innerHTML = "* Must Contain Alphabets!";

			  } 
			else
				  {
   				document.getElementById("cstatetext").innerHTML = "";
			  }
				
			}	
		
			function validateccount()
			{
				var cctry = document.getElementById("ccountry").value;
			if(cctry == "")		
				{
 				document.getElementById("cctrytext").innerHTML = "* Field shoud not be empty!";


			} else if(!(isNaN(cctry)))
			 {
				document.getElementById("cctrytext").innerHTML = "* Must Contain Alphabets!";

			  } 
			else
				  {
   				document.getElementById("cctrytext").innerHTML = "";
			  }
				
			}	
						 
			function validateczip()
			{
				var czp = document.getElementById("czip").value;
			if(czp == "")		
				{
 				document.getElementById("cziptext").innerHTML = "* Field shoud not be empty!";


			} else if(isNaN(czp))
			 {
				document.getElementById("cziptext").innerHTML = "* Must be a Number!";

			  } 
			else if(czp.length < 4)
				  {
   				document.getElementById("cziptext").innerHTML = "Invalid Zip Code";
			  }
			  else
			  {
				
				document.getElementById("cziptext").innerHTML = "";
  
			  }
				
			}	
			
			function validatepstrad1()
			{
				var pstr1 = document.getElementById("pstrad1").value;
			if(pstr1 == "")
							 {
 								document.getElementById("pstradd1text").innerHTML = "* Field shoud not be empty!";
							  } 
							  else
							  {
   								document.getElementById("pstradd1text").innerHTML = "";
							  }
								  
				
			}
			function validatepstate()
			{
				var pste = document.getElementById("pstate").value;
			if(pste == "")		
				{
 				document.getElementById("pstatetext").innerHTML = "* Field shoud not be empty!";


			} else if(!(isNaN(pste)))
			 {
				document.getElementById("pstatetext").innerHTML = "* Must Contain Alphabets!";

			  } 
			else
				  {
   				document.getElementById("pstatetext").innerHTML = "";
			  }
				
			}	
		
			function validatepcount()
			{
				var pctry = document.getElementById("pcountry").value;
			if(pctry == "")		
				{
 				document.getElementById("pctrytext").innerHTML = "* Field shoud not be empty!";


			} else if(!(isNaN(pctry)))
			 {
				document.getElementById("pctrytext").innerHTML = "* Must Contain Alphabets!";

			  } 
			else
				  {
   				document.getElementById("pctrytext").innerHTML = "";
			  }
				
			}	
						 
			function validatepzip()
			{
				var pzp = document.getElementById("pzip").value;
			if(pzp == "")		
				{
 				document.getElementById("pziptext").innerHTML = "* Field shoud not be empty!";


			} else if(isNaN(czp))
			 {
				document.getElementById("cziptext").innerHTML = "* Must be a Number!";

			  } 
			else if(czp.length < 4)
				  {
   				document.getElementById("cziptext").innerHTML = "Invalid Zip Code";
			  }
			  else
			  {
				
				document.getElementById("cziptext").innerHTML = "";
  
			  }
				
			}	
			
			function validateOnYes()
			{
				var elem = document.getElementById("addrcheck");
				if(elem.checked)
				{
				document.getElementById("pstrad1").value = document.getElementById("cstrad1").value;
				document.getElementById("pstrad1").disabled = "true";
				document.getElementById("pstrad2").value = document.getElementById("cstrad2").value;
				document.getElementById("pstrad2").disabled = "true";
				document.getElementById("pstate").value = document.getElementById("cstate").value;
				document.getElementById("pstate").disabled = "true";
				document.getElementById("pcountry").value = document.getElementById("ccountry").value;
				document.getElementById("pcountry").disabled = "true";
				document.getElementById("pzip").value = document.getElementById("czip").value;
				document.getElementById("pzip").disabled = "true";
				}
				}
			
			function validateOnNo()
			{
				var elem = document.getElementById("addrcheck");
				if(!(elem.checked))
				{

				document.getElementById("pstrad1").value = "";
				document.getElementById("pstrad1").removeAttribute("disabled");

				document.getElementById("pstrad2").value = "";

				document.getElementById("pstrad2").removeAttribute("disabled");

				document.getElementById("pstate").value = "";
				document.getElementById("pstate").removeAttribute("disabled");

				document.getElementById("pcountry").value = "";
				document.getElementById("pcountry").removeAttribute("disabled");

				document.getElementById("pzip").value =  "";
				document.getElementById("pzip").removeAttribute("disabled");

				}
			}			
			
			function validateQues1()
			 {
				 var que1val = document.getElementById("que1").value;
				if(!(isNaN(que1val)))
							 {
 								document.getElementById("que1text").innerHTML = "* Must Contain Alphabets !";
							  } 
				if(que1val == "")
							 {
 								document.getElementById("que1text").innerHTML = "* Field shoud not be empty!";
							  } 

			 }
			 
			 function validateQues2()
			 {
				var que2val = document.getElementById("que2").value;
				if(!(isNaN(que2val)))
							 {
 								document.getElementById("que2text").innerHTML = "* Must Contain Alphabets !";
							  } 
				if(que2val == "")
							 {
 								document.getElementById("que2text").innerHTML = "* Field shoud not be empty!";
							  } 
 
			 }
			 
			 function validateQues3()
			 {
			var que3val = document.getElementById("que3").value;
				if(!(isNaN(que3val)))
							 {
 								document.getElementById("que3text").innerHTML = "* Must Contain Alphabets !";
							  } 
				if(que3val == "")
							 {
 								document.getElementById("que3text").innerHTML = "* Field shoud not be empty!";
							  } 
	 
			 }
</script>

	</head>

	
	<body>
				<div class="container">
				
				<header class="top">
						<img src="images/log.png" alt="Logo" class="logo" />
						<h1 class="titlesize">Kansas City Insurance Corporation</h1>
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
					<a href="Homepage.html" ><img src="images/backward.ico" height="40px" width="50px" style="position: absolute;"></a>
			
			
				<section class="section_left" id="secleft" style="height: 680px; width:1200px; overflow: auto;">
				
<br/>	

		 
				<form action="insert.php" method="post" id="regform" name="regform" >		
				<table id="membregtable"  style="border:2px solid black; width: 1200px" >
				<caption style="font-size: 20px;"> <b>Please provide the details to Register as a Member</b></caption>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> First Name: <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="fname" onblur="validateFname();" maxlength="15" id="fname" style="padding: 8px;">
				<span id="fnametext" style=" font-size: 15px; color: red;"> </span>
				</td>
				</tr>
				
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Middle Name: <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="mname" onblur="validateMname();" maxlength="15" id="mname" style="padding: 8px;">
				<span id="mnametext" style=" font-size: 15px; color: red;"> </span>
				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Last Name: <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="lname" onblur="validateLname();" maxlength="15" id="lname" style="padding: 8px;">
				<span id="lnametext" style=" font-size: 15px; color: red;"> </span>
				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Register User Name: <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type='text' id = "rusername" onblur="validateuseformat();" maxlength="9" name="rusername" style="padding: 8px;" >
				<span id="usertext" style=" font-size: 15px; color: blue;"> * Provide your UCM ID</span>
				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Register Password <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type='password' id = "rpassword" onblur="validatepswdformat();"  maxlength="8" name="rpassword" placeholder = "Must be 8 characters in length" style="padding: 8px;"> 
				<span id="passwdtext" style=" font-size: 15px; color: blue;"> * Must Contain A-Z,a-z,0-9,No Special Char's</span>
				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Gender: <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="radio" name="gender" id="gender" value="Male"  style="padding: 8px;" checked> Male </input>
				<input type="radio" name="gender" id="gender" value="Female" style="padding: 8px;"> Female </input>
				<input type="radio" name="gender" id="gender" value="Other"style="padding: 8px;"> Other </input>
				</td>
				</tr>
				
				
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Occupation: <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="occp" id="occp" onblur="validateOccupation();" style="padding: 8px;">
				<span id="occptext" style=" font-size: 15px; color: red;"> </span>
				</td>
				</tr>
				
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Email: <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="email" name="email" id="email" onblur="validateEmail();" style="padding: 8px;">
				<span id="emailtext" style=" font-size: 15px; color: red;"> </span>
				</td>
				</tr>
				
				
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Phone Number: <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="code" id="code" size="1" Value="+1" style="padding: 8px;">
				<input  type="text" onblur="validatePhone1();" name="code1" id="code1" size="4" maxlength="3" style="padding: 8px;">
				<input type="text" onblur="validatePhone2();" name="code2" id="code2" size="4" maxlength="3" style="padding: 8px;">
				<input type="text" onblur="validatePhone3();" name="code3" id="code3" size="4" maxlength="4" style="padding: 8px;">
				<span id="phntext" style=" font-size: 15px; color: red;"> </span>
				</td>
				</tr>
				<tr colspan="1" >
				<td style="font-size: 20px; text-align: right; color: blue"><b> Current Address </b></td>
				</tr>
				<tr> 
	
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Street Address Line 1 : <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="cstrad1" id="cstrad1" onblur="validatecstrad1();" size="30" maxlength="100" style="padding: 8px;">
				<span id="cstradd1text" style=" font-size: 15px; color: red;"> </span>

				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b>Street Address Line 2 : <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="cstrad2" id="cstrad2"  size="30" maxlength="100" style="padding: 8px;">
				<span id="cstradd2text" style=" font-size: 15px; color: red;"> </span>
				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> State : <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="cstate" id="cstate" size="30" onblur="validatecstate();" maxlength="15" style="padding: 8px;">
				<span id="cstatetext" style=" font-size: 15px; color: red;"> </span>
				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Country : <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="ccountry" id="ccountry" size="30" onblur="validateccount();" maxlength="30" style="padding: 8px;">
				<span id="cctrytext" style=" font-size: 15px; color: red;"> </span>
				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Zip Code <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="czip" id="czip" size="5" onblur="validateczip();"maxlength="5" style="padding: 8px;">
				<span id="cziptext" style=" font-size: 15px; color: red;"> </span>
				</td>
				</tr>
				
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 15px;" ><b> Is Permanent Address same as Current Member <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="radio" name="addrcheck" onclick="validateOnYes();" id="addrcheck" Value="yes" size="5" maxlength="4" style="padding: 8px;"> Yes
				<input type="radio" name="addrcheck" onclick="validateOnNo();" id="addrcheck" Value = "no" size="5" maxlength="4" style="padding: 8px;"> No

				</td>
				</tr>
								
				<tr colspan="1">
				<td style="font-size: 20px; text-align: right;color: blue"><b> Permanent Address </b></td>
				</tr>				
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Street Address Line 1 : <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="pstrad1" id="pstrad1" onblur="validatepstrad1();" size="30" maxlength="50" style="padding: 8px;">
				<span id="pstradd1text" style=" font-size: 15px; color: red;"> </span>

				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b>Street Address Line 2 : <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="pstrad2" id="pstrad2" size="30" onblur="validatepstrad2();" maxlength="50" style="padding: 8px;">
				<span id="pstradd2text" style=" font-size: 15px; color: red;"> </span>

				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> State : <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="pstate" id="pstate" onblur="validatepstate();" size="30" maxlength="30" style="padding: 8px;">
				<span id="pstatetext" style=" font-size: 15px; color: red;"> </span>

				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Country : <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="pcountry" id="pcountry" onblur="validatepcount();" size="30" maxlength="30" style="padding: 8px;">
				<span id="pctrytext" style=" font-size: 15px; color: red;"> </span>
				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Zip Code <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type="text" name="pzip" id="pzip" onblur="validatepzip();" size="5" maxlength="4"style="padding: 8px;">
				<span id="pziptext" style=" font-size: 15px; color: red;"> </span>

				</td>
				</tr>
				<tr colspan="1">
				<td style="font-size: 25px; text-align: right;color: blue"><b> Security Questions </b></td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b>	What is your mother's maiden name ? <b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type='text' id = "que1" onblur= "validateQues1();" name="quesval1" style="padding: 8px;"> 
				<span id= "que1text"style=" font-size: 15px; color: red;"> </span> 
				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> What is your favourite visiting  spot ?<b></label>
				</td>
				<td style="text-align: left; width: 345px;">
			   <input type='text' id = "que2"onblur= "validateQues2();" name="quesval2" style="padding: 8px; "> 
				<span id= "que2text"style=" font-size: 15px; color: red;"> </span> 
				</td>
				</tr>
				<tr> 
				<td style="text-align: right; width: 345px;">
				<label style="font-size: 20px;" ><b> Who is your best childhood friend ?<b></label>
				</td>
				<td style="text-align: left; width: 345px;">
				<input type='text' id = "que3" onblur= "validateQues3();" name="quesval3" style="padding: 8px; "> 
				<span id= "que3text" style=" font-size: 15px; color: red;"> </span> 
				</td>
				</tr>
				
				<tr> 
				<td style="text-align: right; width: 345px;">
				</td>
				<td style="text-align: left; width: 345px; ">
				<input type="submit" name="Register" Value="Register" style="padding: 8px; margin-top: 20px;">
				</td>
				</tr>
							
	<!--
				<tr >
				<td style="font-size: 20px; text-align: right; color: blue"><b> Permanent Address </b></td>
	
					</tr>
					<td>
				<textarea rows="5" cols="30">
				At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
				</textarea>
					</td>
					</tr>
					-->
				
				
				</table>	   
				</form>
				</section>		
				
				<aside class="aside_right">
							<div id="homepage" style="padding-bottom: 2px; display: none;">
								
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
								<a href="membpropinsaply.html" style="font-size:20px; padding-left: 20px; color: black"> Get a Quote & Apply  </a> 
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
