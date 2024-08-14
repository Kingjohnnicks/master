<?php
include "./db/db_config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM register_login_tbl WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // If a record is found, authentication successful
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // If no record is found, authentication failed
        header("Location: index.php?error=invalid_credentials");
        exit();
    }
}
?>
