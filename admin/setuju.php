<?php
$db_connection = mysqli_connect("us-cdbr-east-04.cleardb.com","b3a1bf7a01f094","248d647e","heroku_dc3a34e1ef0430a");

$id = $_GET['id'];


 

        mysqli_query($db_connection,"update pembayaran set bayar='1' where id='$id'")or die(mysqli_error($db_connection));
        header('Location:pembayaran.php');
        // echo "ERROR, data gagal diupdate". mysqli_error();
	



?>