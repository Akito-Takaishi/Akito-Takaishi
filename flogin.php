<!DOCTYPE html>
<html>
<title></title>
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
				    				<a href="fmenu_putoflv.php">Puto Flavors</a>
				    				<a href="#">Beverages</a>
				  				</div>
							</div>
				    <a href="fcontact_us" class="nav_links">Contact Us</a>
				    <a href="fabout.php" class="nav_links">About Us</a>
				    <a href="fregister.php" id="reg" class="nav_links">Register</a>
					</div>

	<div class="body">

		<h1 style=text-align:center;color:#53901b;>Log In</h1>

		<div class="register">
  			<form action="/action_page.php">
  				<ul type="none">
            <li>Email</li>
            <li><input type="text" id="lname" name="lastname" placeholder="abc@email.com" required></li>
            <br>

            <li>Password</li>
            <li><input type="password" id="lname" name="lastname" placeholder="Password" required></li>

              	<input type="submit" value="Submit">
              </ul>
    </div>

                <div class="footer">
              <p>©2023 PutoExpress. All Rights Reserved.</p>
                </div>

  </body>
  </html>
