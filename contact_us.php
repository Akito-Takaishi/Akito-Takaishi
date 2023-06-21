!DOCTYPE html>
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
    <div class="register">
      <form class="contact" action="contactforms.php" method="post">
        <ul>
          <li type="none" class="asterisk">
            Your Name:<span style="color:red;">*</span>
          </li>
          <input type="text" name="name" required><br>

          <li type="none" class="asterisk">
            E-mail Address:<span style="color:red;">*</span>
          </li>
          <input type="text" name="email" required><br>

          <li type="none" class="asterisk">
            Contact No./Mobile No.:<span style="color:red;">*</span>
          </li>
          <input type="text" name="contactno" required><br>

          <li type="none" class="asterisk">
            Subject:<span style="color:red;">*</span>
          </li>
          <input type="text" name="subject" required><br>

          <li type="none" class="asterisk" resize="none">
            Comments/Suggestions/Recommendations:(maximum of 500 characters)<span style="color:red;">*</span>
          </li>
          <textarea name="comment" rows="8" cols="80" maxlength="500" style="resize:none;"></textarea><br>

          <p>All items with an asterisk <span style="color:red;">*</span> must be filled up</p><br>

          <input type="submit" name="submit" value="Send Message">
        </ul>
    </div>
  </div>

    <div class="footer">
    <p>©2023 PutoExpress. All Rights Reserved.</p>
    </div>

    </body>
    </html>
