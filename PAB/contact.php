<?php
include("connect.php");
?>
<?php
  $name1=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];



  $sql = "INSERT INTO feedback VALUES ('$name1', '$email', '$message')";
   mysqli_query($conn,$sql);
   echo "<script> alert('successful'); </script>";
   

   header("Location: http://localhost/PAB/index.html");
   exit();


?>