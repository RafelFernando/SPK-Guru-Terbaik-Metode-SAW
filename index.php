<html lang="en" class="h-100" id ="html">

<head>
	<meta charset="utf-8" />

	<title>
	  Login
	</title>

	<!--Fonts and icons-->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://unpkg.com/feather-icons"></script>


	<style>
	 html, body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #17a2b8; /* bg-info */
            display: flex;
            justify-content: center;
            align-items: center;
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

	/** Ini untuk footer **/
    .footer {
        background-color:#17a2b8;
        padding: 0.8rem;
        color: white;
    }

    .container {
            width: 100%;
            max-width: 600px; /* Equivalent to col-lg-4 */
            padding: 40px; 
            box-sizing: border-box;
            text-align: center; 
        }
        .container h1, .container h5 {
            color: white; 
        }
        .container h5 {
            margin-bottom: 20px; 
        }
	</style>
</head>
<body>


    <div class="col-lg-4 col-sm-6 p-5">
      <h1 class="text-white text-center">Selamat Datang!</h1>
      <h5 class="text-white text-center mb-5">Silakan masuk untuk melanjutkan</h5>

			<?php
				error_reporting(0);
				if(array_key_exists('status_login',$_SESSION)){
					echo "hahahah";
					if($_SESSION['status_login'] == '0'){
						echo '<div class="alert alert-danger">
										<h6>Gagal Login</h6>
										<p></p>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>';
					}
					else{
			      header("location:awal.html");
					}
				}

			?>

      <div class="card">
        <div class="card-body">
          <form method="post" action="login_proses.php">
            <h6>ID</h6>
            <input type="text" class="form-control mb-2" placeholder="ID" name="id" required>
            <h6>Password</h6>
            <input type="password" class="form-control mb-2" placeholder="Password" name="password" required>
            <div class="d-flex justify-content-center">
              <input type="submit" class="btn btn-info" name="signin" value="Sign In">
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer class="footer bg-info p-3">
      <div class="container-fluid">
        <center>
        <div class="copyright float text-light">
          &copy; 2024 Rafel Fernando
        </div>
      </center>
      </div>
    </footer>
</body>
</html>
