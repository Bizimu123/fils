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
        <h1>Register new product</h1>
    <form action="insert.php" method="post">
        <label for="">Product name</label>
        <br>
        <input type="text" name="pname">
        <br><br>
        <label for="">Product price</label>
        <br>
        <input type="number" name="pprice">
        <br><br>
        <label for="">Product quantity</label>
        <br>
        <input type="number" name="pquantity">
        <br><br>
        <button type="submit">Save product</button>
    </form>
    </center>
</body>
</html>