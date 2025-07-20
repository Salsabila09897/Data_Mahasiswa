<?php
include("config.php");

// cek apakah id ada di URL
if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

// ambil id dari query string
$id = $_GET['id'];

// query data berdasarkan id
$sql = "SELECT * FROM mahasiswa WHERE id = $id";
$query = mysqli_query($db, $sql);
$mahasiswa = mysqli_fetch_assoc($query);

// cek jika data tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 550px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="proses-edit.php" method="POST">
        <h2>Edit Data Mahasiswa</h2>
        <input type="hidden" name="id" value="<?php echo $mahasiswa['id']; ?>">
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $mahasiswa['nama']; ?>" required>
                <p>
            <label>NIM:</label>
            <input type="text" name="nim" value="<?php echo $mahasiswa['nim']; ?>" required>
        </p>
        <p>
            <label>Alamat:</label>
            <input type="text" name="alamat" value="<?php echo $mahasiswa['alamat']; ?>" required>
        </p>
        <p>
            <label>Jurusan:</label>
            <input type="text" name="jurusan" value="<?php echo $mahasiswa['jurusan']; ?>" required>
        </p>
        <p>
            <label>Jenis Kelamin:</label>
            <select name="jenis_kelamin" required>
                <option value="Laki-laki" <?php echo ($mahasiswa['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                <option value="Perempuan" <?php echo ($mahasiswa['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
            </select>
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama" required>
                <option value="Islam" <?php echo ($mahasiswa['agama'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                <option value="Kristen" <?php echo ($mahasiswa['agama'] == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                <option value="Katolik" <?php echo ($mahasiswa['agama'] == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                <option value="Hindu" <?php echo ($mahasiswa['agama'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                <option value="Buddha" <?php echo ($mahasiswa['agama'] == 'Buddha') ? 'selected' : ''; ?>>Buddha</option>
                <option value="Konghucu" <?php echo ($mahasiswa['agama'] == 'Konghucu') ? 'selected' : ''; ?>>Konghucu</option>
            </select>
        </p>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
