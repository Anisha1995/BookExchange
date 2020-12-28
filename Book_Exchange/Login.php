<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='Style/Login.css' />";



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
	  <form  method="post">
	  		
              <h1>Login</h1> 
    	
			       <label><b>User name</b></label>
			        <input type="text" placeholder="Enter your email " name="Uname" required>
			       
    				  <br>
			        <label><b>Password</b></label>
			        <input type="password" placeholder="Enter Password" name="Pname" required>
			        <br>
			       

					<div class="clearfix">
      				
      				<button type="submit" class="signupbtn" onclick="window.location.href='Login.html'"><span>Login</span></button>
      
    				</div>
    </form>

</div> 
  
</div>


</body>
</html>
