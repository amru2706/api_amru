<?php
// login.php

// Koneksi ke database
$servername = "localhost"; // Ganti dengan server DB Anda
$username = "mobw7774_user_amru";     // Ganti dengan username DB Anda
$password = "Kepoluh1.,";     // Ganti dengan password DB Anda
$dbname = "mobw7774_api_amru";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

// Perform login logic
$sql = "SELECT * FROM tbl_users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Verify the password
    if (password_verify($password, $user['password'])) {
        echo json_encode(['status' => 'success', 'message' => 'Login successful']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid username or password']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid username or password']);
}

$conn->close();
?>
