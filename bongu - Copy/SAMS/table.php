<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>sams</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
 
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<style>
	nav {
  float: left;
  width: 20%;
  height: 13cm; 
  background: #86bc42;
  padding: 2px;
}
nav ul {
  list-style-type: none;
  padding: 15%;
  font-size: medium;  
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  
 
}

a:link, a:visited {
  background-color: #ffffff;
  color: rgb(201, 40, 40);
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: rgb(209, 183, 34);
}

.p {
  color: navy;
  text-indent: 30px;
  text-transform: uppercase;
}

table, th, td {
  border:1px solid black;
}

</style>

</head>
<body>

	<!-- start header -->
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ATTENDANCE</h2>
			</div>
		</div>
	</div>
	</section>

    <section>
		<nav>
		  <ul>
			<li><a href="overall.php"><h4>Overall Attendance</h4></a></li>
			<li><a href="coursewise.php"><h4>Course wise Attendance</h4></a></li>
			
		  </ul>
		</nav>
		
		
		  <h1>Overall Attendance</h1>


          <div>

            <p class="p">Choose a Semster:</p>
            <select name="select" id="select" style="width:200px;" >
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

          </div>


          <div>
            <table>
                <tr>
                  <th>Course Name</th>
                  <th>No.of Classes</th>
                  <th>Classes attended</th>
                </tr>
                <tr>
                  <td> Java </td>
                  <td>16</td>
                  <td>15</td>
                </tr>
                <tr>
                  <td>Data Structers</td>
                  <td>13</td>
                  <td>13</td>
                </tr>
                <tr>
                  <td>Cloud Computing</td>
                  <td>8</td>
                  <td>8</td>
                </tr>
                <tr>
                  <td>Software Engineering</td>
                  <td>19</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Computer Security</td>
                  <td>15</td>
                  <td>9</td>
                </tr>
                <tr>
                  <td>IOT</td>
                  <td>10</td>
                  <td>10</td>
                </tr>
              </table>
          </div>
          


		
	  </section>
	
	
	
</body>
</html>