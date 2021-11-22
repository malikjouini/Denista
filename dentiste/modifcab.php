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
  </head>
  <body>
  <div class="py-md-5 py-4 border-bottom">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center">
          <?php
         mysql_connect("localhost","root","");
         mysql_select_db("dent");
         $id_dent=$_GET['id'];
         $req="select* from user where fonction='dentiste'&&id_user='$id_dent'";
         $res=mysql_query($req) or die ("echec");
         echo"<center><a href='http://127.0.0.1/projet_2020/dentiste/index1.php?id=$id_dent'> <img src='logo.png' width='60' height='60'></a> </center>";
		    		echo"<a class='navbar-brand' href='http://127.0.0.1/projet_2020/dentiste/index1.php?id=$id_dent'>Dentista<span>Dental Clinic</span></a>";?>
	    		</div>
	    		<div class="col-md-4 order-md-1 d-flex topper mb-md-0 mb-2 align-items-center text-md-right">
	    			<div class="icon d-flex justify-content-center align-items-center order-md-last">
	    				<span class="icon-map"></span>
	    			</div>
	    			<div class="pr-md-4 pl-md-0 pl-3 text">
					    <p class="con"><span>Free Call</span> <span>+21628191419</span></p>
					    <p class="con">ariana hay nasser mnihla</p>
				    </div>
			    </div>
			    <div class="col-md-4 order-md-3 d-flex topper mb-md-0 align-items-center">
			    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
			    	<div class="text pl-3 pl-md-3">
					    <p class="hr"><span>Open Hours</span></p>
					    <p class="time"><span>Mon - Sat:</span> <span>8:00am - 5:00pm</span> Sun: Closed</p>
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
        <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
         <?php
         mysql_connect("localhost","root","");
         mysql_select_db("dent");
         $id_dent=$_GET['id'];
         $req="select* from user where fonction='dentiste'&& id_user='$id_dent'";
         $res=mysql_query($req) or die ("echec");
         $s1=mysql_fetch_array($res);
         ?>
         <li class="nav-item"><p href='' class="nav-link"></p></li>
         <li class="nav-item"><p href='' class="nav-link"></p></li>
         <li class="nav-item"><p href='' class="nav-link"></p></li>
         <li class="nav-item"><p href='' class="nav-link"></p></li>
	        	<li class="nav-item"><a href='index1.php<?php echo"?id=$s1[0]";?>' class="nav-link">Profil</a></li>
            <?php
            mysql_connect("localhost","root","");
            mysql_select_db("dent");
            $id_dent=$_GET['id'];
            $req="select* from user where fonction='dentiste'&&id_user='$id_dent'";
            $res=mysql_query($req) or die ("echec");
            $s1=mysql_fetch_array($res);
            $req1="select* from secretaire where dentiste=$id_dent";
            $res1=mysql_query($req1) or die("echec1");
            $n=mysql_num_rows($res1);
            if($n==0)
            echo"<li class='nav-item'><a href='http://127.0.0.1/projet_2020/dentiste/secretaire.php?id=$s1[0]' class='nav-link'>Sécretaire</a></li>";
            else {
              echo"<li class='nav-item'><a href='http://127.0.0.1/projet_2020/dentiste/profilsec.php?id=$s1[0]' class='nav-link'>Sécretaire</a></li>";
                  }
            ?>
	          <li class="nav-item"><a href='listes.php<?php echo"?id=$s1[0]";?>' class="nav-link">La liste</a></li>
              <li class="nav-item active"><a href='cabinet.php<?php echo"?id=$s1[0]";?>' class="nav-link">Cabinet</a></li>
            <li class="nav-item"><a href='setting.php<?php echo"?id=$s1[0]";?>' class="nav-link">Setting</a></li>
	        </ul>
	      </div>
	    </div>
      <div><form name="f1" action='calendrier.php<?php echo"?id=$s1[0]";?>' method="post"></div>
      <div class="form-group">
                    <input type="submit" value="ok" class="btn py-2 px-4 btn-primary">
                    </div>
      <div class="col-md-1 col-lg-1 col-xl-2">
										<div class="form-group">
				    					<div class="input-wrap">
				             <input type="text" class="form-control appointment_date" placeholder="Choisir date RDV" name="date">
                        </form>
				    				</div>
									</div></div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Cabinet</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href='http://127.0.0.1/projet_2020/dentiste/index1.php<?php echo"?id=$s1[0]";?>'>Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"></span> <span>Cabinet <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	<section class="ftco-section">

			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
      

            <div class="pt-5 mt-5">
           <div class="about-author d-flex p-4 bg-light">
           <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 h4 font-weight-bold">Modifier Cabinet</h3>

                <?php
              mysql_connect("localhost","root","");
              mysql_select_db("dent");
              $req="select* from cabinet where id_dent=$id_dent";
              $res=mysql_query($req) or die("echec".mysql_error());
              $s=mysql_fetch_array($res);
                    ?>
                <form name="f" action='validcab.php<?php echo"?id=$id_dent";?>' method="post">
                <div class="form-group">
                <input type="hidden" name="idcab" value="<?php echo $s[0];?>">
                <div class="form-group">
                <input type="file" name="f" value="img">
                </div>
                   <input type="text" class="form-control" name="NomdeCabinet" value="<?php echo $s[1];?>">
                 </div>
                 <div class="form-group">
                   
                   <input type="text" class="form-control" name="Adresse"  value="<?php echo $s[2];?>">
                 </div>
                 
                 <div class="form-group">
                  
                   <input type="time" class="form-control" name="Horairedouverture"  value="<?php echo $s[3];?>">
                 </div>
                 <div class="form-group">
                   
                   <input type="time" class="form-control" name="Horairedefermeture"  value="<?php echo $s[4];?>">
                 </div>
                 <div class="form-group">
                   
                   <input type="number" class="form-control" name="Numerofix"  value="<?php echo $s[5];?>">
                 </div>
                 <div class="form-group">
                   
                 <textarea name="bio" cols="30" rows="7" class="form-control"  value=""><?php echo $s[6];?></textarea>
                 </div>
                 <input type="hidden" name="id_dent" value="<?php echo $s[7];?>">

                </div>
                
              </div><br>
              
              <input type="submit" value="Enregistrer" class="btn py-3 px-4 btn-primary">
          </form>
            </div>
          </div> 
          <!-- .col-md-8 -->


          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3>Category</h3>
              <ul class="categories">
                <li><a href="http://127.0.0.1/projet_2020/secretaire/index.php">Sécretaire <span>(+)</span></a></li>
                <li><a href="listes.php">La liste <span>(8)</span></a></li>
                <li><a href="#">Surgery <span>(2)</span></a></li>
                <li><a href="#">Dental <span>(2)</span></a></li>
                <li><a href="#">Ophthalmology <span>(2)</span></a></li>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Popular Articles</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <ul class="tagcloud m-0 p-0">
                <a href="#" class="tag-cloud-link">Medical</a>
                <a href="#" class="tag-cloud-link">Hospital</a>
                <a href="#" class="tag-cloud-link">Nurse</a>
                <a href="#" class="tag-cloud-link">Doctor</a>
                <a href="#" class="tag-cloud-link">Medicine</a>
                <a href="#" class="tag-cloud-link">Facilities</a>
                <a href="#" class="tag-cloud-link">Staff</a>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
            	<h3>Archives</h3>
              <ul class="categories">
              	<li><a href="#">December 2018 <span>(30)</span></a></li>
              	<li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
                <li><a href="#">September 2018 <span>(6)</span></a></li>
                <li><a href="#">August 2018 <span>(8)</span></a></li>
              </ul>
            </div>


            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div><!-- END COL -->
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
                <li><span class="icon icon-map-marker"></span><span class="text">Ariana hay nasser mnihla</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+21628191419</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">malikandamira@gmail.com</span></a></li>
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
            <li><a href='index1.php<?php echo"?id=$s1[0]&&id_profil=$s3[0]";?>'><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
            <?php
            mysql_connect("localhost","root","");
            mysql_select_db("dent");
            $id_dent=$_GET['id'];
            $req="select* from user where fonction='dentiste'&&id_user='$id_dent'";
            $res=mysql_query($req) or die ("echec");
            $s1=mysql_fetch_array($res);
            $req1="select* from secretaire where dentiste=$id_dent";
            $res1=mysql_query($req1) or die("echec1");
            $n=mysql_num_rows($res1);
            if($n==0)
            echo"<li><a href='http://127.0.0.1/projet_2020/dentiste/secretaire.php?id=$s1[0]'><span class='ion-ios-arrow-round-forward mr-2'></span>Sécretaire</a></li>";
            else {
              echo"<li><a href='http://127.0.0.1/projet_2020/dentiste/profilsec.php?id=$s1[0]'><span class='ion-ios-arrow-round-forward mr-2'></span>Sécretaire</a></li>";
                  }
            ?>           
             <li><a href='http://127.0.0.1/projet_2020/dentiste/listes.php<?php echo"?id=$s1[0]";?>'><span class="ion-ios-arrow-round-forward mr-2"></span>La liste</a></li>
            <li><a href='http://127.0.0.1/projet_2020/dentiste/cabinet.php<?php echo"?id=$s1[0]";?>'><span class="ion-ios-arrow-round-forward mr-2"></span>Cabinet</a></li>
            <li><a href='http://127.0.0.1/projet_2020/dentiste/setting.php<?php echo"?id=$s1[0]";?>'><span class="ion-ios-arrow-round-forward mr-2"></span>Setting</a></li>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Malik and Amira</a>
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