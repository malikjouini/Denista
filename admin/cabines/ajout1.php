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
<title></title>
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
         
	        <li class="nav-item"><a href="http://127.0.0.1/projet_2020/admin/utilisateur/index.php" class="nav-link">Utilisateur</a></li>
            <li class="nav-item active"><a href="http://127.0.0.1/projet_2020/admin/cabines/index.php" class="nav-link">Cabinet</a></li>
            <li class="nav-item"><a href="http://127.0.0.1/projet_2020/admin/contact/index.php" class="nav-link">Reclamation</a></li>
	          
	        </ul>
	      </div>
	    </div>
      </nav>
      <!-- END nav -->
    
	  <center><section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
		  <div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
			  <h1 class="mb-2 bread">Ajout</h1>
			  <p class="breadcrumbs"><span class="mr-2"><a href="http://127.0.0.1/projet_2020/admin/cabines/index.php">Retour<i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"></span> <span>Ajout <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		  </div>
        </div>
        <div class="col-lg-8 ftco-animate"><br>
         
            
        

<div class="container">
  
    <div class="col-lg-8 ftco-animate">
    <div class="about-author d-flex p-4 bg-light">
    <h6 class="mb-5 h4 font-weight-bold">Upload photo</h6>
 
                 <form name="f" action="ajout.php" method="post" class="p-5 bg-light" enctype="multipart/form-data">
                  <input type="file" name="img" /><br></div>
                  <div class="pt-5 mt-5">
           <div class="about-author  p-4 bg-light">
           <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 h4 font-weight-bold">Ajouter Cabinet</h3>
                   <div class="form-group">
                     
                     <input type="text" class="form-control" name="nom" placeholder="NOM DE CABINET">
                   </div>
                   <div class="form-group">
                     
                     <input type="text" class="form-control" name="adresse" placeholder="ADRESSE">
                   </div>
                   <div class="form-group">
                    <h6><label for="name">HORAIRE D'OVERTURE</label></h6>
                     <input type="time" class="form-control" name="do" placeholder="HORAIRE D'OVERTURE">
                   </div>
                   <div class="form-group">
                    <h6><label for="name">HORAIRE DE FERMETURE</label></h6>
                     <input type="time" class="form-control" name="df" placeholder="HORAIRE DE FERMETURE">
                   </div>
                   <div class="form-group">
                    
                    <input type="number" class="form-control" name="nf" placeholder="NUMERO DE FIXE">
                  </div>
                 
                  <div class="form-group">
                    
                    <textarea name="bio"  cols="30" rows="7" class="form-control" placeholder="BIO (DESCRIPTION)"></textarea>
                  </div>
                  <br>
                  <div class="form-group">
                  <select class="form-control" name="dent">
                     <option selected>Dentiste</option>
                  <?php
                  mysql_connect("localhost","root","");
                  mysql_select_db("dent");
                  $req="select* from user where fonction='dentiste'";
                  $res=mysql_query($req) or die ("echec");
                  while($s=mysql_fetch_array($res)){
                    echo"<option value='$s[0]'>$s[0] $s[1] $s[2]</option>";
                  }
                 ?>
                  </select>
             </div>
                   <div class="form-group">
                     <input type="submit" value="Valider" class="btn py-3 px-4 btn-primary">       <input type="reset" value="retablir" class="btn py-3 px-4 btn-danger">
                   </div>
                 
                 </form>
                 </div>
               </div>
             </div>
           </div> 
           <br><br>
           </section>


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
