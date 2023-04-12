<?php

class Project
{
    public function __construct()
    {
        if (array_key_exists('register', $_POST)) {
            $this->register();
        }
        if (array_key_exists('login', $_POST)) {
            $this->login();
        }
        if (array_key_exists('upload', $_POST)) {
            $this->image();
        }
        if (array_key_exists('createAd', $_POST)) {
            $this->createAd();
        }
        
    }

    public function validateRegister()
    {
        global $firstnameErr, $emailErr, $phonenumberErr, $confirmPasswordErr, $errors;
        global $firstname, $lastname, $username, $email, $phonenumber, $password, $confirm_password;
        $errors = array();

        if (empty($_POST['firstname'])) {
            $firstnameErr = 'First Name is required';
        } else {
            $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        // Validate lastname
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Validate username
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Validate email
        if (empty($_POST['email'])) {
            $emailErr = 'Email is required';
        } else {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        }

        // Validate phone number
        if (empty($_POST['phonenumber'])) {
            $phonenumberErr = 'Phone number is required';
        } else {
            $phonenumber = filter_input(INPUT_POST, 'phonenumber', FILTER_SANITIZE_NUMBER_INT);
        }


        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Validate password

        if (strlen($password) < 8) {
            $errors[] = '<div style="color:red">Password must be at least 8 characters long</div>';
        }

        if (!preg_match("#[0-9]+#", $password)) {
            $errors[] = '<div style="color:red">Password must contain at least one number</div>';
        }

        if (!preg_match("#[A-Z]+#", $password)) {
            $errors[] = '<div style="color:red">Password must contain at least one uppercase letter</div>';
        }

        if (!preg_match("#[a-z]+#", $password)) {
            $errors[] = '<div style="color:red">Password must contain at least one lowercase letter</div>';
        }

        if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {
            $errors[] = '<div style="color:red">Password must contain at least one special character</div>';
        }

        if ($password != $confirm_password) {
            $confirmPasswordErr = "Confirm password does not match password";
        }

        if (empty($errors)) {
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        return $errors;
    }
    public function register()
    {
        global $conn, $errors;
        global $firstname, $lastname, $username, $email, $phonenumber, $password, $confirm_password;
        global $firstnameErr, $emailErr, $phonenumberErr, $confirmPasswordErr;
        $this->validateRegister();

            $select = mysqli_query($conn, "SELECT * FROM register WHERE email = '$email' AND password = '$password' ") or die('query failed');
            if (mysqli_num_rows($select) > 0) {
                $message[] = 'user already exist!';
            } else {
                if (empty($firstnameErr) && empty($emailErr) && empty($phonenumberErr) && empty($errors) && empty($confirmPasswordErr)) {
                    
                    $sql = "INSERT INTO register (firstname, lastname, username, email, phonenumber, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$phonenumber', '$confirm_password')";
                    if (mysqli_query($conn, $sql)) {
                        // Success
                        header('Location: login.php');
                    } else {
                        // Error
                        echo 'Error: ' . mysqli_error($conn);
                    }
                }
            }
        return;
    }

    public function login (){
        global $conn, $loginErr, $passwordErr;
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $select = mysqli_query($conn, "SELECT email, password, id FROM register WHERE email = '$email'") or die('query failed');
        $result = $select->fetch_assoc();
        if(mysqli_num_rows($select) > 0){
            if($password == $result['password']){
                $_SESSION['id'] = $result['id'];
                header ('location: dashboard.php');
            }else {
                $passwordErr = 'Check your Email or Password';
            }
        }else {
            $loginErr = 'You are not a registered user';
        }
    }

    public function image(){
        global $conn, $imageErr;
        $id = $_SESSION['id'];
        if(!empty($_FILES['image']['name'])){
            $allowedExt = ['png', 'jpg', 'jpeg'];
            $fileName = $_FILES['image']['name'];
            $fileSize = $_FILES['image']['size'];
            $fileTmp = $_FILES['image']['tmp_name'];
            $targetDir = "uploads/$fileName";
            $fileExt = explode('.', $fileName);
            $fileExt = strtolower(end($fileExt));
            if(in_array($fileExt, $allowedExt)){
                if($fileSize < 1000000){
                    move_uploaded_file($fileTmp, $targetDir);
                    $sql = $conn->query("UPDATE register SET image='$fileName' WHERE id='$id'");
                }else{
                    $imageErr = 'File is too large';
                }
            }else{
                $imageErr = 'Invalid file type';
            }
        }
    }

    public function createAd(){
        global $conn, $created, $cityErr, $conditionErr, $imageErr;
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $category = filter_input(INPUT_POST, 'categories', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $condition = filter_input(INPUT_POST, 'item-condition', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if(empty($condition)){
            $conditionErr = 'Please select your product condition';
        }
        $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_INT);
        $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if(empty($city)){
            $cityErr = 'Please select a city';
        }
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        if(empty($_POST['featuredAd'])){
            $featuredAd = '0';
        }else{
            $featuredAd = $_POST['featuredAd'];
        }
        
        if(empty($conditionErr) && empty($cityErr)){
            if(!empty(array_filter($_FILES['image']['name']))){
                foreach($_FILES['image']['tmp_name'] as $key => $value){
                    $allowedExt = ['png', 'jpg', 'jpeg'];
                    $fileName = $_FILES['image']['name'][$key];
                    $fileSize = $_FILES['image']['size'][$key];
                    $fileTmp = $_FILES['image']['tmp_name'][$key];
                    $targetDir = "ads/$fileName";
                    $fileExt = explode('.', $fileName);
                    $fileExt = strtolower(end($fileExt));
                    if(in_array($fileExt, $allowedExt)){
                        if($fileSize < (2*1024*1024)){
                            move_uploaded_file($fileTmp, $targetDir);
                            $images[] = $fileName;
                            $img = implode(', ', $images);
                            $created = '<div style="color:white; background-color: green; font-size:24px; padding:5px 20px;     width:fit-content; text-align:center;">Ad Successfully Submitted for review!</div>';

                        }else{
                            $imageErr = 'File is too large';
                        }
                    }else{
                        $imageErr = 'Invalid file type';
                    }
                }
                $sql = $conn->query("INSERT INTO ads (title, category, adCondition, price, city, description, name, email, phonenumber, featuredAd, image) VALUES ('$title', '$category', '$condition', '$price', '$city', '$description', '$name', '$email', '$phonenumber', '$featuredAd', '$img')");
            }
            
        }
        
    }
}

$project = new Project;
