<?php
include "connection.php";
$sort = "DESC";
$column = "fruit_id";

if (isset($_GET['column']) && $_GET['sort']) {
    $column = $_GET['column'];
    $sort = $_GET['sort'];
    $sort == "ASC" ? $sort = "DESC" : $sort = "ASC";
}
$sql = "SELECT * FROM fruit AS p INNER JOIN unit_of_measure AS um ON p.unit_id = um.unit_id ORDER BY $column $sort";
$result = mysqli_query($connection, $sql);
$test = mysqli_fetch_array($result);