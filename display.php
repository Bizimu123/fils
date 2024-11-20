<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h1>All products</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total amount</th>
                    <th>date registered</th>
                    <th colspan='2' >Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "config.php";
                    $sql = "SELECT * FROM products";
                    $res = $conn->query($sql);
                    // print_r($res);
                    $numbering = 0;
                    while($product = $res->fetch_object()){
                        $numbering++;
                       ?>
                            <tr>
                                <td><?php echo $numbering ?></td>
                                <td><?php echo $product->name ?></td>
                                <td><?php echo $product->price ?></td>
                                <td><?php echo $product->quantity ?></td>
                                <td><?php echo $product->quantity*$product->price ?></td>
                                <td><?php echo $product->created_date ?></td>
                                <td>
                                    <a href="remove.php?id=<?php echo $product->id ?>">Delete</a>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?php echo $product->id ?>">edit</a>
                                </td>
                            </tr>
                       <?php
                    }

                ?>
            </tbody>
        </table>
    </center>

    <a href="index.php"><button id="btn">back</button></a>
</body>
</html>