<?php
	$sig_string=$_POST['signature'];
	$nama_file="tds_".date("his").".png";
	$path = "tds/" . $nama_file;
	file_put_contents($nama_file, file_get_contents($sig_string));
	if(file_exists($nama_file)){
		move_uploaded_file($nama_file, $path);
		echo "<p>File Signature berhasil disimpan - ".$nama_file."</p>";
		echo "<p style='border:solid 1px teal;width:355px;height:110px;'><img src='".$nama_file."'></p>";
	}
?>