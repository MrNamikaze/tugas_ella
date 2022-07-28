<?php 
			//untuk meinclude kan koneksi
			include('conn.php');

				//jika kita klik cari, maka yang tampil query cari ini
				if(isset($_GET['cek'])) {
					//menampung variabel kata_cari dari form pencarian
					$cek = $_GET['cek'];

					//jika hanya ingin mencari berdasarkan kode_produk, silahkan hapus dari awal OR
					//jika ingin mencari 1 ketentuan saja query nya ini : SELECT * FROM produk WHERE kode_produk like '%".$kata_cari."%' 
					$query = "SELECT * FROM produk WHERE kode_produk like '%".$cek."%' OR nama_produk like '%".$cek."%' OR keterangan like '%".$kcek."%' ORDER BY id ASC";
				} else {
					//jika tidak ada pencarian, default yang dijalankan query ini
					$query = "SELECT * FROM produk ORDER BY id ASC";
				}
				

				$result = mysqli_query($koneksi, $query);

				if(!$result) {
					die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
				}
				//kalau ini melakukan foreach atau perulangan
				while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row['kode_produk']; ?></td>
				<td><?php echo $row['nama_produk']; ?></td>
				<td><?php echo $row['keterangan']; ?></td>
			</tr>
			<?php
			}
			?>

		</tbody>