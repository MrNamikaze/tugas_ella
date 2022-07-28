<?php require_once("conn.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
    <meta charset="utf-8">
    <title>Egyd Komputer | Toko Online  </title> 
    <meta name="description" content="Website, Toko, Kuningan, service, Rakitan, Komputer"/>
    <meta name="keywords" content="Bahan, CCTV, Egyd, Laptop,cctv" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
	<?php include "header.php"; ?>
<!-- Conten na mang -->

	<center><h1>HALAMAN RAKIT PC</h1>
</center>

	<!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu -->
    <div id="footer-menu" class="hidden-tablet hidden-phone">

        <!-- start: Container -->
        <div class="container">
            
            <!-- start: Row -->
            <div class="row">

                <!-- start: Footer Menu Logo -->
                <div class="span2">
                    <div id="footer-menu-logo">
                        <a href="#"><img src="img/logoegyd.png" alt="logo" /></a>
                    </div>
                </div>
                <!-- end: Footer Menu Logo -->

                <!-- start: Footer Menu Links-->
                <div class="span9">
                    
                    <div id="footer-menu-links">

                        <ul id="footer-nav">

                            <li><a href="rakit_pc.php">PC Rakitan</a></li>

                            <li><a href="#">Laptop</a></li>

                            <li><a href="#">Aksesories</a></li>

                            <li><a href="#">CCTV</a></li>
                            
                            <li><a href="#">SERVICE</a></li>

                        </ul>

                    </div>
                    
                </div>
                <!-- end: Footer Menu Links-->

                <!-- start: Footer Menu Back To Top -->
                <div class="span1">
                        
                    <div id="footer-menu-back-to-top">
                        <a href="#"></a>
                    </div>
                
                </div>
                <!-- end: Footer Menu Back To Top -->
            
            </div>
            <!-- end: Row -->
            
        </div>
        <!-- end: Container  -->    

    </div>  
	<!-- end: Footer Menu -->
<?php include "footer.php"; ?>

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>