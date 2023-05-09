<?php
include "connection.php";

if (isset($_POST['delete'])) {

    $fruit_id = $_POST['fruit_id'];
    $sql = "DELETE FROM fruit WHERE fruit_id = '$fruit_id' ";
    $result = mysqli_query($connection, $sql) or trigger_error("Failed SQL" . mysqli_error($connection), E_USER_ERROR);
    echo "<script>  window.location.href = 'index.php'; alert('Delete success!');</script>";
}
