<?php
// Panggil koneksi database
require_once "koneksi.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    // perintah query untuk menghapus data pada tabel is_siswa
    $query = mysqli_query($koneksidb, "DELETE FROM campaign WHERE id='$id'");

    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil delete data
        echo "
        <script>
        alert('Data Berhasil Di Hapus');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('location: index.php?alert=gagal');
    }
}
