<?php
// include database connection file
$db_connection = mysqli_connect("us-cdbr-east-04.cleardb.com","b3a1bf7a01f094","248d647e","heroku_dc3a34e1ef0430a");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($db_connection, "DELETE FROM team WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:team.php");
?>