<?php
include "config.php";
$hapus = mysqli_query($con, "DELETE FROM user WHERE username='$_GET[username]'");
if ($hapus) {
    header('location:data_akun.php');
} else {
    echo "Gagal Menghapus Data petugas !!!";
}
?>
