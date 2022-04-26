<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h3>EDIT USER</h3>

<form action="update.php" method="POST">

    <input type="text" name="name" value="<?php echo $_GET['name']; ?>" required>
    <br>
    <input type="email" name="email" value="<?php echo $_GET['email']; ?>" required>
    <br>
    <input type="text" name="content" value="<?php echo $_GET['content'] ?>" required>

    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"  required>

    <br>
                

<input type="submit" value="SUBMIT">




</form>




</body>
</html>
