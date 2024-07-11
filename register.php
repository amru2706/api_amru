<?php
// register.php

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

// Hash the password before storing it
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Perform registration logic
$sql = "INSERT INTO tbl_users (username, password) VALUES ('$username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => $conn->error]);
}

$conn->close();
?>
