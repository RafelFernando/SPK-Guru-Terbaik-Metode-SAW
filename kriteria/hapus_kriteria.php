<?php
include "../config.php";
$hapus = mysqli_query($con, "DELETE FROM kriteria WHERE kode='$_GET[kode]'");
if ($hapus) {
    header('location:data_kriteria.php');
} else {
    echo "Gagal Menghapus Data Kriteria !!!";
}
?>
