<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Form Login -->
    <form action="../functionLogin.php" method="post">
        <h3>Login Jadwal</h3>
        
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" aria-describedby="Username" placeholder="username">

        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">

        <button type="submit">Log-In</button>
        <div class="social">
        </div>
    </form>
</body>
</html>