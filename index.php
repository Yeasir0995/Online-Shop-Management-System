
<!DOCTYPE html>
<html>
<head>
	<title>Best Online Shoping In bangladesh</title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>

<section>
	<!-- header -->
	<header>
		<div class="container">
			<nav>
				<ul>
					<li><a href="http://localhost/project/ffffff/About/about.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About us</a></li>
					
					<li><a href="http://localhost/project//ffffff/login/login.php">Log In</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- header -->


		<div class="container">
			<div class="flex">
				<div class="content">
				 	<h1>RASS  <br> Online products for you</h1>
				 	<p>You Click on the products and we will deliver </p>
				 	<ul>
				 		<li>Email, rass@gmail.com</li>
				 		<li>Conatct us:+2284521</li>
				 		<li>We deliver outside of Dhaka</li>
				 	</ul>
				 	<a href="#">learn more</a>

				 	 

				 	

				</div>
				<div class="form">
					
					<div class="form-content">
						<h2>register now</h2>
						<p>Click Below to register and get great offer from us</p>
						<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
						<input type="text" id="fname" placeholder="Full Name" name="fname">
						<input type="text" id="pnumber" placeholder="Phone Number" name="pnumber">
						<input type="text"  id="email" placeholder="Email Address" name="email">
						<input type="password" id="password" placeholder="Type a password" name="password">
						<button type="submit"  name="submit" onclick="return validation()">Submit</button> 
						
						
						<?php
						$con=mysqli_connect("localhost","root","","user");
						if (!$con)
						{
							die("Database not connected".mysqli_connect_error());
						}
						
						if(isset($_POST['submit']))
						{
							$fname=$_POST['fname'];
							//$lname=$_POST['lname'];
							$pass=$_POST['password'];
							$phone=$_POST['pnumber'];
							$email=$_POST['email'];
						
							//$dob=$_POST['dob'];
							//echo "$fname";
							if($fname==''||$pass==''||$phone==''){
								if ($fname=='') {
								echo "First name cannot be empty!";
							}
							
							else if ($pass=='') {
								echo "password cannot be empty!";
							}
							else if ($phone=='') {
								echo "phone cannot be empty!";
							}
							
							}
							
							else{
								if (mysqli_query($con, "INSERT INTO signin(fname,pnumber,email,password) VALUES ('$fname','$phone','$email','$pass')")) {
						    echo "✔ New record created successfully!<br/>";
							} 
							else {
							    echo "Error: " . "<br>" . mysqli_error($con);
							}
							}
							
						}
						?>
 
						</form>
					</div>
					 
				</div>
			</div>
		</div>
	</section>

 

</body>
</html>

<script>
	function validation()
	{
		var name=document.getElementById("fname").value;
		var email=document.getElementById("email").value;
		var password=document.getElementById("password").value;
		var phone=document.getElementById("pnumber").value;
		
		var count=0;
		msg="Have you filled your ";
		if(name=="")
		{
			msg+="Name?";
			count++;			
		}
		else if(email=="")
		{
			msg+="Email?";
			count++;
		}
		else if(password=="")
		{
			msg+="Password?";
			count++;
		}
		
		else if(phone=="")
		{
			msg+="Phone?";
			count++;
		}
		
		
		if(count>0)
		{
		
			alert(msg);
		}
		// if(count>0)
		// {
		// 	message.style.display = "block";
		// 	message.innerHTML="block";
		// 	// alert("hello");
		// }
	}
</script>