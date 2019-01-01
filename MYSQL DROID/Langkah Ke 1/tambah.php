<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

		//Mendapatkan Nilai Variable
		$name = $_POST['name'];
		$desg = $_POST['desg'];
		$sal = $_POST['salary'];

		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tbl_karyawan (nama,posisi,gajih) VALUES ('$name','$desg','$sal')";

		//Import File Koneksi database
		require_once('koneksi.php');

		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Karyawan';
		}else{
			echo 'Gagal Menambahkan Karyawan';
		}

		mysqli_close($con);
	}
?>