<?php
include "koneksi.php";
$hapus = mysqli_query($koneksi, "DELETE FROM pegawai WHERE nip='$_GET[nip]'");
if ($hapus) {
    header('location:data_petugas.php');
} else {
    echo "Gagal Menghapus Data petugas !!!";
}
?>
