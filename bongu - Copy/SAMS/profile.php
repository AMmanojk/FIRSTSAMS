<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>sams</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<style>
.inset {border-style: inset;
	border: 5px solid  #258e9c;
  border-radius: 8px;
  padding: 5px;


}
</style>


</head>
<body>

	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" ><img src="icon.jfif" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                    <li><a href="dashboard.php">DASHBOARD</a></li> 
						  
                          <li><a href="attendance.php">ATTENDANCE REPORT</a></li>
                          <li ><a href="apply.php">APPLY LEAVE</a></li>
                          <li><a href="fed.php">FEEDBACK</a></li>
                          <li><a href="profile.php">PROFILE</a></li>
                          <li><a href="logout.php">LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<section id="inner-headline">
	<div class="container">
	
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					PROFILE</h2>
			</div>
		</div>
	</div>
	</section>


	<section class= "inset" >

		<form action="/action_page.php"   method="get">

			<H1>
				STUDENT DETAILS
			</H1>
			<label for="fname">First name:</label>
			Karthik<br><br>


			<label for="lname">Last name:</label>
			Tummala<br><br>

			<label for="email">EMAIL:</label>
			Karthik@gmail.com<br><br>

			<label for="phone">Contact No:</label>
			+91 9852314458 <br><br>

			<label for="lname">ADDRESS:</label>
			Amrita University,Etimadai, Coimbatoer,Tamilnadu <br><br>




			
			
		  </form>



		

	


	</section>








	<section class="inset">

		<h1>
		   Change Password
		</h1>
		<form action=""   method="POST">

			<label for="fname">Current Password:</label>
			<input type="password" id="curpass" name="Current password">  <br><br>


			<label for="lname">New Password</label>
			<input type="password" id="newpass" name="New Password"><br><br>

			<label for="email">Confirm Password</label>
			<input type="password" id="confpass" name="confirm password"><br><br>
            


            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit" style='border:solid; border: radius 5px;' href='profile.php'> RESET</button>




		
			
		  </form>



		

	</section>


	
	
</body>
</html>