<?php
$name = $_POST['name'];
$email = $_POST['email'];
$contactno = $_POST['contactno'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];

$conn = new mysqli("localhost", "root", "", "putoexpress");
if ($conn->connect_error){
  die("Connection Failed; " . $conn->connect_error);
}

$sql = "INSERT INTO contact_us (name, email, contactno, subject, comment) VALUES ('$name', '$email', '$contactno', '$subject', '$comment')";
if ($conn->query($sql)){
  // Success Message
  echo '<script>alert("New record is inserted successfully");</script>';
}
else {
   //Error Message
   echo '<script>alert("Error; ' . $sql . '\\n' . $conn->error . '");</script>';
 }

$conn->close();
?>
