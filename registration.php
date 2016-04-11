<?php
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

if(isset($_POST['save']))
{

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $occupation=$_POST['occupation'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $status=$_POST['status'];

    if(!empty(trim($_POST['email'])) || !empty(trim($_POST['password'])))
    {

        $sql="INSERT INTO user(email,password, fname, lname, occupation, status) VALUES ('$email','$password','$fname','$lname','$occupation','$status')";
        $preparestatement=$dbcon->prepare($sql);
        $preparestatement->execute();
        echo("<script>alert('Successfully saved..!!')</script>");
        echo("<script>location.href='index.php'</script>");

    }
    else
    {

        echo("<script>alert('Sorry.! You put some field empty!')</script>");
        echo("<script>location.href='index.php'</script>");
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
                        +88017000000
                    </span>
                    &nbsp;&nbsp;&nbsp;
                   <span class="hidden-xs">
                       <i class="fa fa-envelope"></i>
                       taxicab@gmail.com
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
                                <li><a href="index.php">HOME</a></li>
                                <b>/</b></li>
                                <li><a href="contact.html">FEATURED</a></li>
                                <b>/</b></li>
                                <li><a href="our talk.html">CONTACT</a></li>
                                <b>/</b></li>
								
                                <li><a href="registration.php">Registration</a></li>
                                <b>/</b></li>
                                <li><a href="login.html">Log In</a></li>
								
						</ul>
					</div>
				</div>
            </nav>
        </div>
    </header>
    
    

        
    <div id="portfolio-area">
        <div class="container">
        	
         <h1>Registration form</h1><br>
                   
                    <form action="" name="myForm" method="post" onsubmit="return(validate());">
						  <div class="form-group">
						    <label for="email">Email address</label>
						    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label for="password">Password</label>
						    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
						  </div>
						  <div class="form-group">
						    <label for="First Name">First Name</label>
						    <input name="fname" type="Text" class="form-control" id="First Name" placeholder="First Name">
						  </div>
						  <div class="form-group">
						    <label for="Last Name">Last Name</label>
						    <input name="lname" type="Text" class="form-control" id="Last Name" placeholder="Last Name">
						  </div>
						  <div class="form-group">
						    <label for="Destination">Occupation</label>
						    <input name="occupation" type="Text" class="form-control" id="Occupation" placeholder="Occupation">
						  </div>

						  <div class="checkbox">
						    <label>
						      <input name="status" type="checkbox" value="1"> Check me out</label>
						  </div>
						  <input name="save" type="submit" class="btn btn-default" value="Submit"/>
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
