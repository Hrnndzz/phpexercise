<?php
include "retrieve.php";
$result = mysqli_query($connection, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

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
    <form action="create.php" method="post" class="w-50 mx-auto border border-2 p-3 my-5">
        <div class="mb-3">
            <label for="pruts_name" class="form-label">Fruit</label>
            <input type="text" name="pruts_name" class="form-control" id="pruts_name">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" id="quantity">
        </div>

        <div class="mb-3">
            <label for="unit_id" class="form-label">Unit</label>
            <select name="unit_id" class="form-select mb-3" aria-label="Default select example">
                <option value="1">Pieces</option>
                <option value="2">Kilo</option>
                <option value="3">Grams</option>
                <option value="4">Packs</option>
            </select>
        </div>

        <div class="d-flex justify-content-end"><input type="submit" name="submit" value="Submit" id="submit" class="btn btn-primary" /></div>
    </form>

    <table class="table table-striped table-dark w-75 mx-auto table-bordered border my-5">
        <thead>
            <tr>
                <th scope="col"><a href="?column=pruts_id&sort=<?php echo $sort ?>">Fruit id</a></th>
                <th scope="col"><a href="?column=pruts_name&sort=<?php echo $sort ?>">Fruit</a></th>
                <th scope="col"><a href="?column=quantity&sort=<?php echo $sort ?>">Quantity</a></th>
                <th scope="col"><a href="?column=unit_name&sort=<?php echo $sort ?>">Unit</a></th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row['pruts_id'] ?></td>
                    <td><?php echo $row['pruts_name'] ?></td>
                    <td><?php echo $row['quantity'] ?></td>
                    <td><?php echo $row['unit_name'] ?></td>
                    <td class="d-flex justify-content-around">
                        <form action="update.php" method="POST">
                            <input type="submit" name="submit" id="submit" value="Update" class="btn btn-outline-primary">
                            <input type="hidden" name="pruts_id" id="pruts_id" value="<?php echo $row['pruts_id'] ?>">
                        </form>
                        <form action="delete.php" method="POST">

                            <input type="submit" name="delete" id="delete" value="Delete" class="btn btn-outline-danger" onclick="return confirm('You are deleting a prut, continue?')">
                            <input type="hidden" name="pruts_id" id="pruts_id" value="<?php echo $row['pruts_id'] ?>">

                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="script.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>