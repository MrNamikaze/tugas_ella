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

	<center><form method="POST" action="cek_servisan1.php">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                
                        <h1> Check Status Service</h1>
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input type="text" name="cek" placeholder="Nomor Nota / S.N." aria-describedby="basic-addon1" name="check" style="font-weight: bold;">
                           </div>
                           
                        </div>
                       <button  type="submit"  class="userinfo btn btn-success">Check</button>                          
                  </div>
</form>
</center>

<?php
//jika kita klik cari, maka yang tampil query cari ini
if(isset($_POST['cek'])){
    //menampung variabel kata_cari dari form pencarian
 $cek= $_POST['cek'];
 //$chkk=$mysqli->real_escape_string($_GET['$id']);
 $hsl=$koneksi->query("select * from service where invoice_number like '%".$cek."%' or serial_number='$cek'");
 $h="";
 if (!$h)
 {
 

 $response = "<table border='0' width='100%'>";
while($h=$hsl->fetch_assoc()){

 $Nama = $h['nama_costumer'];
 $Alamat = $h['alamat'];
 $Tlpn = $h['no_wa'];
 $Barang = $h['merk'];
 $sn = $h['serial_number'];
 $problem = $h['keluhan'];
 $progres = $h['diagnosis'];
 $estimation = $h['estimasi'];
 $technisian = $h['diterima_oleh'];
  $model = $h['model'];
   $color = $h['warna'];
   $status = $h['status'];
   $harga = $h['harga'];

 $response .= "<tr>";
 $response .= "<td>Name: </td><td>".$Nama."</td>";
 $response .= "</tr>";
 
 $response .= "<tr>";
 $response .= "<td>Alamat : </td><td>".$Alamat."</td>";
 $response .= "</tr>";
 
 $response .= "<tr>";
 $response .= "<td>Contact : </td><td>".$Tlpn."</td>";
 $response .= "</tr>";
 
 $response .= "<tr>";
 $response .= "<td>Barang : </td><td>".$Barang." - ".$model." - ".$color."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>S.N. : </td><td>".$sn."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Kerusakan : </td><td>".$problem."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Diagnosis : </td><td>".$progres."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Estimasi : </td><td>".$estimation." hari</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Teknisi : </td><td>".$technisian."</td>";
 $response .= "</tr>";

  $response .= "<tr>";
 $response .= "<td>Status : </td><td>".$status."</td>";
 $response .= "</tr>";

  $response .= "<tr>";
 $response .= "<td>Harga : </td><td>".$harga."</td>";
 $response .= "</tr>";
 }
 $response .= "</table>";
 
 echo $response;
 exit;
}
 else
 {
    $response .= "<tr>";
 $response .= "<td>Data Tidak Ditemukan !</td>";
 $response .= "</tr>";
    echo $response;
    exit;
 }
}
?>
















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

                            <li><a href="#">PC Rakitan</a></li>

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