<?php
session_start();
if(isset($_SESSION['user']))
{

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
							<li><a href="logout.php">logout</a></li>
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
            <div class="row">
        	 <div class="col-md-8">
           <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
	<h2>Cab.com</h2>
		<p>Location:Dhanmondi 32,Dhaka</p><br>
        <p>Phone no:+8801710000000</p><br>

		<label for="name">Your name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="email">Your email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Send email" />
</form>		
            </div>
               <div class="map">
                <div class="col-md-4">
                  
                <h1>Our Location </h1>

                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8807086524116!2d90.37566081445586!3d23.751632994647387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ad9a69f36f%3A0xffd63d9e3af04553!2sDhanmondi+32+Bus+Stop!5e0!3m2!1sen!2sbd!4v1460391078153" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
              </div>  

          </div>  
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
                    <p>Copyright @ 2016 - taxiCab -  <span><a href="index.php"> taxiCab</a></span> | All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
}

else {
    $string = ' Sorry! You are not Login. Please Login to See the information.';
    echo "<script>alert(\"$string\")</script>";
    echo("<script>location.href='login.php'</script>");
}
?>