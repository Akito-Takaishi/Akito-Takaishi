<!DOCTYPE html>
<html>
<title>Register</title>
<head>
	<script src="fjavas.js"></script>
	<link rel="stylesheet" href="fregister.css">
</head>
<body>
	<div class="header">
    		<img src="putologo.png" width="250px" height="250px">
        		<h3>Delivering NutriPuto in a Fast Way!</h3>
    	<div>
				<div class="nav_bar">
						<a href="findex.php" class="nav_links">Home</a>
				        	<div class="dropdown">
				  			<button onclick="myFunction()" class="dropbtn">Menu
				<div class="triangle-down"></div></button>
				  				<div id="MenuDropdown" class="dropdown-content">
				    				<a href="productflv_gallery.php">Puto Flavors</a>
				    				<a href="#">Beverages</a>
				  				</div>
							</div>
				    <a href="contact_us.php" class="nav_links">Contact Us</a>
				    <a href="fabout.php" class="nav_links">About Us</a>
				    <a href="fregister.php" id="reg" class="nav_links">Register</a>
					</div>

	<div class="body">

		<h3 style=text-align:center;>Account Registration Form</h3>

		<div class="register">
  			<form action="sign_up.php">
  				<ul type="none">
    				<li>First Name</li>
    				<li><input type="text" id="fname" name="firstname" placeholder="Your name.." required ></li>
        			<br>

    				<li>Last Name</li>
    				<li><input type="text" id="lname" name="lastname" placeholder="Your last name.." required></li>
        			<br>

        			<li>Email</li>
        			<li><input type="text" id="lname" name="lastname" placeholder="abc@email.com" required></li>
        			<br>

        			<li>Password</li>
        			<li><input type="password" id="lname" name="lastname" placeholder="Password" required></li>
        			<br>

        			<li>Repeat Password</li>
        			<li><input type="password" id="lname" name="lastname" placeholder="Enter your password again" required></li>
        			<br>

        			<li>Address</li>
        			<li><input type="text" id="lname" name="lastname" placeholder="Address" required></li>
        			<br>

        			<li>Contact No.</li>
        			<li><input type="text" id="lname" name="lastname" placeholder="Mobile No." required maxlength="12"></li>
       				<br>

    				<input type="submit" value="Submit">
    			</ul>
  			</form>

  		<p> Already have an account? Click <a href="login.php" style=text-decoration:none;color:green;font-weight:bold;>Log in</a> to log in to your account.</p>

    </div>

    <div class="footer">
	<p>©2023 PutoExpress. All Rights Reserved.</p>
    </div>

</body>
</html>
