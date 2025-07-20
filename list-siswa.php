<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa | Universitas Sapta Mandiri</title>
</head>
<body>
    <header>
        <h3>Mahasiswa yang sudah terdaftar</h3>
    </header>
    
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    
    <br>
    
    <h2>Data Mahasiswa</h2>
    <table id="eventTable" border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM mahasiswa";
            $query = mysqli_query($db, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['nim']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jurusan']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>"; // pastikan di database pakai underscore, bukan spasi
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$siswa['id']."' onclick=\"return confirm('Yakin ingin menghapus data ini?');\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>
