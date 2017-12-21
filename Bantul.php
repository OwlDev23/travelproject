<!DOCTYPE html>
<html>
<head>
	<title>Bantul Explore</title>
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
	<script type="text/javascript" src="src/js/Bantul.js"></script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include "navbar.php";
        include "header.php";
        include "menubar.php";
    ?>
	<center><div class="titlefont">PALEMBANG EXPLORE</div>
	<div class="containertop">
		<div class="containercontent">
			<center>
				<div class="fonttitleinf"> AMPERA </div><br>
				<img src="src/img/ampera.jpg" width="280px" height="260px" class="imgborder trnsformimg">
				<p class="inf">Jembatan Ampera adalah sebuah jembatan di Kota Palembang, Provinsi Sumatera Selatan, Indonesia. </p>

				<button class="btninf" id="myBtn" onclick="showdialogmodal()">More Info</button>
				<!-- modal dialog div -->
				<div id="myModal" class="modal">
				  <div class="modal-content">
				    <span class="close">x</span>
				    <div class="titlemodal">Jembatan Ampera Palembang</div></<br><br>
				    <div class="inf">Jembatan Ampera merupakan jembatan kebanggaan masyarakat Palembang, Sumatera Selatan dan menjadi Trade Mark bagi kota Palembang. Keberadaan jembatan tersebut sangat penting untuk menghubungkan daerah ulu dan ilir sehingga transportasi menjadi lancar dan otomatis juga memperlancar kehidupan ekonomi. Jembatan Ampera merupakan hadiah Bung Karno bagi masyarakat Palembang yang dananya diambil dari dana rampasan perang Jepang (juga untuk membangun Monas, Jakarta). Dahulu jembatan ini sempat diberi nama Jembatan Bung Karno, tetapi beliau tidak setuju (supaya tidak ada kultus individu), maka nama Ampera lebih cocok sesuai dengan fungsinya sebagai Amanat Penderitaan Rakyat, yang pernah menjadi slogan bangsa Indonesia pada tahun 1960-an.</div>
				  </div>
				</div>
				<!-- modal dialog div -->
			</center>
		</div>
		<div class="containercontent">
			<center>
				<div class="fonttitleinf"> KULINER </div><br>
				<img src="src/img/11.jpg" width="280px" height="260px" class="imgborder trnsformimg">
				<p class="inf">Dipalembang ini terdapat berbagai macam aneka kuliner yang bisa membuat lidah bergoyang, salah satunya pempek kapal selam </p>

				<button class="btninf" id="myBtn1" onclick="showdialogmodal()">More Info</button>
				<!-- modal dialog div -->
				<div id="myModal1" class="modal">
				  <div class="modal-content">
				    <span class="close">x</span>
				    <div class="titlemodal">Kuliner Palembang</div></<br><br>
				    					    <div class="inf">Sangat bsnysk kuliner yang bisa anda nimkmati jika berkunjung kepalemmbang. Ini adalah list daftar makanan khas palembang <br>
				    					    <div id="list">
				    					    <ol>
				    					    	<li>Pempek</li>
				    					    	<li>Tekwan</li>
				    					    	<li>Mie Celor</li>
				    					    	<li>Martabak Har</li>
				    					    	<li>Laksan, Burgo, dan Celimpungan.</li>
				    					    </ol>
				    					    </div>
				    					    </div>

				  </div>
				</div>
				<!-- modal dialog div -->
			</center>
		</div>
		<div class="containercontent">
			<center>
				<div class="fonttitleinf"> WISATA </div><br>
				<img src="src/img/airterjun.jpg" width="280px" height="260px" class="imgborder trnsformimg">
				<p class="inf">Di Palembang Terdapat Banyak Tempat Wisata, Kalau singah kesini jangan lupa untuk sempatkan ke tempat  wisatanya</p>
				<a href="#tomap">
					<button class="btninf" id="myBtn2">More Info</button>
				</a>
				<!-- modal dialog div modal dialog div -->
				<div id="myModal2" class="modal">
				  <div class="modal-content">
				    <span class="close">x</span>
				    <div class="titlemodal">Destny Wisata Di Palembang</div></<br><br>
				    					    <div class="inf">

												Palembang adalah ibukota dari provinsi Sumatera Selatan dan merupakan kota terbesar kedua di Pulau Sumatera. Dulunya, Palembang terkenal dengan keberadaan kerajaan Sriwijaya, kerajaan Buddha yang paling besar di Asia Tenggara.

												Selain terkenal dengan pempeknya, Palembang juga mempunyai potensi wisata yang tidak kalah dengan kota lainnya di Sumatera. Apa saja tempat wisata di Palembang yang wajib dikunjungi?
				    					    <br>
				    					    <div id="list">
				    					    <ol>
				    					    	<li>Jembatan Ampera</li>
				    					    	<li>Sungai Musi</li>
				    					    	<li>Pulau Kemaro</li>
				    					    	<li>Taman Hutan Wisata Punti Kayu</li>
				    					    	<li>Benteng Kuto Besak</li>

				    					    </div>
				    					    </div>

				  </div>
				  </div>
				</div>
				
			</center>
		</div>
		
	</div>
	<div id="dwn"><center><img src="src/img/downwhite.png" width="100px"></center></div>
	<div class="kulinarcont">
		<center>
			<div class="containerwisata">
				<div id="tomap"></div>

				<div class="fonttitleinf1 white">Tempat Wisata Palembang</div>
				<div class="inf white">"Beberapa tempat wisata di palembang"</div>

				<!-- maps -->
				<div class="conmap mgnright" id="googleMap"></div>
				<!--apinnya-->
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEvrmcdbg3yP9eJYdG84Bn7RCsVZafXsA&callback=myMap"></script>
				<!--gallery-->
				<div class="conmap mgnleft">
					<div class="cnimg">
						<div class="pieces" id="temam">
						<!-- overlay div -->
							<div id="overlay">
								<div class="text">
									Wisata Airterjun Temam <br>
									<button class="btnsee" onclick="temampoint()">see point</button>
								</div>

							</div>
						</div>
						
						<div class="pieces" id="punti">
							<!-- overlay div -->
							<div id="overlay1">
								<div class="text">Wisata Hutan Punti Kayu<br>
									<button class="btnsee" onclick="punti()">see point</button></div>
							</div>
						</div>
					</div>
					<div class="cnimg" id="pulau">
						<!-- overlay div -->
							<div id="overlay2">
								<div class="text2" onclick="kemaro()">Wisata Pulau Kemaro<br>
									<button class="btnsee">see point</button></div>
							</div>
					</div>

					<div class="cnimg2" id="ampr">
						<!-- overlay div -->
						<div id="overlay3">
								<div class="text">Jembatan Ampera<br>
									<button class="btnsee" onclick="ampera()">see point</button></div>
							</div>
					</div>
				</div>
			</div>
		</center>
	</div>
	<div id="dwn1"><CENTER> <img src="src/img/down.png" width="90px"></CENTER></div>

	<div id="conbotom">
	<center>
		<div class="fonttitleinf1">SHARE IT</div>
		<div id="soscon">
		<table>
			<tr>
				<td><img src="src/img/Facebook_icon.png" width="100px" height="100px" class="marginsos"></td>
				<td><img src="src/img/instagram-icon copy2.png" height="100px" width="100px" class="marginsos"></td>
				<td><img src="src/img/Twitter Icon.png" height="100px" width="100px" class="marginsos"></td>
			</tr>
		</table>
	</div>
	</div>
	</center>
	</center>
</body>
</html>