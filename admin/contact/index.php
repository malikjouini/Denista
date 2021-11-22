<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
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
<title>Reclamation</title>

</head>

<body>
<div class="py-md-5 py-4 border-bottom">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center">
          <center><a href="http://127.0.0.1/projet_2020/admin/"> <img src="logo.png" width="60" height="60"></a> </center>
		    		<a class="navbar-brand" href="http://127.0.0.1/projet_2020/admin/">Dentista<span>Dental Clinic</span></a>
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
	        	<li class="nav-item "><a href="http://127.0.0.1/projet_2020/admin/utilisateur/index.php" class="nav-link">Utilisateur</a></li>
            <li class="nav-item "><a href="http://127.0.0.1/projet_2020/admin/cabines/index.php" class="nav-link">Cabinet</a></li>
            <li class="nav-item active"><a href="index.php" class="nav-link">Reclamation</a></li>
          	
	        </ul>
	      </div>
	    </div>
	  </nav>
 <!-- END nav -->
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Reclamation</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="http://127.0.0.1/projet_2020/admin/">admin <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"></span> <span>Reclamation<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
<center>
	

			<div class="container">
				
          <div class="col-lg-9 ftco-animate">
      

            <div class="pt-5 mt-5">
           <div class="about-author p-4 bg-light mx-auto">
           <div class="comment-form-wrap pt-5">
                <h2 class="mb-5 h4 font-weight-bold">Les reclamations</h2>
                <?php
              mysql_connect("localhost","root","");
              mysql_select_db("dent");
              $req="select * from contact";
              $res=mysql_query($req) or die("echec".mysql_error());
              $n=mysql_num_rows($res);
              if ($n==0)
              {
                echo"il n'y a pas de reclamation";
              }
              else
              {
              
              echo "<table class='table'>
              <thead> 
              <tr>
              <th><b><font color='#46b7de'>ID</font></b></th>
              <th><b><font color='#46b7de'>NOM</font></b></th>
              <th><b><font color='#46b7de'>USER</font></b></th>
              <th colspan=2><b><font color='#46b7de'>ADMINISTRATION</font></b></th></tr></thead>";
              while($s=mysql_fetch_array($res)) 
              { echo"
                <tbody>
                <tr>
                <th>$s[6]</th>
                <td>$s[1]</td>
                <td>$s[2]</td>
                <td><a href='affiche.php?id=$s[0]' class='btn btn-primary'> Afficher</td>
                <td><a href='supprime.php?id=$s[0]' class='btn btn-danger'>  Supprimer</td>
                </tr>
                </tbody>";
              
                  }
                    
                }
                ?>
                </table>
                      
              </div>
              </div>
              </div>
              </div>
              </div>
              <br><br><br><br>

</center>


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
