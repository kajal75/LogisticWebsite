<?php

session_start();

require_once "config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if ($email === false) {
        echo "Invalid email format";
        exit;
    }

    // Database Connection here
    $con = new mysqli("localhost", "root", "", "form");

    if ($con->connect_error) {
        die("Failed to connect: " . $con->connect_error);
    } else {
        // Use a prepared statement with a placeholder for the email
        $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);

        $stmt->execute();

        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();

            // Use password_verify for secure password comparison
            if ($data['password']===$password) {
                echo "Login Successfully";
            } else {
                echo "Invalid Email or Password";
            }
        } else {
            echo "Invalid Email or Password";
        }

        
    }
}

?>
