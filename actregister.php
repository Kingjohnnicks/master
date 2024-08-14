<?php
include "./db/db_config.php";

$response = array('status' => '', 'message' => '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $country = $_POST['country'];
  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email) && email.endsWith('@gmail.com');
}
const email = formData.get('email');
if (!validateEmail(email)) {
    alert('Invalid email address. Please use a Gmail address.');
    return;
}
  // Hash the password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Check if username or email already exists
  $stmt = $conn->prepare("SELECT * FROM register_login_tbl WHERE username = ? OR email = ?");
  $stmt->bind_param("ss", $username, $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    // User already exists
    $response['status'] = 'error';
    $response['message'] = 'Username or Email already exists.';
  } else {
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO register_login_tbl (name, username, password, email, phone, country) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $username, $hashedPassword, $email, $phone, $country);

    // Execute your SQL query and handle errors
    if ($stmt->execute() === TRUE) {
      $response['status'] = 'success';
      $response['message'] = 'New record created successfully';
    } else {
      $response['status'] = 'error';
      $response['message'] = 'Error: ' . $stmt->error;
    }
  }

  // Close the statement and connection
  $stmt->close();
  $conn->close();

  // Return JSON response
  echo json_encode($response);
}
?>
