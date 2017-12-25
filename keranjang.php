<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="res/css/keranjang.css">
</head>
<body>
	<?php session_start(); include "navbarsecond.php"; ?>
	<center>
<div id="contab">
	<h2>Daftar Keranjang</h2>
	<table id="customers" class="table">
		<tr>
			<th>Nama Kota</th>
			<th>Hotel/Wisata</th>
			<th>Lokasi</th>
			<th>Deskripsi</th>
			<th>Harga</th>
			<th>Action</th>
		</tr>
		<tr>
			<td></td>
			<th>Wisata</th>
		</tr>
		<?php
		if(isset($_SESSION["username"]))
		{
			include "init/conection.php";
			$idkeranjang = getidkeranjang();
			$harga = 0;
			//UNTUK WISATA
			$sql = "
			SELECT DW.id_keranjang,DW.id_wisata, DW.id_wisata, K.nama_kota, W.nama_wisata, W.lokasi, W.deskrip, W.harga
			FROM detailwisata DW
			JOIN wisata W ON DW.id_wisata = W.id_wisata
			JOIN kota K ON W.id_kota = k.id_kota
			WHERE DW.id_keranjang = $idkeranjang
			";
				$result = mysqli_query($con,$sql);
				if(mysqli_num_rows($result))
				{
					while($row = mysqli_fetch_assoc($result))
					{
						$harga += $row["harga"];
						$id = $row["id_wisata"];
						echo("
						<tr>
							<td>".$row["nama_kota"]."</td>
							<td>".$row["nama_wisata"]."</td>
							<td>".$row["lokasi"]."</td>
							<td>".$row["deskrip"]."</td>
							<td>".$row["harga"]."</td>
							<td><a href='init/hapuskeranjang.php?id=$id&action=2'>Hapus</a></td>
						</tr>
						");

					}
				}
				else
				{
				}

				echo("
				<tr><td></td></tr>
				<tr>
					<td></td>
					<th>Hotel</th>
				</tr>
				");

				$sql2 = "
				SELECT DH.id_keranjang,DH.id_hotel, DH.id_hotel, K.nama_kota, H.nama_hotel, H.lokasi, H.deskrip, H.harga 
				FROM detailhotel DH 
				JOIN hotel H ON DH.id_hotel = H.id_hotel 
				JOIN kota K ON H.id_kota = K.id_kota
				WHERE DH.id_keranjang = $idkeranjang
				";
				$result = mysqli_query($con,$sql2) or die('Invalid query: ' . mysqli_error());
				if(mysqli_num_rows($result))
				{
					while($row = mysqli_fetch_assoc($result))
					{
						$harga += $row["harga"];						
						$id = $row["id_hotel"];
						echo("
						<tr>
							<td>".$row["nama_kota"]."</td>
							<td>".$row["nama_hotel"]."</td>
							<td>".$row["lokasi"]."</td>
							<td>".$row["deskrip"]."</td>
							<td>".$row["harga"]."</td>
							<td><a href='init/hapuskeranjang.php?id=$id&action=1'>Hapus</a></td>
						</tr>
						");

					}
				}
				else
				{
				}
				mysqli_close($con);


		}
		else
		{
			header("Location: login.php");
		}

		?>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<tH>Total harga</tH>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th><?php echo"Rp. $harga"; ?></th>
		</tr>
	</table>
	<button type="button" value="cancel" name="cancel" class="cancelbtn">Pesan</button>
</div></center>
</body>
</html>

<?php
	function getidkeranjang()
    {
		include "init/conection.php";
		
        $user = $_SESSION["username"]; 
        $sql = "SELECT * FROM keranjang where username = '$user'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) == 1)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                return $row["id_keranjang"];
            }
        }
        
	}
	
?>