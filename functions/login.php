<?php

include '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform validation and authentication
    // This is a basic example, and you should use secure authentication mechanisms
    $sql = "SELECT * FROM user WHERE user_name='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "success";
    } else {
        echo "failure";
    }
}

?>
