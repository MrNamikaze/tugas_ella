<?php
include'conn.php';
 //jika kita klik cari, maka yang tampil query cari ini
if(isset($_POST['cek'])){
	//menampung variabel kata_cari dari form pencarian
 $cek= $_POST['cek'];
 //$chkk=$mysqli->real_escape_string($_GET['$id']);
 $hsl=$mysqli->query("select * from tbl_service where like '%".$cek."%' or serial_number='$cek'");
 $h="";
 if (!$h)
 {
 

 $response = "<table border='0' width='100%'>";
while($h=$hsl->fetch_assoc()){

 $Nama = $h['customer'];
 $Alamat = $h['address'];
 $Tlpn = $h['contact'];
 $Barang = $h['product'];
 $sn = $h['serial_number'];
 $problem = $h['problem'];
 $progres = $h['progres'];
 $estimation = $h['estimation'];
 $technisian = $h['technisian'];
  $model = $h['model'];
   $color = $h['color'];

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
 $response .= "<td>Progres : </td><td>".$progres." %</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Estimasi : </td><td>".$estimation."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Teknisi : </td><td>".$technisian."</td>";
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