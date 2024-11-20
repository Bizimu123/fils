<?php
$id = $_REQUEST['id'];

include "config.php";
$product = $conn->query("SELECT * FROM products WHERE id = '$id'")->fetch_object();

?>

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
        <h1>Edit product details</h1>
    <form action="update.php" method="post">
        <input type="hidden" name='pid' value="<?php echo $product->id ?>">
        <label for="">Product name</label>
        <br>
        <input type="text" name="pname" value="<?php echo $product->name ?>">
        <br><br>
        <label for="">Product price</label>
        <br>
        <input type="text" name="pprice" value="<?php echo $product->price ?>">
        <br><br>
        <label for="">Product quantity</label>
        <br>
        <input type="number" name="pquantity" value="<?php echo $product->quantity ?>">
        <br><br>
        <button type="submit">Save product</button>
    </form>
    </center>
</body>
</html>