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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
 
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

.containera {
    width:100% ;
    background-color: rgb(230, 223, 215);
    
    
    height: 14.7cm;
    align: right;
    text-align: center;
    
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
						  
              <li><a href="overall.php">ATTENDANCE REPORT</a></li>
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FEEDBACK</h2>
			</div>
		</div>
	</div>
	</section>


    <section>
		<nav>
		  <ul>
        <li><a href="fed.php"><h4>GIVE FEEDBACK</h4></a></li>
        <li><a href="history.php"><h4> &nbsp;&nbsp;&nbsp;HISTORY&nbsp;&nbsp;&nbsp;</h4></a></li>
			
		  </ul>
		</nav>
        <div class='containera'>

        <form action="feda.php" method="POST">
</br></br></br>




            <b>Select Mentor: </b>
            <select name="mentor" id="select" style="width:200px;"   class="selectpicker" data-style="btn-primary" multiple data-max-options="2" >
                        <option value="select">Select</option>
                        <option value="Dr. Priyanka Kumar">Dr. Priyanka Kumar</option>
                        <option value="Dr. Senthil Kumar T">Dr. Senthil Kumar T</option>
                        <option value="Arun Kumar C">Arun Kumar C</option>
                        <option value="Bagaymala">Bagaymala</option>
                        
                                       
                      </select>
                      &nbsp;&nbsp;&nbsp;

                      <b>Message: </b>
            <select name="message" id="select" style="width:200px;" class="selectpicker" data-style="btn-primary" multiple data-max-options="2" >
                        <option value="select">Select</option>
                        <option value="Plz Update Attendance">Please Update Attendance!</option>
                        <option value="I Attended Class but not Given<">I Attended Class but not Given</option>
                        
                        
                                       
                      </select>


</br></br>

                      <b>Reason: </b>
</br>
                      <textarea name='reason'>

                      </textarea>
</br>



                      <button type="submita" name="submit">SEND</button>



        </div>      
        
        



        </form>
		





		</section>

        
	
</body>
</html>