<?php
 require_once('./db.conf.php');  
//  $result=mysqli_query($connString,$query);

 ?>






<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='Style/signup.css' />";

?>
<!-- -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="height: 1300px; width: 100%;">
 
    
<br>
<div id="midsignup">
	  <form  method="post" action = "signup.php">
	  		
              <h1>Sign Up</h1> 
    		<p>Please fill in this form to create an account.</p>

			      <label><b>Name</b></label>  <br>
			        <input type="text" placeholder="Enter First name" name="Fname" required>
			      <br>
			 
			       <label><b>User name</b></label>
			        <input type="text" placeholder="Enter your email " name="Uname" required>
			       
    				  <br>
			        <label><b>Password</b></label>
			        <input type="password" placeholder="Enter Password" name="Pname" required>
			        <br>
			          <br>
    				<label for="psw-repeat"><b>Repeat Password</b></label>
   					 <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
   					 <br>

   					 <label>
      				<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    				</label>

					<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

					<div class="clearfix">
      				<button type="button" class="cancelbtn">Cancel</button>
      				<button type="submit" class="signupbtn" onclick="window.location.href='Login.php'"><span>Sign Up</span></button>
      
    				</div>
    </form>

</div> 
  
</div>











</body>
</html>
