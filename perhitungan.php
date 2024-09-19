<!DOCTYPE html>
<html lang="en" class="h-100" id="html">

<head>
    <meta charset="utf-8" />
    <title>Perhitungan</title>
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Tambahkan pustaka Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
     function printDiv() {
        // Convert canvas to data URL
        var canvas = document.getElementById('rankingChart');
        var dataURL = canvas.toDataURL('image/png');

        // Create a new image element
        var img = document.createElement('img');
        img.src = dataURL;
        img.style.width = canvas.width + 'px';
        img.style.height = canvas.height + 'px';

        // Insert the image into the printable area
        var printableArea = document.getElementById('printableArea');
        printableArea.appendChild(img);

        // Hide the original canvas
        canvas.style.display = 'none';

        // Add a delay to ensure the image is rendered
        setTimeout(function() {
            // Print the contents of the printable area
            var printContents = printableArea.innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;

            // Show the original canvas again
            canvas.style.display = 'block';

            // Remove the temporary image
            printableArea.removeChild(img);

            // Add event listeners again
            addEventListeners();
        }, 1000); // Delay of 1 second
    }

    function addEventListeners() {
        var hamburgerMenu = document.getElementById('hamburger-menu');
        hamburgerMenu.addEventListener('click', toggleMenu);
    }

    function toggleMenu() {
        var menu = document.querySelector('.menu');
        menu.classList.toggle('active');
    }

    // Panggil fungsi untuk menambahkan event listener saat halaman dimuat
    addEventListeners();
</script>

    <script src="https://unpkg.com/feather-icons">
    </script>
    

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

    .container {
        width: 80%;
        margin: 20px auto;
        padding: 20px;
        font-family: Arial, sans-serif;
    }

    .aa {
        margin-top: 20px;
    }

    h3 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .table, .table th, .table td {
        border: 1px solid #ddd;
    }

    .table th, .table td {
        padding: 8px;
        text-align: center;
    }

    .table th {
        background-color: #f2f2f2;
        color: #333;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    p {
        margin-bottom: 50px;
    }

    .print-button {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 50px;
        }

        .print-button button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .print-button button:hover {
            background-color: #0056b3;
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

    <div class="container">
        <div class="aa">
            <div id="printableArea">
            <!-- Perhitungan -->
            <?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $alternatif = $_POST['alternatif'];
    $kriteria = $_POST['kriteria'];
    $nilai_kriteria = $_POST['nilai_kriteria'];
    $bobot = $_POST['bobot'];
    $keuntungan = $_POST['keuntungan'];

    // Konversi bobot dan nilai kriteria ke tipe double
    for ($row = 1; $row <= count($alternatif); $row++) {
        $bobot[$row] = doubleval($bobot[$row]);
        for ($col = 1; $col <= count($kriteria); $col++) {
            $nilai_kriteria[$row][$col] = doubleval($nilai_kriteria[$row][$col]);
        }
    }

    // Tampilkan matriks keputusan sebelum normalisasi
echo "<h3>Matriks Keputusan</h3>";
echo "<table class='table table-bordered'><thead><tr><th>Alternatif\\Kriteria</th>";
for ($col = 1; $col <= count($kriteria); $col++) {
    echo "<th>{$kriteria[$col]}</th>";
}
echo "</tr></thead><tbody>";
for ($row = 1; $row <= count($alternatif); $row++) {
    echo "<tr><td>{$alternatif[$row]}</td>";
    for ($col = 1; $col <= count($kriteria); $col++) {
        echo "<td>" . number_format($nilai_kriteria[$row][$col], 0) . "</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";


    // Normalisasi nilai kriteria
    $penilaian = array();
    for ($row = 1; $row <= count($alternatif); $row++) {
        for ($col = 1; $col <= count($kriteria); $col++) {
            $temp = array();
            for ($i = 1; $i <= count($alternatif); $i++) {
                $temp[$i] = $nilai_kriteria[$i][$col];
            }
            if ($keuntungan[$col] == 'true') {
                $penilaian[$row][$col] = $nilai_kriteria[$row][$col] / max($temp);
            } else {
                $penilaian[$row][$col] = min($temp) / $nilai_kriteria[$row][$col];
            }
        }
    }

    // Tampilkan matriks normalisasi
    echo "<h3>Normalisasi Matriks</h3>";
    echo "<table class='table table-bordered'><thead><tr><th>Alternatif\\Kriteria</th>";
    for ($col = 1; $col <= count($kriteria); $col++) {
        echo "<th>{$kriteria[$col]}</th>";
    }
    echo "</tr></thead><tbody>";
    for ($row = 1; $row <= count($alternatif); $row++) {
        echo "<tr><td>{$alternatif[$row]}</td>";
        for ($col = 1; $col <= count($kriteria); $col++) {
            echo "<td>" . number_format($penilaian[$row][$col], 4) . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";

    // Hitung nilai keputusan
    $keputusan = array();
    for ($row = 1; $row <= count($alternatif); $row++) {
        $keputusan[$row] = 0;
        for ($col = 1; $col <= count($kriteria); $col++) {
            $keputusan[$row] += $penilaian[$row][$col] * $bobot[$col];
        }
    }

// Tampilkan proses perhitungan nilai keputusan
echo "<h3>Proses Perhitungan Nilai Keputusan</h3>";
echo "<table class='table table-bordered'><thead><tr><th>Alternatif</th><th>Nilai Keputusan</th></tr></thead><tbody>";
for ($row = 1; $row <= count($alternatif); $row++) {
    echo "<tr><td>{$alternatif[$row]}</td><td>";
    for ($col = 1; $col <= count($kriteria); $col++) {
        echo "(". number_format($penilaian[$row][$col], 4) ." * {$bobot[$col]})";
        if ($col < count($kriteria)) echo " + ";
    }
    echo " = " . number_format($keputusan[$row], 4) . "</td></tr>";
}
echo "</tbody></table>";



    // Simpan hasil ke database
    $id_user = $_SESSION['id'];
    $id_keputusan = ''; // Harusnya ini di-generate oleh database (auto_increment atau semacamnya)

    $query = mysqli_query($con, "SELECT MAX(id_keputusan) as max_id FROM keputusan");
    $result = mysqli_fetch_assoc($query);
    $id_keputusan = $result['max_id'] + 1;

    for ($row = 1; $row <= count($alternatif); $row++) {
        $query = mysqli_query($con, "INSERT INTO keputusan (id_keputusan, id_user, nama_alternatif) VALUES ($id_keputusan, $id_user, '{$alternatif[$row]}')");
        for ($col = 1; $col <= count($kriteria); $col++) {
            $query = mysqli_query($con, "INSERT INTO penilaian (id_keputusan, id_alternatif, id_kriteria, penilaian) VALUES ($id_keputusan, $row, $col, {$penilaian[$row][$col]})");
            $query = mysqli_query($con, "INSERT INTO kriteria (id_keputusan, id_kriteria, nama_kriteria, bobot, keuntungan) VALUES ($id_keputusan, $col, '{$kriteria[$col]}', {$bobot[$col]}, " . ($keuntungan[$col] == 'true' ? 1 : 0) . ")");
        }
        $query = mysqli_query($con, "INSERT INTO ranking (id_keputusan, id_alternatif, nilai_ranking) VALUES ($id_keputusan, $row, {$keputusan[$row]})");
    }
}
?>

<?php

// Tampilkan peringkat
arsort($keputusan);
echo "<h3>Perangkingan</h3>";
echo "<table class='table table-bordered'><thead><tr><th>No</th><th>Alternatif</th><th>Nilai Ranking</th></tr></thead><tbody>";
$counter = 1;
$peringkat_satu = ''; // Inisialisasi untuk menyimpan alternatif peringkat satu
$labels = [];
$data = [];
foreach ($keputusan as $row => $nilai) {
    if ($counter === 1) {
        $peringkat_satu = $alternatif[$row]; // Simpan nama alternatif peringkat satu
    }
    echo "<tr><td>{$counter}</td><td>{$alternatif[$row]}</td><td>" . number_format($nilai, 4) . "</td></tr>";
    $labels[] = $alternatif[$row];
    $data[] = number_format($nilai, 4);
    $counter++;
}
echo "</tbody></table>";
?>

<!-- Elemen canvas untuk grafik batang -->
<canvas id="rankingChart" width="400" height="200"></canvas>

<script>
// Ambil data dari PHP ke JavaScript
var labels = <?php echo json_encode($labels); ?>;
var data = <?php echo json_encode($data); ?>;

var ctx = document.getElementById('rankingChart').getContext('2d');
var rankingChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Nilai Ranking',
            data: data,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

<?php

// Tampilkan kesimpulan peringkat satu
$keys = array_keys($keputusan); // Ambil kunci (indeks) dari array peringkat
$peringkat_pertama = reset($keys);
echo "<h3>Kesimpulan Peringkat Satu</h3>";
echo "<p>Berdasarkan hasil perangkingan yang telah dilakukan, alternatif yang mendapatkan rangking 1 adalah <strong>{$peringkat_satu}</strong> dengan nilai ranking tertinggi <strong>" . number_format($keputusan[$peringkat_pertama], 4) ."</strong>.. Alternatif ini memiliki performa terbaik setelah melalui proses penilaian dan normalisasi berdasarkan bobot kriteria yang telah ditentukan. Dengan demikian,  <strong>{$peringkat_satu}</strong> merupakan pilihan terbaik .</p>";





                // Save to database
                include 'config.php';
                session_start();
                $id_keputusan = '';
                $id_user = $_SESSION['id'];

                $query = mysqli_query($con, "select MAX(id_keputusan) from keputusan");
                $data = array();
                

                for ($row = 1; $row <= count($alternatif); $row++) {
                    $query = mysqli_query($con, "Insert into keputusan(id_alternatif, id_keputusan, nama_alternatif) VALUES($row, $id_keputusan, '$alternatif[$row]')");
                    for ($col = 1; $col <= count($kriteria); $col++) {
                        if ($row == $col) {
                            if ($keuntungan[$row] == 'true') {
                                $query = mysqli_query($con, "Insert into kriteria(id_kriteria, id_keputusan, nama_kriteria, bobot, keuntungan) VALUES($col, $id_keputusan, '$kriteria[$col]', $bobot[$col], 1)");
                            } else {
                                $query = mysqli_query($con, "Insert into kriteria(id_kriteria, id_keputusan, nama_kriteria, bobot, keuntungan) VALUES($col, $id_keputusan, '$kriteria[$col]', $bobot[$col], 0)");
                            }
                        }
                        $query = mysqli_query($con, "Insert into penilaian(id_alternatif, id_kriteria, id_keputusan, penilaian) VALUES($row, $col, $id_keputusan, " . $penilaian[$row][$col] . ")");
                    }
                    $query = mysqli_query($con, "Insert into ranking(id_alternatif, id_keputusan, nilai_ranking) VALUES($row, $id_keputusan, " . $keputusan[$row] . ")");
                }
            
			
			
            ?>

            
            </div>
            <div class="print-button">
                <button onclick="printDiv()">Print Hasil</button>
            </div>
        </div>
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
