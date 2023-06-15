<?php
include('koneksi.php');

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$program_studi = $_POST['program_studi'];
$keahlian = implode(",", $_POST['keahlian']);

$query = mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', jenis_kelamin='$jenis_kelamin', program_studi='$program_studi', keahlian='$keahlian' WHERE id='$id'");

if ($query) {
    echo 'Data berhasil diupdate. Klik <a href="index.php">di sini</a> untuk ke halaman depan.';
} else {
    echo 'Data gagal diinput. Klik <a href="index.php">di sini</a> untuk ke halaman depan.';
}
?>