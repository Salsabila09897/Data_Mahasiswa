<?php
include("config.php");

$id = $_GET['id'];
$sql = "DELETE FROM mahasiswa WHERE id = $id";
$query = mysqli_query($db, $sql);

if ($query) {
    header('Location: index.php');
} else {
    die("Gagal menghapus data.");
}
?>
