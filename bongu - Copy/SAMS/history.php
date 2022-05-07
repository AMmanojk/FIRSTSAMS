<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>sams</title><meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<!-- Vendor Styles -->
<link href="css/magnific-popup.css" rel="stylesheet"> 
<!-- Block Styles -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/gallery-1.css" rel="stylesheet">
 
<style>
	nav {
  float: left;
  width: 20%;
  height: 14.7cm; 
  background: #258e9c;
  padding: 2px;
}
nav ul {
  list-style-type: none;
  padding: 20%;
  font-size: medium;  
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  
 
}

a:link, a:visited {
  background-color: #ffffff;
  color: rgb(201, 40, 40);
  padding: 15%;

  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: rgb(209, 183, 34);
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
              <li><a href="feedback.php">FEEDBACK</a></li>
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FEEDBACK</h2>
			</div>
		</div>
	</div>
	</section>


    <section>
		<nav>
		  <ul>
        <li><a href="fed.php"><h4>&nbsp;GIVE FEEDBACK</h4></a></li>
        <li><a href="history.php"><h4> &nbsp;&nbsp;&nbsp;HISTORY&nbsp;&nbsp;&nbsp;</h4></a></li>
			
		  </ul>
		</nav>
		
		</section>
	
</body>
</html>