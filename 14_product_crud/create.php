<?php

$dns = "mysql:host=localhost;dbname=products_crud";
$pdo = new PDO($dns, 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
            <h1>Create a new product</h1>
            <form>
                <div class="mb-3">
                    <label class="form-label">Product Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Description</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Price</label>
                    <input type="number" step=".01" class="form-control" name="price">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>