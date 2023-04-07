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
    <h1 class="form-title">Welcome</h1>
    <form method="post">
      <div class="main-user-info">
        <div class="user-input-box">
          <label for="firstname">First Name</label>
          <input type="text" id="firstname" name="firstname" placeholder="Enter Full Name" />
          <div style="color:red"><?= $firstnameErr ?? NULL?></div>
        </div>
        <div class="user-input-box">
          <label for="lastname">Last Name</label>
          <input type="text" id="lastname" name="lastname" placeholder="Enter Full Name" />
        </div>
        <div class="user-input-box">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Enter Username" />
        </div>
        <div class="user-input-box">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter Email" />
          <div style="color:red"><?= $emailErr ?? NULL?></div>
        </div>
        <div class="user-input-box">
          <label for="phonenumber">Phone Number</label>
          <input type="tel" id="phonenumber" name="phonenumber" placeholder="Enter Phone Number" />
          <div style="color:red"><?= $phonenumberErr ?? NULL?></div>
        </div>
        <div class="user-input-box">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter Password" />
          <?php
          if (!empty($errors)) {
            for ($i = 0; $i < count($errors); $i++) {
              echo $errors[$i];
            }
          } else {
            echo '';
          }
          ?>
        </div>
        <div class="user-input-box">
          <label for="confirmPassword">Confirm Password</label>
          <input type="password" id="confirmPassword" name="confirm_password" placeholder="Confirm Password" />
          <div style="color:red"><?= $confirmPasswordErr ?? NULL?></div>
        </div>
      </div>

      <div class="form-submit-btn">
        <input type="submit" value="Signup Now" name="register">
        <p>By clicking Signup Now, you agree to and Privacy Policy.<br>
        <a href="terms.php"> our Terms</a>
        </p>
      </div>
    </form>
  </div>
</body>