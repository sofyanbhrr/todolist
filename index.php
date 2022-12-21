<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-primary">
<form action="insert.php" method="POSt">
    <div class="container">
        <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
            <h3 class="text-center text-primary font-monospace">ToDo List</h3>
            <div class="col-8">
                <input type="text" name="list" class="form-control" >
            </div>
            <div class="col-2">
                <button class="btn btn-outline-primary">Submit</button>
            </div>
        </div>
    </div>
</form>

<!-- getdata -->
<?php
include "config.php";
$rawData= mysqli_query($con, "select * from tbltodo");

?>

<div class="container">
    <div class="col-8 bg-white m-auto mt-3">

<table class="table">
    <tbody class="">
        <?php
        while($row = mysqli_fetch_array($rawData)){

        ?>
        <tr>
            <td><?php echo $row['list'] ?></td>
            <td style="width: 10%;"><a href="delete.php? ID= <?php echo $row['id'] ?>" class="btn btn-outline-danger">delete</a></td>
            <td style="width: 10%;"><a href="update.php? ID= <?php echo $row['id'] ?>" class="btn btn-outline-success">update</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>