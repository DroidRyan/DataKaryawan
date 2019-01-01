<?php
 //Mendapatkan Nilai ID
 $id = $_GET['id'];

 //Import File Koneksi Database
 require_once('koneksi.php');

 //Membuat SQL Query
 $sql = "DELETE FROM tbl_karyawan WHERE id=$id;";

 //Menghapus Nilai pada Database
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menghapus Karyawan';
 }else{
 echo 'Gagal Menghapus Karyawan';
 }

 mysqli_close($con);
 ?>