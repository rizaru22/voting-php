<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="create.php">Tambah Data Siswa</a>

    <?php
    require_once "../koneksi.php";
       try{
        $sql="SELECT * FROM siswa";
        $stmt=$pdo->query($sql);
        $siswa=$stmt->fetchAll();
       }catch(PDOException $e){
        die("Gagal Memuat Data:".$e->getMessage());
       }
    ?>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>NISN</td>
                <td>Nama</td>
                <td>Kelas</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($siswa as $data){
                echo "<tr>";
                echo "<td>".$data['id']."</td>";
                echo "<td>".$data['nisn']."</td>";
                echo "<td>".$data['nama']."</td>";
                echo "<td>".$data['kelas']."</td>";
                echo "<td>
                <a href='edit.php?id=".$data['id']."'>Edit</a>|
                <a href='proses_delete.php?id=".$data['id']."' onclick='return konfirmasiHapus();'>Hapus</a>
                </td>";
                echo "</tr>";
            }

           
            ?>
            
        </tbody>
    </table>
<script>
    function konfirmasiHapus(){
        return confirm("Apakah anda ingin menghapus data ini?");
    }
</script>
</body>
</html>