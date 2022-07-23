
<html>
  <head
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup form</title>
    <link rel="stylesheet" href="css/style1.css">
    

  </head>
  <body>
    <div class="container">
	<div class="header">
		<h2>Signup</h2>
	</div>
	<form id="form" class="form" action="signup2.php" method="post" onsubmit="return(checkInputs());">
		<div class="form-control">
			<label for="username">Username</label>
			<input type="text" placeholder="Your name here" id="username" name="name"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Email</label>
			<input type="email" placeholder="Your email here" id="email" name="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
    <div class="form-control">
			<label for="username">Contact</label>
			<input type="text" placeholder="Your contact here" id="contact" name="contact"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
    <div class="form-control">
			<label for="username">Address</label>
			<input type="text" placeholder="Your address here" id="address" name="address"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
			<input type="password" placeholder="Password" id="password" name="password" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password check</label>
			<input type="password" placeholder="Password two" id="password2" name="cpassword" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<button>Submit</button><br>
    <center><div class="signup-link">
               Already a member? <a href="login.html">Signin now</a>
            </div></center>
    </div>
            
	</form>
</div>



    <script src="script1.js"></script>



  </body>
  
</html>
