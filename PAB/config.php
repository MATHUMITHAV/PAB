<?php
include("connect.php");
?>
<?php

// Check connection

if(isset($_POST['confirm'])){

  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $from=$_POST['from'];
  $to=$_POST['to'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $address=$_POST['address'];
  $services=$_POST['services'];




  $sql = "INSERT INTO booking  VALUES ('$firstname', '$lastname', '$email', '$phone', '$from', '$to', '$date', '$time', '$address', '$services')";
   $result= mysqli_query($conn,$sql);
  
   if($result){
    echo "<script> alert('Redirect to payment page');
               window.location.href='https://test.instamojo.com/@vmathumitha2002/lb9ea04c9f75e4b46a9413b359a380ad9/';
     </script>";
}else{
    echo "failed";
    }
}



?>