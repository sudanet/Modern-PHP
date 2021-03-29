<?php

$dns = "mysql:host=localhost;dbname=products_crud";
$pdo = new PDO($dns, 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Fetch data
$statement = $pdo->prepare('SELECT * FROM products ORDER BY id DESC');
$statement->execute();
$prodcuts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="products mt-5">
        <div class="container">
            <h1>Products Crud</h1>
            <a href="create.php" class="btn btn-success">Create Product</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Create Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($prodcuts as $i => $prodcut) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $i + 1; ?></th>
                            <td></td>
                            <td><?php echo $prodcut['title']; ?></td>
                            <td><?php echo $prodcut['description']; ?></td>
                            <td><?php echo $prodcut['price']; ?></td>
                            <td><?php echo $prodcut['create_date']; ?></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
                                <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
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