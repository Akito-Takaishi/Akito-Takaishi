<!DOCTYPE html>
<html>
<title>Register</title>
<head>
	<script src="fjavas.js"></script>
	<link rel="stylesheet" href="fregister.css">
</head>
<body>
	<div class="header">
    		<img src="https://scontent.fmnl5-2.fna.fbcdn.net/v/t1.15752-9/348361562_1417935165637202_8210336074812208866_n.png?_nc_cat=103&cb=99be929b-3346023f&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFEPcUL0ouAQCg2Jpie92-dixnAHz_n8tqLGcAfP-fy2sDOugpNboAyNw07nHwDrt_BHUEF8l4oNfE1zPxxuUkU&_nc_ohc=0iyxygMzVsIAX8vyTuP&_nc_oc=AQknwe1jfoRRP3PGmp4hH2N-zVD1udd3x63wgwWEKGPKcP7iT0D3uqJpB3MvdS0nMxA&_nc_ht=scontent.fmnl5-2.fna&oh=03_AdRRyO_bWXWsEdcRiv-brBdpdS5_cxRQgcpTCBfumMF2eg&oe=64B1D5A1" width=250px height="100px">
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

		<h3 style=text-align:center;>Account Registration Form</h3>

		<div class="register">
  			<form action="/action_page.php">
  				<ul type="none">
    				<li>Full Name</li>
    				<li><input type="text" id="fname" name="firstname" placeholder="Your name.." required ></li>
        			<br>

        			<li>Email</li>
        			<li><input type="text" id="lname" name="lastname" placeholder="abc@email.com" required></li>
        			<br>

        			<li></li>
        			<li><input type="text" id="lname" name="lastname" placeholder="Address" required></li>
        			<br>

        			<li>Contact No.</li>
        			<li><input type="text" id="lname" name="lastname" placeholder="Mobile No." required></li>
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
