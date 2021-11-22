<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dentista - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .notification {
          color: #46b7de;
          text-decoration: none;
          padding: 10px 10px;
          position: relative;
          border-radius: 1px;
          right: 12%;
        }

        .notification:hover {
          background: transparent;
        }

        .notification .badge {
          position: absolute;
          top: 5px;
          right: 3px;
          padding: 0px 5px;
          border-radius: 100%;
          background-color: red;
          color: white;
          font-size:20px;
          
        }
      </style>
    
    
  </head>
  <body>
    <div class="py-md-5 py-4 border-bottom">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center">
          <?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id_pat=$_GET['id_pat'];
$req3="select* from patient where id_pat='$id_pat'";
$res3=mysql_query($req3) or die ("echec");
$s3=mysql_fetch_array($res3);

echo"<center><a href='http://127.0.0.1/projet_2020/index1.php?id_pat=$id_pat'> <img src='logo.png' width='60' height='60'></a> </center>
		    		<a class='navbar-brand' href='http://127.0.0.1/projet_2020/index1.php?id_pat=$id_pat'>Dentista<span>Dental Clinic</span></a>";?>
	    		</div>
	    		<div class="col-md-4 order-md-1 d-flex topper mb-md-0 mb-2 align-items-center text-md-right">
	    			<div class="icon d-flex justify-content-center align-items-center order-md-last">
	    				<span class="icon-map"></span>
	    			</div>
	    			<div class="pr-md-4 pl-md-0 pl-3 text">
					    <p class="con"><span>Free Call</span> <span>+1 234 456 78910</span></p>
					    <p class="con">198 West 21th Street, Suite 721 New York NY 10016</p>
				    </div>
			    </div>
			    <div class="col-md-4 order-md-3 d-flex topper mb-md-0 align-items-center">
			    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
			    	<div class="text pl-3 pl-md-3">
					    <p class="hr"><span>Open Hours</span></p>
					    <p class="time"><span>Mon - Sat:</span> <span>8:00am - 9:00pm</span> Sun: Closed</p>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
        </button>
        <font color='#46b7de'>Votre ID :</font> <b class="text-warning"><?php echo"$id_pat";?></b>
        <?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id_pat=$_GET['id_pat'];
$req2="select* from patient where id_pat='$id_pat'";
$res2=mysql_query($req2) or die ("echec");
$s2=mysql_fetch_array($res2);
$req3="select* from rendez_vous where id_pat=$id_pat AND etat='accepter'";
$res3=mysql_query($req3) or die("echec2");
$n=mysql_num_rows($res3);

echo"
	      <div class='collapse navbar-collapse' id='ftco-nav'>
	        <ul class='navbar-nav m-auto'>
	        	<li class='nav-item active'><a href='index1.php?id_pat=$id_pat' class='nav-link'>Home</a></li>
            <li class='nav-item'><a href='about.php?id_pat=$id_pat' class='nav-link'>About</a></li>
	        	<li class='nav-item'><a href='doctor.php?id_pat=$id_pat' class='nav-link'>Doctor</a></li>
	        	<li class='nav-item'><a href='contact.php?id_pat=$id_pat' class='nav-link'>Reclamation</a></li>
	        </ul>
	      </div>
      </div>
      <div class='iconmsg'><font align='right' size='100px'>
    <a href='resultat.php?id_pat=$s2[0]' class='notification'><span class='icon icon-envelope'></span><span class='text'></span><span>
    <path fill-rule='evenodd'
      d='M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z' />
  </svg>
</span>
<span class='badge'>$n</span></a>
    </font></div>";?>
	  </nav>
   
    <!-- END nav -->
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);" >
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate">
            <h1 class="mb-4">Helping Your <span>Stay Happy One</span></h1>
            <h3 class="subheading">Everyday We Bring Hope and Smile to the Patient We Serve</h3>
            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate">
            <h1 class="mb-4">Smile Makes <br>A Lasting Impression</h1>
            <h3 class="subheading">Your Health is Our Top Priority with Comprehensive, Affordable medical.</h3>
            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>
    <section class='ftco-section bg-light'>
      <center>
    <div class='container'>
    <div class='row'>
    <?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$req="select* from cabinet";
$res=mysql_query("$req") or die ("echec");
$id_pat=$_GET['id_pat'];
while($s=mysql_fetch_array($res))
{
echo"	
          <div class='blog-entry'>
          <div class='col'>
           
             <a href='blog-single.php?id_cab=$s[0]&&id_pat=$id_pat' class='block-20 d-flex align-items-end justify-content-end'>";
              echo'<img src="data:image/jpeg;base64,'.base64_encode($s['lien']).'"class=block-20 d-flex align-items-end justify-content-end></td></tr>';
							echo"
              </a>
              <div class='text bg-white p-5'>
                <h3 class='heading'><a href='blog-single.php?id_cab=$s[0]&&id_pat=$id_pat'><span class='icon icon-map-marker'> <font color='#46b7de'> Cabinet :</font></span> $s[1] à $s[2]</a></h3>
               <p><span class='ion-ios-clock'></spam> <font color='#46b7de'>Horaire de ouverture :</font> $s[3] am<br><span class='ion-ios-clock'></spam> <font color='#46b7de'> Horaire de Fermeture :</font> $s[4] pm<br><spam class='icon icon-phone'> <font color='#46b7de'>Numero Fix :</font></spam> $s[5]</p>
                <div class='d-flex align-items-center mt-4'>
	                <p class='mb-0'><a href='blog-single.php?id_cab=$s[0]&&id_pat=$id_pat' class='btn btn-primary'>Read More <span class='ion-ios-arrow-round-forward'></span></a></p>
	                <p class='ml-auto mb-0'>
	                	<a href='#' class='mr-2'>Dentiste</a>
	                	<a href='#' class='meta-chat'><span class='icon-chat'></span> </a>
	                </p>
                </div>
              </div>
            </div>
          </div>
         ";}?>
      </div> 
      </div>
    </center>
        <div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
			</div>
		</section>
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo">Dentista</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>

	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Neurolgy</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Dentist</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Ophthalmology</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Cardiology</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Surgery</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept. 20, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept. 20, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
          	<div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Opening Hours</h2>
            	<h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>We are open 24/7</h3>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
 
    
  </body>
</html>