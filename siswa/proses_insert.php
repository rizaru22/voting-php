<?php

if(isset($_POST['submit'])){
    require_once "../koneksi.php";
    $data=[
        'nisn'=>$_POST['nisn'],
        'nama'=>$_POST['nama'],
        'kelas'=>$_POST['kelas']
    ];
    try{
        $sql="INSERT INTO siswa (nisn,nama,kelas) VALUES (:nisn,:nama,:kelas)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute($data);
        header("location:index.php");
    }catch (PDOException $e){
        die("Gagal Menyimpan Data:".$e->getMessage());
    }
}else{
    header("location:create.php");
}