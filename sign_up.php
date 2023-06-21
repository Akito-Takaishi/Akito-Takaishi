<?php
     $reg = false; // Define the variable $reg with an initial value
     $fname = ''; // Initialize the $sname variable
     $lname = ''; // Initialize the $fname variable
     $email = ''; // Initialize the $email variable
     $bday = ''; // Initialize the $bday variable
     $pass = ''; // Initialize the password
     $rpass = ''; // Initialize the repeat password
     $address = ''; // Initialize the address
     $contactno = ''; // Initialize the contact

     if (isset($_POST['reg'])) {
         $conn = mysqli_connect("localhost", "root", "", "putoexpress");
         if ($conn->connect_error) {
             die("Connection Failed: " . $conn->connect_error);
         }
         $fname = $_POST['fname'];
         $lname = $_POST['lname'];
         $email = $_POST['email'];
         $bday = $_POST['bday'];
         $pass = $_POST['pass'];
         $rpass = $_POST['rpass'];
         $address = $_POST['address'];
         $contactno = $_POST['contactno'];

         if(isset($_POST['submit'])) {
             $sql = "INSERT INTO sign_up (fname, lname, email, bday, pass, rpass, address, contactno) VALUES ('$fname', '$lname', '$email', '$bday', '$pass', '$rpass', '$address', '$contactno')";
             $result = mysqli_query($conn, $sql);

             if ($result) {
                 $reg = true;
                 // Redirect to login page
                 echo "<h2>Sign-up Successful. You may <a href='login.php'>log-in</a> here.</h2>";
                 exit; // Stop further script execution
             } else {
                 echo "<b>E-mail is already in use. Please re-type and try another valid e-mail to register.</b><br>";
                 $reg = false;
             }
         } else {
             echo "<b>Passwords do not match.</b><br>";
             $reg = false;
         }
     }
?>
