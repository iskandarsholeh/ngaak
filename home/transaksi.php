<?php
$db_connection = mysqli_connect("us-cdbr-east-04.cleardb.com","b3a1bf7a01f094","248d647e","heroku_dc3a34e1ef0430a");

$kelas = $_POST['kelas'];
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$user = $_POST['user'];

if(!in_array($ext,$ekstensi) ) {
    echo "<script>alert('Ektensi foto salah');history.go(-1)</script>";
}else{
	if($ukuran < 904407099){		
		$xx = $rand.'_'.$filename;
     
        move_uploaded_file($_FILES['foto']['tmp_name'], '../img/bukti/'.$rand.'_'.$filename);
      
        mysqli_query($db_connection, "UPDATE users SET id_kelas='$kelas' WHERE google_id='$user' " )or die(mysqli_error($db_connection));
        mysqli_query($db_connection,"INSERT INTO pembayaran (id_user,id_kelas,foto,tgl,bayar) VALUES('$user','$kelas','$xx',NOW(),'0')") or die(mysqli_error($db_connection));
        header('Location: library.php');
        // echo "ERROR, data gagal diupdate". mysqli_error();
	}else{
        // header('Location: team.php');
        echo "ERROR, data gagal diupdate". mysqli_error();
	}
}



?>