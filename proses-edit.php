<?php
include("config.php");

// cek apakah tombol simpan sudah diklik
if (isset($_POST['id'])) {

    // ambil data dari formulir
    $id             = $_POST['id'];
    $nama           = $_POST['nama'];
    $nim            = $_POST['nim'];
    $alamat         = $_POST['alamat'];
    $jurusan        = $_POST['jurusan'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $agama          = $_POST['agama'];

    // buat query update
    $sql = "UPDATE mahasiswa SET 
                nama='$nama', 
                nim='$nim', 
                alamat='$alamat', 
                jurusan='$jurusan', 
                jenis_kelamin='$jenis_kelamin', 
                agama='$agama' 
            WHERE id=$id";

    $query = mysqli_query($db, $sql);

    // cek hasil query
    if ($query) {
        // jika berhasil, alihkan ke index.php
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan: " . mysqli_error($db));
    }

} else {
    die("Akses tidak sah...");
}
?>
