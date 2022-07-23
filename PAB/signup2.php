<?php
include("connect.php");
?>
<?php
  $name1=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];



  $sql = "INSERT INTO signup VALUES ('$name1', '$contact', '$email', '$address', '$password', '$cpassword')";
   mysqli_query($conn,$sql);
   echo "<script> alert('successful'); </script>";
   

   header("Location: login.html");
   exit();


?>