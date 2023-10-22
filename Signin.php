<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href = "Main.css"/>
    <script src="Main.js"></script>
    
</head>

<body>
<div class = "cover">
    <form action="Insert.php" name="form2" method="post" onsubmit="return ValidateForm()">
        <h1>Register</h1>

        <div class = "input-box">
            <input type = "text" name="username" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </div>

        <div class = "input-box">
            <input type = "text" name="email" id="email" placeholder="Email" required>
            <i class='bx bxs-envelope' ></i>
        </div>

        <div class = "input-box">
            <input type = "text" name="pw_1" id="Password_1" placeholder="Password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <div class = "input-box">
            <input type = "text" name="pw_2" id="Password_2" placeholder="Confirm Password" required>
        </div>

        <button type="submit" class="btn">Register</button>
        <div class= "sign-in-box">
            <p>Already a member ?
            <a href="Login.php">Login</a></p>
        </div>

    </form>
</div>
</body>
</html>