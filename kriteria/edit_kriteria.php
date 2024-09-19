<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kriteria</title>
    <!--Fonts and icons-->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<style>
    body {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            
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

    /** untuk kelas konten informasi **/
    .informasi {
        padding: 5rem 7% 1.4rem;
        color: #17a2b8;
    }

    .informasi h2 {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 1.5rem;
    }


/* Styling for the add button */
.button-container {
    text-align: center;
    margin-top: 20px;
}

.add-button {
    background-color: #0056b3;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.add-button:hover {
    background-color: #004080;
}

form {
            background: #ffffff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            justify-content: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px 0;
        }
        input[type="text"], input[type="radio"], button {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
        }
        input[type="radio"] {
            width: auto;
        }
        .button-group {
            display: flex;
            justify-content: space-between;

        }
        button {
            padding: 12px 20px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
            margin-top: 10px;
        }
        .btn-save {
            background-color: #007bff;
        }
        .btn-save:hover {
            background-color: #0056b3;
        }
        .btn-cancel {
            background-color: #6c757d;
        }
        .btn-cancel:hover {
            background-color: #5a6268;
        }
        td:first-child {
            text-align: right;
            padding-right: 10px;
            color: #555;
        }
        td:nth-child(2) {
            text-align: center;
            width: 10px;
        }

                   /**Notifikasi */
                   .alert{
	background: rgba(0,0,0,0.4);
	position: fixed;
	width: 100%;
	height: 100vh;
	top: 0;
	left: 0;
	z-index: 1000;
	transition: all .20s ease;
}

.box{
	text-align: center;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	width: 25%;
	margin: 70px auto 0;
	position: relative;
	padding: 20px 15px;
	background-color: #fff;
	border-radius: 5px;
}

.box img{
	margin-bottom: 25px;
}

.box p{
	color: #4d4d4d;
}

.alert .box{
	animation: slide .20s;
}

.btn-alert{
	margin-top: 15px;
	padding: 8px 25px;
	cursor: pointer;
	outline: none;
	border: 1px solid #d0d0d0;
	color: #4d4d4d;
	background: transparent;
	border-radius: 4px;
	text-transform: uppercase;
	transition: all .4s ease;
}

.btn-alert:hover{
	background: #f0f0f0;
}

.close{
	display: block;
	text-decoration: none;
	color: #fff;
	position: absolute;
	right: -15px;
	top: -15px;
	height: 30px;
	width: 30px;
	background-color: #ffb723;
	font-size: 24px;
	text-align: center;
	line-height: 30px;
	border-radius: 15px;
}

@keyframes slide{
	0%{
		margin: 50px auto 0;
	}

	100%{
		margin: 70px auto 0;
	}
}



	</style>
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

    <section class="informasi">
    <h2>Edit Data Kriteria</h2>

    <?php
        include "../config.php";
        $editData = mysqli_query($con, "SELECT * FROM kriteria WHERE kode='$_GET[kode]'");
        $d = mysqli_fetch_array($editData);
        ?>

        <form action="" method="POST">
        <table>
                <tr>
                    <td>Kode</td>
                    <td>:</td>
                    <td><input type="text" name="kode" size="18" value="<?php echo $d['kode']; ?>"></td>
                </tr>

                <tr>
                    <td>Nama Kriteria</td>
                    <td>:</td>
                    <td><input type="text" name="nama_kriteria" size="18" value="<?php echo $d['nama_kriteria']; ?>"></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                    <div class="button-group">
                        <button type="submit" value="Update" class="btn-save">Simpan</button>
                        <button type="button" class="btn-cancel" onclick="window.location.href='data_kriteria.php'">Batal</button>
                    </div>
                    </td>
                </tr>
            </table>
        </form>
    </table>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $update = mysqli_query($con, "UPDATE kriteria SET nama_kriteria='$_POST[nama_kriteria]' WHERE kode='$_POST[kode]'");
        if ($update) {
            $success = "Kriteria berhasil diedit!";
        } else {
            $error = "Gagal menambahkan akun.";
        }
    }
    ?>

    <?php if (isset($success)): ?>
        <div class="alert">
            <div class="box">
                <img src="../gambar/berhasil.png" height="68" alt="alert sukses">
                <p><?php echo $success; ?></p>
                <button onclick="window.location='data_kriteria.php'" class="btn-alert">Ok</button>
            </div>
        </div>
    <?php elseif (isset($error)): ?>
        <div class="alert">
            <div class="box">
                <img src="../gambar/gagal.png" height="68" alt="alert gagal">
                <p><?php echo $error; ?></p>
                <button onclick="window.location='data_kriteria.php'" class="btn-alert">Ok</button>
            </div>
        </div>
    <?php endif; ?>

</section>
    
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