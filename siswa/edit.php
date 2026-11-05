<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "../koneksi.php";
        $data=[
        'id'=>$_GET['id']
        ];
    try{
        $sql="SELECT * FROM siswa WHERE id=:id";
        $stmt=$pdo->prepare($sql);
        $stmt->execute($data);
        $siswa=$stmt->fetch(); 
    }catch(PDOException $e){
        die("Gagal Memuat Data:".$e->getMessage());
    }

    ?>
    <form action="proses_update.php" method="POST">
        <!-- nisn,nama,kelas -->
         <input type="hidden" name="id" id="id" value="<?= $_GET['id'] ?>"><br><br>
        
         <label for="nisn">NISN:</label>
         <input type="text" name="nisn" id="nisn" required value="<?= $siswa['nisn'] ?>"><br><br>

         <label for="nama">Nama:</label>
         <input type="text" name="nama" id="nama" required value="<?= $siswa['nama'] ?>"><br><br>

         <label for="kelas">Kelas:</label>
         <input type="text" name="kelas" id="kelas" value="<?= $siswa['kelas'] ?>"><br><br>

         <button type="submit" name="submit" id="submit">Simpan Data</button>

    </form>
</body>
</html>