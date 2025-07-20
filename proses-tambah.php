<?php
include("config.php");

if (isset($_POST['submit'])) {
    // Ambil data dari form
    $nama           = $_POST['nama'];
    $nim            = $_POST['nim'];
    $alamat         = $_POST['alamat'];
    $jurusan        = $_POST['jurusan'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $agama          = $_POST['agama'];

    // Buat query untuk menyimpan ke database
    $sql = "INSERT INTO mahasiswa (nama, nim, alamat, jurusan, jenis_kelamin, agama)
            VALUES ('$nama', '$nim', '$alamat', '$jurusan', '$jenis_kelamin', '$agama')";
    
    // Eksekusi query
    $query = mysqli_query($db, $sql);

    // Cek apakah berhasil
    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($db);
    }
}
?>
