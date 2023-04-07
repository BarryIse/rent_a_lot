<?php include 'libs/connection.inc.php'; ?>



<head>
    <!doctype html>
    <html lang="en">

    <head>

        <title>Rent_a_lot</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/scss/main.css" rel="stylesheet" type="text/css">
        <link rel="icon" sizes="192x192" href="assets/img/basic/chrome-touch-icon-192x192.png">
    </head>

    </html>

<body>
    <div class="container">
        <h1 class="form-title">Welcome Back!</h1>
        <form method="post">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" />
                    <div style="color:red"><?= $loginErr ?? NULL ?></div>
                </div>
                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" />
                    <div style="color:red"><?= $passwordErr ?? NULL ?></div>
                </div>

            </div>

            <div class="form-submit-btn">
                <input type="submit" value="Login" name="login">
                <p>Dont't have an account?<br>Sign up <a href="register.php">here</a>
                </p>
            </div>
        </form>
    </div>
</body>