<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href = "Main.css"/>

    <?php
    session_start();
    if (isset($_SESSION['error_message'])){
        echo "<script type=\"text/javascript\">
            alert ('Invalid Login');
        </script>";
        unset($_SESSION['error_message']); // Also, you should change 'error message' to 'error_message'
    }
?>
</head>

<body>
<div class = "cover">
    <form action="Error.php" name="form1" method="post">
        <h1>Login</h1>
        <div class = "input-box">
            <input type = "text" name="username" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </div>

        <div class = "input-box">
            <input type = "text" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <button type = "submit" name="login_user" class = "btn">Login</button>

        <div class= "sign-in-box">
            <p>Don't have an account ? 
            <a href="Signin.php">Sign in</a></p>
        </div>
    </form>
</div>

</body>
</html>