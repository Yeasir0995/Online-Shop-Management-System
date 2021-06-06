
<!DOCTYPE html>
<html>
<head>
<title>Login Form </title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <p>Username</p>
            <input type="text" name="name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="#">Don't have an account?</a>
			
			<?php
					if(isset($_POST['login']))
					{
					$con=mysqli_connect("localhost","root","","user");
					if(!$con)
					{
						die("Connection Error: ".mysqli_connect_error()."<br/>");
					}

					$name=$_POST['name'];
					$password=$_POST['pass'];
					if($name==''||$password==''){
						if($name==''){
							echo "Name cannot be empty !"; }
						else{
							echo "Password cannot be empty !";
						}
						}
					
					else
					{
						$sql="SELECT * FROM signin WHERE fname='$name' AND password='$password'";
					$result=mysqli_query($con,$sql);	
					if(mysqli_num_rows($result)>0)
					{
						$row=mysqli_fetch_array($result);
						$_SESSION['fname']=$row['fname'];
						header("Location:http://localhost/project/ffffff/welcome.html");
						echo "succesfull";
					}
					else
					{
						echo "Login failed! Your email or password is incorrect.<br/>";
					}
					}
					

					
				mysqli_close($con);		
				}
				?>
        </form>
        
    </div>

</body>
</head>
</html>

