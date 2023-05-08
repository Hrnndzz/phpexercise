<?php
require "connection.php";

if (isset($_POST['submit'])) {
    $pruts_name = $_POST['pruts_name'];
    $quantity = $_POST['quantity'];
    $unit_id = $_POST['unit_id'];


    $sql = "INSERT INTO pruts SET pruts_name ='$pruts_name', quantity = '$quantity', unit_id = '$unit_id'";

    $result = mysqli_query($connection, $sql) or trigger_error("Failed SQL" . mysqli_error($connection), E_USER_ERROR);

    if ($result) {
        echo "<script>alert('Successfully Created'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Failed to create record'); window.location.href = 'index.php';</script>";
    }
} else {
    echo "<script>alert('Submit button not clicked or not present in the POST data'); window.location.href = 'index.php';</script>";
}
