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


.containera {
    width:100% ;
    background-color: rgb(230, 223, 215);
    
    
    height: 14.7cm;
    align: right;
    text-align: center;
    
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


.select {
     display: grid;
     grid-template-areas:"select";
     align-items: center;
     position: relative; 
  
     min-width: 15ch;
     max-width: 30ch;
  
     border: 1px solid var(#777);
     border-radius: 0.25em;
     padding: 0.25em 0.5em;
  
    font-size: 1.25rem;
    cursor: pointer;
    line-height: 1.1; 
   }

   .select:focus
   {
    border-color:     #800080;
    border: 1cm;
    box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
    color: #222; 
    outline: none;
   }   
   .p{
       color: black;
       font-size: medium;
       font-family: Georgia, 'Times New Roman', Times, serif;
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APPLY LEAVE</h2>
			</div>
		</div>
	</div>
	</section>


    <section>
		<nav>
		  <ul>
        <li><a href="apply.php"><h4>Apply leave</h4></a></li>
        <li><a href="view.php"><h4>View status</h4></a></li>
			
		  </ul>
		</nav>

        
		
		</section>
	
        <section class=" containera">
        <?php 
            if(isset($_SESSION['status']))
            {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                 unset($_SESSION['status']);
            }
        ?>








            <form action="select.php" method="POST">


                <div class="form-group">
                </br></br></br></br>
                    <b class="p" >Choose a Semster:</b>

                    <b>
                    <select class="selectpicker" data-style="btn-primary" multiple data-max-options="2" name="sem" id="select" style="width:200px;" >
                        <option value="select">Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                                       
                      </select>
                     </b>
                    </br> </br>
               


                <div>                
                        <b class="p">Choose a Course:</b>
                        <select class="selectpicker" data-style="btn-primary" multiple data-max-options="2"  name="course" id="select" style="width:200px;" >
                            <option value="select">Select</option>
                            <option value=" Course A">course A</option>
                            <option value="course2">course b</option>
                            <option value="course3">course C</option>
                            <option value="course4">course D</option>
                            <option value="course5">course E</option>
                            <option value="course6">course F</option>
                            
            
                            
                          </select>
            
                </div> 
                      
                   


                    </br> 
                <div class="form-group1">

                    
                    <b class="p">Choose a Date:</b> &nbsp;&nbsp;
                           
                    <input type="date" id="date" name="date" min="2020-01-01" max="2050-12-31"  style="width:190px;" >                    

                </div>
                       </br>


                <div>
                    <b class="p">
                        Purpose of Leave:
                    </b>
                    <textarea  algin=" center" name="purpose"></textarea>
                </div>

            </br>
                
                


                <div class="form-group1">

                    <button type="submit" name="submit" style='border:solid; border: radius 5px;'>APPLY LEAVE</button>

                </div>
            </form>

            
           
                

                    
        
                  
            
        </section>



</body>
</html>