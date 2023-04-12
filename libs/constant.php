
<?php
    $host = "localhost"; //database host name
    $user = "root"; //database user name
    $password = ""; //database password
    $dbname = "rent_a_lot"; //database name
    
    // Create connection
    $conn = mysqli_connect($host, $user, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
