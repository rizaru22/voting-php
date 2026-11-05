<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_insert.php" method="POST">
        <!-- nisn,nama,kelas -->
         <label for="nisn">NISN:</label>
         <input type="text" name="nisn" id="nisn" required placeholder="1234567890"><br><br>

         <label for="nama">Nama:</label>
         <input type="text" name="nama" id="nama" required placeholder="Agung Santoso"><br><br>

         <label for="kelas">Kelas:</label>
         <input type="text" name="kelas" id="kelas" placeholder="X RPL 1"><br><br>

         <button type="submit" name="submit" id="submit">Simpan Data</button>

    </form>
</body>
</html>