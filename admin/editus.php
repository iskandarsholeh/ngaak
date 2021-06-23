<?php

$db_connection = mysqli_connect("us-cdbr-east-04.cleardb.com","b3a1bf7a01f094","248d647e","heroku_dc3a34e1ef0430a");
    $id = $_POST['id'];
    $nama = $_POST['content'];
    //query update
    $query = "UPDATE aboutus SET content='$nama'  WHERE id='$id' ";
    if (mysqli_query($db_connection, $query)) {
        # credirect ke page index
        header("location:about.php");    
    }
    else{
        echo "ERROR, data gagal diupdate". mysqli_error();
    }

?>