<?php
// var_dump($_POST);
$user = new stdClass;
$user->type = 'user';
$user->name = $_POST["name"];
$user->age = $_POST["age"];
$user->gender = $_POST["gender"];
$user->location = $_POST["location"];
$user->email = $_POST["email"];
$user->message = $_POST["message"];
 //echo json_encode($user);

$curl = curl_init();
// curl options
$options = array(
CURLOPT_URL => 'https://apikey-v2-332ye4n70ywmz8heubu8xb27696zqxlr0ak1s6by4slq:d888c1c4c96110339ee0795bb01d976c@86780f05-2b67-4abf-8c43-42e452964d06-bluemix.cloudantnosqldb.appdomain.cloud/mydb',
CURLOPT_POST => 1,
CURLOPT_POSTFIELDS => json_encode($user),
CURLOPT_HTTPHEADER => array ("Content-Type: application/json"),
CURLOPT_RETURNTRANSFER => true /* if not, curl_exec() throws output*/
);
curl_setopt_array($curl, $options);
curl_exec($curl);
curl_close($curl);
//it will display with option to go index.html or getdocs.php


$var ='<!doctype html>
<html lang="en">
  <head>
    <title>Nutrition Tracker</title>
    <meta charset="utf-8">
	<meta http-equiv = "refresh" content = "10; url = index.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="overlayer"></div>
    
    <div class="site-wrap"  id="home-section">
  
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
        
      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
  
        <div class="container">
          <div class="row align-items-center position-relative">
            
              
              <div class="site-logo">
                <a href="index.html" class="text-black"><span class="text-primary">Nutrition Tracker</a>
              </div>
              
              <div class="col-12">
                <nav class="site-navigation text-right ml-auto " role="navigation">
  
                  <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="index.html#home-section" class="nav-link">Home</a></li>
                  <li class="has-children">
                    <a href="index.html#services-section" class="nav-link">Services</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="calorie1.html" class="nav-link">Track Your Daily Calorie</a></li>
                      <li><a href="bmi1.html" class="nav-link">Track Your BMI</a></li>
                      <li><a href="#" class="nav-link">More Services Comming Soon</a></li>
                    </ul>
                  </li>
                
  
                  <li class="has-children">
                    <a href="#about-section" class="nav-link">About Us</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="index.html#about-section" class="nav-link">Importance of Nutrition</a></li>
                      <li><a href="index.html#team-section" class="nav-link">Team</a></li>
                      <li><a href="index.html#contact-section" class="nav-link">Contact Us</a></li>
                    </ul>
                  </li>
                  <li class="has-children">
                    <a href="index.html#blog-section" class="nav-link">Nutrition Blogs</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="Blog1.html" class="nav-link">Nutrition By Age</a></li>
                      <li><a href="Blog2.html" class="nav-link">Healthy Living</a></li>
                      <li><a href="Blog3.html" class="nav-link">Diet & Health Condition</a></li>
                      <li><a href="Blog4.html" class="nav-link">Dietary Supplements</a></li>
                      <li><a href="Blog5.html" class="nav-link">Food Safety</a></li>
                      <li><a href="Blog6.html" class="nav-link">Other Diets</a></li>
                    </ul>
                  </li>
                  
                  <li><a href="index.html#contact-section" class="nav-link">Contact Us</a></li>
                </ul>
                </nav>
            
              </div>
  
            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
  
          </div>
        </div>
        
      </header>


    
    
    <section class="site-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12 blog-content"><br>
            <h2><span itemprop="alternativeHeadline">Thank you for filling out your information!</span></h2><br>
			<h3><span itemprop="alternativeHeadline">We appreciate you contacting us. We will get back in touch with you soon! Have a great day!</span></h3>
			<br>
			<div class="text-center">
			<h5>You will be redirected automatically to the home page in just 15 second.</h5>
          </div>
        </div>
      </div>
    </section>
	<br><br><br><br><br><br><br><br><br>

	<footer class="site-footer">
      <div class="container">
          <div class="col-md-12">
            <div class="text-center">
            <p class="copyright"><small>
             <script>document.write(new Date().getFullYear());</script> | Design By Team Thunder Coders From NSTI Bhubaneswar</i>
            </small></p>
            </div>
          </div>    
    </footer>



  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  
  <script src="js/main.js"></script>

  </body>
</html>
';
echo $var;
?>
