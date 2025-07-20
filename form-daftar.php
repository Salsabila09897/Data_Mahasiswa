<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form p {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #555;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

    </style>
</head>
<body>

    <div class="container">
        <h2>Form Pendaftaran Mahasiswa</h2>
        
        <form action="proses-tambah.php" method="POST">
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" required />
            </p>
            <p>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" required />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat" rows="3" cols="30" required></textarea>
            </p>
            <p>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" required />
            </p>
            <p>
                <label>Jenis Kelamin: </label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama" required>
                    <option value="">-- Pilih Agama --</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </p>
            <p>
                <button type="submit" name="submit">Daftar</button>
            </p>
        </form>
    </div>

</body>
</html>
