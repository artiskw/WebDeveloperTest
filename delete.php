<?php
    require('db.php');
    $id = $_REQUEST['id'];
    $query = "DELETE FROM form WHERE id = $id"; 
    $result = mysqli_query($conn, $query) or die ( ysqli_error());
    header("Location: view.php");
?>