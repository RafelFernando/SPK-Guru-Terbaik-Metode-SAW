<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Akun</title>
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

.tabel-transaksi {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.tabel-transaksi th, .tabel-transaksi td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

.tabel-transaksi th {
    background-color: #f4f4f4;
    color: #333;
}

.tabel-transaksi tr:nth-child(even) {
    background-color: #f9f9f9;
}

.tabel-transaksi tr:hover {
    background-color: #f1f1f1;
}

.tabel-transaksi a {
    text-decoration: none;
    color: #0056b3;
}

.tabel-transaksi a:hover {
    text-decoration: underline;
}

/* style button tambabh */
.button-container {
    margin-bottom: 5px;
        text-align: left;
}

.add-button {
    background-color: #0056b3;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
}

.add-button:hover {
    background-color: #004080;
}

.add-button .icon-plus {
        margin-right: 8px; 
    }

.tabel-transaksi .edit-btn {
    background-color: #28a745; /* Green */
    padding: 7px;
    border-radius: 10%;
    color: white;
}

.tabel-transaksi .edit-btn:hover {
    background-color: #218838; /* Darker green */
}

.tabel-transaksi .hapus-btn {
    background-color: #dc3545; /* Red */
    padding: 7px;
    border-radius: 10%;
    color: white;
}

.tabel-transaksi .hapus-btn:hover {
    background-color: #c82333; /* Darker red */
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
                <a href="" id="users"><i data-feather="users"></i></a>
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
    <h2>Data Akun Petugas</h2>

    <div class="button-container">
        <button class="add-button" onclick="window.location.href='tambah_akun.php'">
            <i data-feather="plus" class="icon-plus"></i> Tambah Akun
        </button>
    </div>

    <table align="center" border="1px solid black" cellpadding="5" class="tabel-transaksi">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>

        <?php
        include('config.php');

        $sql = 'select * from user';
        $query = mysqli_query($con, $sql) or die ('Gagal SQL');
        $no = 1;
        while ($hasil = mysqli_fetch_array($query)) {
        ?>

        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $hasil['username']?></td>
            <td><?php echo $hasil['password']?></td>
            <td>
                <a href="edit_akun.php?username=<?php echo $hasil['username']; ?>" class="edit-btn">Edit</a>
                <a href="hapus_akun.php?username=<?php echo $hasil['username']; ?>" class="hapus-btn">Hapus</a>
            </td>
        </tr>

        <?php
        $no++;
        }
        ?>
    </table>

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