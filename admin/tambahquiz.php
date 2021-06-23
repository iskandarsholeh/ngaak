<?php
$db_connection = mysqli_connect("us-cdbr-east-04.cleardb.com","b3a1bf7a01f094","248d647e","heroku_dc3a34e1ef0430a");

$id = $_POST['id'];
$nama = $_POST['nama'];
$benar = $_POST['benar'];
$salah = $_POST['salah'];
$total = $_POST['total'];

        mysqli_query($db_connection, "INSERT INTO quiz (idq,nama_quiz,benar,salah,total) VALUES('$id','$nama','$benar','$salah','$total')");
        header('Location: quiz.php');
 
?>