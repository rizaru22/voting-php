<?php

if(isset($_POST['submit'])){
    require_once "../koneksi.php";
    $data=[
        'id'=>$_POST['id'],
        'nisn'=>$_POST['nisn'],
        'nama'=>$_POST['nama'],
        'kelas'=>$_POST['kelas']
    ];
    try{
        $sql="UPDATE siswa SET nisn=:nisn, nama=:nama, kelas=:kelas WHERE id=:id";
        $stmt=$pdo->prepare($sql);
        $stmt->execute($data);
        header("location:index.php");
    }catch (PDOException $e){
        die("Gagal Memperbaharui Data:".$e->getMessage());
    }
}else{
    header("location:index.php");
}