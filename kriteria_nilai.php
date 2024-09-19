<!DOCTYPE html>
<html lang="en" class="h-100" id ="html">

<head>
	<meta charset="utf-8" />

	<title>
	  Kriteria Nilai
	</title>

	<!--Fonts and icons-->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://unpkg.com/feather-icons"></script>

	<style>
	body {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    /* Ini Bagian Footer (Paling Bawah) */
	.footer {
	  position: fixed;
	  left: 0;
	  bottom: 0;
	  width: 100%;
	  text-align: center;
	}
	.centerinparent{
		text-align: center;
        display: table-cell;
        vertical-align: middle;
	}

    /* Ini Bagian Navbar (Paling Atas) */
    

    .navbar .navbar-ekstra a {
        color: #fff;
        margin: 0 0.5rem;
    }

    .navbar .navbar-ekstra a:hover {
        color: var(--primary);
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 4%;
        background-color: #17a2b8;
        
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
    }

    .navbar .navbar-logo {
        font-size: 1.5rem;
        font-weight: 700;
        color: #fff;
        font-style: italic;
    }

    .navbar .navbar-logo span {
        color: var(--primary);
    }

    .navbar .navbar-nav a {
        color: #fff;
        display: inline-block;
        font-size: 1rem;
        margin: 0 1rem;
    }

    .navbar .navbar-nav a:hover {
        color: var(--primary);
    }

    .navbar .navbar-nav a::after {
        content: '';
        display: block;
        padding-bottom: 0.5rem;
        border-bottom: 0.1rem solid var(--primary);
        transform: scaleX(0);
        transition: 0.2s linear;
    }

    .navbar .navbar-nav a:hover::after {
        transform: scaleX(0.5);
    }

    .navbar .navbar-ekstra a {
        color: #fff;
        margin: 0 0.5rem;
    }

    .navbar .navbar-ekstra a:hover {
        color: var(--primary);
    }

    /* Ini Animasi Menu */
    .menu {
        position: absolute;
        top: 100%;
        right: -100%;
        height: 100vh;
        width: 25rem;
        padding: 0 1.5rem;
        color: var(--bg);
        background-color: #fff;
        transition: 0.3s linear;
    }

    .menu.active {
        right: 0;
    }

    .menu .menu-item {
        margin: 2rem 0;
        display: flex;
        align-items: center;
        gap: 1.5rem;
        padding-bottom: 1rem;
        position: relative;
    }


    /* Ini Bagian Hero (Konten Utama) */
    .hero {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-image: url('../gambar/header.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .hero .content {
        padding: 1.4rem 5%;
    }
    /** Ini untuk footer **/
    .footer {
        background-color:#17a2b8;
        padding: 0.8rem;
        color: white;
    }
    /** ini untuk tombol**/
    .tombol {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .btn {
      display: inline-block;
      font-weight: 400;
      color: #fff;
      text-align: center;
      vertical-align: middle;
      user-select: none;
      background-color: #17a2b8; /* btn-info color */
      border: 1px solid transparent;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: 0.25rem;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn:hover {
      background-color: #138496; /* darken btn-info color on hover */
      border-color: #117a8b; /* adjust border color on hover */
    }

    /**ini untuk teks pada konten **/
    .text {
        color: #17a2b8;
        text-align: center;
        padding: 1rem;
    }

    .text-kedua {
        padding: 1rem;
        text-align: center;
        color: #17a2b8;
    }
	</style>
</head>

<body>
	    <!-- Navbar Mulai -->
		<nav class="navbar">
        <a href="#" class="navbar-logo">Sistem Pendukung Keputusan</a>

        <div class="navbar-ekstra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>

        <!-- Animasi Menu Mulai -->
        <div class="menu">

            <div class="menu-item">
                <a href="#" id="home"><i data-feather="home"></i></a>
                <div class="menu-detail">
                    <a href="http://localhost/spk/beranda.php">Beranda</a> 
                </div>
            </div> 

            <div class="menu-item">
                <a href="#" id="users"><i data-feather="users"></i></a>
                <div class="menu-detail">
                    <a href="http://localhost/spk/pegawai/data_petugas.php">Data Guru</a> 
                </div>
            </div> 

            <div class="menu-item">
                <a href="#" id="users"><i data-feather="file-text"></i></a>
                <div class="menu-detail">
                    <a href="http://localhost/spk/kriteria/data_kriteria.php">Data Kriteria</a> 
                </div>
            </div> 

            <div class="menu-item">
                <a href="#" id="info"><i data-feather="info"></i></a>
                <div class="menu-detail">
                    <a href="http://localhost/spk/info.php">Informasi</a> 
                </div>
            </div>  
            
            <div class="menu-item">
                <a href="#" id="userplus"><i data-feather="user-plus"></i></a>
                <div class="menu-detail">
                    <a href="http://localhost/spk/akun/data_akun.php">Tambah Akun</a> 
                </div>
            </div> 

            <div class="menu-item">
                <a href="#" id="userplus"><i data-feather="log-out"></i></a>
                <div class="menu-detail">
                    <a href="http://localhost/spk/tampilan_awal.php">Log out</a> 
                </div>
            </div> 
        </div>
        <!-- Animasi Menu Selesai -->

        <!-- Navbar Selesai -->
	</nav>

	<div class="p-5">
		<form action="perhitungan.php" method="post">
      <div class="form-group">
        <p class="text-center p-3">Masukan kriteria yang akan digunakan, bobot, dan tentukan apakah itu keuntungan atau bukan.</p>


        <table width="100%" id="kriteria">
					<?php
						$kriteria = $_POST['kriteria'];
						for ($i = 1; $i <= count($kriteria); $i++){
							echo "<input type='text' value='$kriteria[$i]' name='kriteria[$i]' hidden>";
						}

						echo "<tr class='pb-2'><td class='p-1'>Alternatif\Kriteria</td>";
						for ($i = 1; $i <= count($kriteria); $i++){
							echo "<td class='p-1'>$kriteria[$i]</td>";
						}
						echo "</tr>";

						$bobot = $_POST['bobot'];
						for ($i = 1; $i <= count($bobot); $i++){
							echo "<input type='text' value='$bobot[$i]' name='bobot[$i]' hidden>";
						}

						$keuntungan = $_POST['keuntungan'];
						for ($i = 1; $i <= count($kriteria); $i++){
							if(isset($keuntungan[$i])){
								echo "<input type='text' value='true' name='keuntungan[$i]' hidden>";
							}
							else{
								echo "<input type='text' value='false' name='keuntungan[$i]' hidden>";
							}
						}

						$alternatif = $_POST['alternatif'];
						for ($i = 1; $i <= count($alternatif); $i++){
							echo "<input type='text' value='$alternatif[$i]' name='alternatif[$i]' hidden>";
						}
						for ($i = 1; $i <= count($alternatif); $i++){
               echo "<tr class='pb-2'><td class='p-1'>$alternatif[$i]</td>";
							 for ($j = 1; $j <= count($kriteria); $j++){
		 							echo "<td class='p-1'><input type='number' class='form-control text-center' name='nilai_kriteria[$i][$j]'></td>";
		 						}
							 echo "</tr>";
            }
          ?>
        </table>
        <div class="d-flex justify-content-center">
          <input type="submit" class="btn btn-info mt-2" value="Lanjutkan"/>
        </div>
      </div>
    </form>
	</div>



	<!-- Footer Mulai -->
	<footer class="footer">
		<div class="container-fluid">
			<center>
			<div class="copyright">
				&copy; 2024 Rafel Fernando
			</div>
		</center>
		</div>
	</footer>
    <!-- Footer Selesai -->

    <!-- Feather Icon -->
    <script>
        feather.replace()
    </script>

    <!-- Javascript Saya -->
    <script src="script.js"></script>
</body>
</html>
