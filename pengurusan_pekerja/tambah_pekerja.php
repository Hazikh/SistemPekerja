<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Maklumat Pekerja</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000; /* Background berwarna hitam */
            color: #fff; /* Teks berwarna putih */
        }
        .form-container {
            background-color: #fff; /* Background borang berwarna putih */
            color: #000; /* Teks borang berwarna hitam */
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }
        .back-button {
            background-color: #fff; /* Background butang back berwarna putih */
            color: #000; /* Teks butang back berwarna hitam */
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .back-button a {
            color: #000;
            text-decoration: none;
        }
        .btn-add {
            background-color: #343a40; /* Warna darklight */
            color: #fff;
        }
        .btn-clear {
            color: #000; /* Teks berwarna hitam */
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="back-button">
            <a href="index.php">Back</a>
        </div>
        <div class="form-container col-md-6 offset-md-3">
            <h2>Tambah Pekerja Baru</h2>
            <form method="post" action="simpan_pekerja.php">
                <div class="form-group">
                    <label for="ic">IC:</label>
                    <input type="text" class="form-control" id="ic" name="ic" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="hp">HP:</label>
                    <input type="text" class="form-control" id="hp" name="hp" required>
                </div>
                <div class="form-group">
                    <label for="jantina">Jantina:</label>
                    <select class="form-control" id="jantina" name="jantina">
                        <option value="Lelaki">Lelaki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-add">Tambah</button>
                <span class="btn-clear" onclick="clearForm()">Clear</span>
            </form>
        </div>
    </div>

    <script>
        function clearForm() {
            document.getElementById('ic').value = '';
            document.getElementById('nama').value = '';
            document.getElementById('hp').value = '';
            document.getElementById('jantina').value = '';
        }
    </script>
</body>
</html>
