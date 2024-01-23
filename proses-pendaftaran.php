<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['guru'])){
// ambil data dari formulir
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no = $_POST['no_tel'];
$email = $_POST['email'];
// buat query
$sql = "INSERT INTO guru (nama,  jk, alamat, no_tel, email) VALUES
 ('$nama', '$jk', '$alamat', '$no', '$email')"; $query = mysqli_query($db, $sql);
// apakah query simpan berhasil?
if($query) {
// kalau berhasil alihkan ke halaman index.php dengan status=sukses 
header('Location: index2.php?status=sukses');
} else {
// kalau gagal alihkan ke halaman indek.php dengan status-gagal 
header('Location: index2.php?status=gagal');
} 
}else {
die("Akses dilarang...");
}
?>