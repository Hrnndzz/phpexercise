<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>

<body class="text-bg-dark">

    <div class="nethStage">
        <div class="nethContainer d-flex gap-2 flex-column align-items-center p-4">
            <img src="https://i0.wp.com/acegif.com/wp-content/uploads/2021/4fh5wi/pepefrg-4.gif" alt="">
            <audio controls loop>
                <source src="tut.mp3" type="audio/mp3">
            </audio>
        </div>
    </div>
    <hr>
    <?php require "connection.php";
    if (isset($_POST['fruit_id'])) {

        $fruit_id = $_POST['fruit_id'];
        $sql = "SELECT * FROM fruit where pruts_id = '$fruit_id' ";
        $result = mysqli_query($connection, $sql) or trigger_error("Failed SQL" . mysqli_error($connection), E_USER_ERROR);
        $row = mysqli_fetch_assoc($result);
    }
    if (isset($_POST['update'])) {
        $fruit_id = $_POST['fruit_id'];
        $fruit_name = $_POST['fruit_name'];
        $quantity = $_POST['quantity'];
        $unit_id = $_POST['unit_id'];

        $sql = "UPDATE pruts SET pruts_name = '$fruit_name', quantity = '$quantity', unit_id = '$unit_id' WHERE pruts_id = '$fruit_id' ";
        $result = mysqli_query($connection, $sql) or trigger_error("Failed SQL" . mysqli_error($connection), E_USER_ERROR);

        echo "<script>  window.location.href = 'index.php'; alert('success!');</script>";
    }
    ?>
    <h3 class="text-center mt-5">Update User</h3>
    <form action="update.php" method="post" class="w-50 mx-auto border border-2 border p-3 mt-4">
        <div class="mb-3">
            <label for="fruit_id" class="form-label">Fruits Id</label>
            <input type="text" name="fruit_id" id="fruit_id" class="form-control" value="<?php echo $row['fruit_id'] ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="pruts_name" class="form-label">Fruits Name</label>
            <input type="text" name="fruit_name" id="fruit_name" class="form-control" value="<?php echo $row['fruit_name'] ?>">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="<?php echo $row['quantity'] ?>">
        </div>
        <label for="unit_id" class="form-label">Unit</label>
        <select name="unit_id" id="unit_id" class="form-select mb-3">
            <option value="">Select Unit</option>
            <option value="1" <?php echo $row['unit_id'] === '1' ? 'selected' : '' ?>>Pieces</option>
            <option value="2" <?php echo $row['unit_id'] === '2' ? 'selected' : '' ?>>Kilo</option>
            <option value="3" <?php echo $row['unit_id'] === '3' ? 'selected' : '' ?>>Grams</option>
            <option value="4" <?php echo $row['unit_id'] === '4' ? 'selected' : '' ?>>Packs</option>
        </select>

        <div class="mb-3 d-flex justify-content-end">
            <input type="submit" name="update" id="update" value="Update" class="btn btn-outline-danger">
        </div>
    </form><br>
    <script src="script.js"></script>
</body>

</html>