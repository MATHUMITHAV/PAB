<?php      
    include('connect.php'); 

    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from signup where email= '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  ?>
            <script>
            alert('Successfully Log In');
            document.location='index.html'
          </script> <?php
        }  
        else{  ?>
              <script>
      alert('Enter Valid credential');
      document.location='login.html'
    </script> <?php
        }     
?>