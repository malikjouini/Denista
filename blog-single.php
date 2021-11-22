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
        <font color='#46b7de'>Votre ID :</font><b class="text-warning"><?php echo"$id_pat";?></b>
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
	        	<li class='nav-item'><a href='index1.php?id_pat=$id_pat' class='nav-link'>Home</a></li>
            <li class='nav-item'><a href='about.php?id_pat=$id_pat' class='nav-link'>About</a></li>
            <li class='nav-item active'><a href='blog-single.php?id_pat=$id_pat' class='nav-link'>Cabinet</a></li>
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
    
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Cabinet</h1>
            <?php
            mysql_connect("localhost","root","");
            mysql_select_db("dent");
            $id_pat=$_GET['id_pat'];
            $req="select* from patient where id_pat='$id_pat'";
            $res=mysql_query($req) or die ("echec");
            $s=mysql_fetch_array($res);

echo"
            <p class='breadcrumbs'><span class='mr-2'><a href='index1.php?id_pat=$s[0]'>Home <i class='ion-ios-arrow-forward'></i></a></span> <span>Cabinet<i class='ion-ios-arrow-forward'></i></span></p>
          ";?>          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-md-0">
				<div class="row no-gutters">
					<div class="col-md-3 d-flex align-items-stretch">
						<div class="consultation w-100 text-center px-4 px-md-5">
							<h3 class="mb-4">Dental Services</h3>
							<p>A small river named Duden flows by their place and supplies</p>
							<a href="#" class="btn-custom">See Services</a>
						</div>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div class="consultation consul w-100 px-4 px-md-5">
							<div class="text-center">
								<h3 class="mb-4">Consultation</h3>
              </div>
              <?php
              mysql_connect("localhost","root","");
              mysql_select_db("dent");
              $id=$_GET['id_cab'];
              $req4="select id_cab from cabinet where id_cab='$id'";
              $res4=mysql_query($req4) or die ("echec4");
              $s4=mysql_fetch_array($res4);
              $id1=$_GET['id_pat'];
              $req5="select id_pat from patient where id_pat='$id1'";
              $res5=mysql_query($req5) or die ("echec5");
              $s5=mysql_fetch_array($res5); 
              echo"<form name ='f' action='ajoutrnv.php?id_cab=$id&&id_pat=$id1' class='appointment-form' method='POST'>";
              ?>
								<div class="row">
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				    					<input type="text" class="form-control" placeholder="First Name" name="nom">
				    				</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				    					<input type="text" class="form-control" placeholder="Last Name" name="prenom">
				    				</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				    					<div class="form-field">
		          					<div class="select-wrap">
		                      <input type="email" class="form-control" placeholder="email" name="email">
                          <input type="hidden" value="<?php echo $id; ?>" name="id_cab">
                          <input Type="hidden" value="<?php echo $id1; ?>" name="id_pat">
                          <input type="hidden" value="en attente" name="etat">
		                    </div>
				              </div>
				    				</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				    					<div class="input-wrap">
				            		<div class="icon"><span class="ion-md-calendar"></span></div>
				            		<input type="text" class="form-control appointment_date" placeholder="Date" name="date">
			            		</div>
				    				</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				    					<div class="input-wrap">
				            		<div class="icon"><span class="ion-ios-clock"></span></div>
				            		<input type="text" class="form-control appointment_time" placeholder="Time" name="time">
			            		</div>
				    				</div>
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				              <input type="submit" value="Appointment" class="btn btn-secondary py-2 px-4">
				            </div>
									</div>
								</div><center>
                  <div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				    					<input type="number" class="form-control" placeholder="Number Phone" name="num">
				    				</div>
									</div>
                </center>
		    			</form>
		    	  </div>
          </div>
					<div class="col-md-3 d-flex align-items-stretch">
						<div class="consultation w-100 text-center px-4 px-md-5">
							<h3 class="mb-4">Find A Doctor</h3>
							<p>A small river named Duden flows by their place and supplies</p>
							<a href="#" class="btn-custom">Mee our doctor</a>
						</div>
					</div>
				</div>
			</div>
    </section>
    

<div class="fivestars">
  <form name="note" action='note.php<?php echo"?id_cab=$id&&id_pat=$id_pat";?>' method="POST">
  <input type="hidden" value='<?php echo"$id";?>' name="idcab">
  <input type="hidden" value='<?php echo"$id_pat";?>' name="idpat">

    <div class="stars">
      <input class="stars__checkbox" type="submit" id="first-star" name="star">
      <label class="stars__star" for="first-star">
          <svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
              <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
                  10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 "/>
          </svg>
      </label>
      <input class="stars__checkbox" type="submit" id="second-star" name="star">
      <label class="stars__star" for="second-star">
          <svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
              <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
                  10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 "/>
          </svg>
      </label>
      <input class="stars__checkbox" type="submit" id="third-star" name="star">
      <label class="stars__star" for="third-star">
          <svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
              <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
                  10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 "/>
          </svg>
      </label>
      <input class="stars__checkbox" type="submit" id="fourth-star" name="star">
      <label class="stars__star" for="fourth-star">
          <svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
              <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
                  10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 "/>
          </svg>
      </label>
      <input class="stars__checkbox" type="submit" id="fifth-star" name="star">
      <label class="stars__star" for="fifth-star">
          <svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
              <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
                  10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 "/>
          </svg>
      </label>
  </div>
</form>
</div>
<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id=$_GET['id_cab'];
$req="select* from cabinet where id_cab='$id'";
$res=mysql_query($req) or die ("echec");
$s=mysql_fetch_array($res);


	echo"	<section class='ftco-section'>
			<div class='container'>
				<div class='row'>
          <div class='col-lg-8 ftco-animate'>
            <h2 class='mb-3'><font color='#46b7de'> Cabinet de :</font>$s[1]</h2>
            <p>";
            echo'<img src="data:image/jpeg;base64,'.base64_encode($s['lien']).'" class="img-fluid"></td></tr>';?>
            </p>
            <p><font color="#46b7de">Adresse :</font>  <?php echo"$s[2]";?></p>
           <p><font color="#46b7de">Horaire d'ouverture :</font>  <?php echo"$s[3]";?> </p>
            <p><font color="#46b7de">Horaire de fermeture :</font>  <?php echo"$s[4]";?> </p> 
            <p><font color="#46b7de">Numero Fix :</font>  <?php echo"$s[5]";?> </p>
            <p><font color="#46b7de">Bio :</font>  <?php echo"$s[6]";?> </p>           
           
            <?php
            mysql_connect("localhost","root","");
            mysql_select_db("dent");
            $id=$_GET['id_cab'];
            $req1="select * from dentiste where cabinet='$id'";
            $res1=mysql_query($req1) or die ("echec1");
            $s1=mysql_fetch_array($res1); 
            echo"
            <div class='about-author d-flex p-4 bg-light'>
              <div class='bio mr-5'>";
              echo'<img src="data:image/jpeg;base64,'.base64_encode($s1['lien']).'" class="img-fluid mb-4"></td></tr>';?>
              </div>
              <div class="desc">
                <p><font color="#46b7de">Dentiste :</font>  <?php echo"$s1[1] $s1[2]";?></p>
                <p><font color="#46b7de">Bio :</font>  <?php echo"$s1[6]";?></p>
                <table>
                  <tr>
                    <td><font color="#46b7de">Spécialités :</font></td></tr>
                    <td><?php echo"$s1[7]";?><br><?php echo"$s1[8]";?><br><?php echo"$s1[9]";?><br><?php echo"$s1[10]";?><br><?php echo"$s1[11]";?><br><?php echo"$s1[12]";?><br><?php echo"$s1[13]";?></td>
                </table> 
                
              </div>
            </div>


      
          </div> <!-- .col-md-8 -->

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
                <li><a href="#">Neurology <span>(6)</span></a></li>
                <li><a href="#">Cardiology <span>(8)</span></a></li>
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