<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error'];?> </p>
            <?php } ?>
            <label for=""> User Name</label>
            <input type="text" name="uname" placeholder="User Name"><br>
            <label for="">Password</label>
            <input type="password" name="pass" placeholder="Password"><br>
            <button type="submit">Login</button>
    </form>
    
</body>
</html>