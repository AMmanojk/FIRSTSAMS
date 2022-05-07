<!DOCTYPE html>
<html>
<head>
	<title>ATTENDANCE MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	
</head>
<body>
     <h1>STUDENT ATTENDANCE MANAGEMENT SYSTEM</h1>
     <form action="login.php" method="post">
		 
		 
		<div>
  <select name="oo" onchange="">
    <option value="" selected="selected">Select</option>
    <option value="1">ADMIN</option>
    <option value="2">STAFF</option>
    <option value="3">STUDENT</option>
   </select>
   
</div><br>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User name (or) ID:</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password:</label>
     	<input type="password" name="password" placeholder="Password">

		<h2><a href="sign_in.php">Sign in with your phone number!</a></h2>

      
        <button type="submit">Login</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<a href = "forgPass.php">Forgot password</a>
      

     	
     </form>
</body>
</html>