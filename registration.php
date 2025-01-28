<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   

    
</head>
<body class="">
    <center>
    <h1 class="mb-5 mt-4">Create new account</h1>
<form action="insert.php" method="post" class="bg-white   ">
    <?php if(isset($_GET['error'])){?>
<p class="bg-success w-50  rounded-3 mt-5 p-3 pt-3 "><?php  echo $_GET['error'];?></p>
    <?php }?>

    <?php  if(isset($_GET['good'])){?>
<p class="bg-success"><?php  echo $_GET['good'];?></p>
    <?php }?>
    <label for="" class="mb-3">FullName</label>
<input type="text" name="fullname"  class="form-control w-50 rounded-4" required>
<label for="" class="mb-3 mt-3">Username</label>
<input type="text" name="username"  class="form-control w-50 rounded-4" required>
<label for="" class="mb-3 mt-3">Password</label>
<input type="password" name="password"  class="form-control w-50 rounded-4"required><br>
<button type="submit"  class="btn btn-outline-success  w-25 rounded-4  mb-4 ">Create new account</button>
</form>

<p>Already have an account <a href="login.php">Login</a></p>

    </center>
    
</body>
</html>