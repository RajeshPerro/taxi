<?php
session_start();
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
if(isset($_POST['login']))
{
    $Email=$_POST['email'];
    $Pass=md5($_POST['password']);
    $sql="SELECT * FROM user WHERE email='$Email' AND password='$Pass'";
    $data = $dbcon->query($sql);
    $row = $data->fetch(PDO::FETCH_ASSOC);

    trim($dbuser = $row['email']);
    trim($dbpass = $row['password']);
    if ($dbpass != "" && $dbuser != "")
    {
        session_start();
        $_SESSION['user'] = $dbuser;
       // echo("<script>location.href='user_data.php'</script>");
        $string = 'Hi, you are now login in our system.';
        echo "<script>alert(\"$string\")</script>";
        echo("<script>location.href='index.php'</script>");
    }
    else {
        $string = ' Sorry! Try again.\n Username or Password is Wrong.';
        echo "<script>alert(\"$string\")</script>";
        echo("<script>location.href='login.php'</script>");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cab.com</title>
	<link rel="icon" href="images/logo.png" type="image/x-icon">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  
  <body>
    <header id="header-area" >
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <span>
                        <i class="fa fa-mobile"></i>
                        +8801700000000
                    </span>
                    &nbsp;&nbsp;&nbsp;
                   <span class="hidden-xs">
                       <i class="fa fa-envelope"></i>
                       taxiCab@gmail.com
                   </span>
                </div>
            </div>
        </div>

		<div id="main-menu-area">
			<div class="container">
				<div class="row-hidden-xs">
					<div class="col-sm-12 text-center ">
				</div>
			</div>
            <nav class="navbar  ">
				<div class="container">
					<div class="navbar-header text-center">
						<button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#myNav" >
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#" class="navbar-brand visible-xs"><img src="images/bullsy-logo.png" alt="Logo" width="120"></a>
					</div>
					<div class="collapse navbar-collapse" id="myNav">
						<ul class=" navbar-nav list-inline text-center">
                                <li class="dropdown"><a href="index.php">HOME </a><a href="" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Updated News</a></li>
									<li><a href="#">Special Offers !</a></li>
									
								</ul>
								<b>/</b></li>
                                <li><a href="registration.php">Registration</a></li>
                                
								<ul class="dropdown-menu">
									<li><a href="#">Blog with sidebar</a></li>
								</ul>
								<b>/</b></li>
							<li><a href="login.php">login</a></li>
								<b>/</b></li>
							<li class="dropdown"><a href="portfolio.html">PORTFOLIO </a><a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Portfolio 2 Columns</a></li>
									<li><a href="#">Portfolio 3 Columns</a></li>
									<li><a href="#">Portfolio 4 Columns</a></li>
								</ul>
								<b>/</b></li>
							<li><a href="our-team.html">OUR TEAM</a><b>/</b></li>
							<li><a href="contact.php">CONTACT</a></li>
						</ul>
					</div>
				</div>
            </nav>
        </div>
    </header>
    
    

        
    <div id="portfolio-area">
        <div class="container">
        	
         <h1>Please LogIn</h1><br>
                   
                    <form action="" name="myForm" method="post" onsubmit="return(validate());">
						  <div class="form-group">
						    <label for="email">Email address</label>
						    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label for="password">Password</label>
						    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Check me out
						    </label>
						  </div>
						  <input name="login" type="submit" class="btn btn-default"/>
                    </form>
            
        </div>
    </div>
    
    
        <div id="info-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>We provide a hassle free taxi cab service all over the Dhaka</h1>
                </div>
            </div>
        </div>
    </div>
    
    <footer id="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="social-icon">
                        <a href="https://www.facebook.com/taxicab/"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.youtube.com/channel/taxicab"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <p>Copyright @ 2016 - taxiCab -  <span><a href="index.html"> taxiCab</a></span> | All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>