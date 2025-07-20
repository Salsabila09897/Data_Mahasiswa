<?php
include("config.php");

// cek apakah tombol daftar sudah diklik
if (isset($_POST['daftar'])) {
    
    // ambil data dari formulir
    $nama           = $_POST['nama'];
    $nim            = $_POST['nim'];
    $alamat         = $_POST['alamat'];
    $jurusan        = $_POST['jurusan'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $agama          = $_POST['agama'];
    
    // buat query simpan
    $sql = "INSERT INTO mahasiswa (nama, nim, alamat, jurusan, jenis_kelamin, agama) 
            VALUES ('$nama', '$nim', '$alamat', '$jurusan', '$jenis_kelamin', '$agama')";
    $query = mysqli_query($db, $sql);
    
    // cek hasil query
    if ($query) {
        // jika berhasil, alihkan ke index.php dengan status sukses
        header('Location: index.php?status=sukses');
    } else {
        // jika gagal, alihkan ke index.php dengan status gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>
