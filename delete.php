<?php
include "connection.php";

if (isset($_POST['delete'])) {

    $pruts_id = $_POST['pruts_id'];
    $sql = "DELETE FROM pruts WHERE pruts_id = '$pruts_id' ";
    $result = mysqli_query($connection, $sql) or trigger_error("Failed SQL" . mysqli_error($connection), E_USER_ERROR);
    echo "<script>  window.location.href = 'index.php'; alert('Delete success!');</script>";
}
