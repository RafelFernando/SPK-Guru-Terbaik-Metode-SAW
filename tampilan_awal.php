<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Awal</title>
     <!-- Fonts and icons -->
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
        body {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
        background-color: #17a2b8;
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

         /* CSS khusus untuk tombol login */
         .navbar a.login-btn {
            background-color: #28a745;
            color: black;
            border: 2px;
            padding: 8px 15px;
            border-radius: 20%;
        }

        .navbar a.login-btn:hover {
            background-color: #fff;
            color: #17a2b8;
        }

        .hero-section {
            background: url('path/to/your/image.jpg') no-repeat center center/cover;
            padding: 100px 0;
            color: white;
            text-align: center;
        }
        .hero-content h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .hero-content p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        .cta-button {
            background-color: #ff5722;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1em;
        }
        .cta-button:hover {
            background-color: #e64a19;
        }
    </style>
<body>
    

    <section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1>Selamat Datang di Sistem Pendukung Keputusan Pemilihan Guru Terbaik</h1>
            <p>Sistem yang membantu Anda dalam memilih guru terbaik dengan menggunakan metode Simple Additive Weighting.</p>
            <a href="index.php" class="cta-button">Login</a>
        </div>
    </div>
    </section>

</body>
</html>