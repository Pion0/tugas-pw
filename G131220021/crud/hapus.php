<?php
include('koneksi.php');

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");

if ($query) {
    header('Location: index.php');
} else {
    echo 'Data gagal diinput. Klik <a href="index.php">di sini</a> untuk ke halaman utama.';
}

?>