<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "mobw7774_user_amru";
$password = "Kepoluh1.,";
$dbname = "mobw7774_api_amru";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(array("message" => "Connection failed: " . $conn->connect_error)));
}

$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$tempat_kejadian = $_POST['tempat_kejadian'];

// Insert data into the database
$sql = "INSERT INTO lapor (kategori, deskripsi, tempat_kejadian, tanggal, status) VALUES ('$kategori', '$deskripsi', '$tempat_kejadian', NOW(), 'Terkirim')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("message" => "Laporan berhasil dikirim"));
} else {
    echo json_encode(array("message" => "Error: " . $sql . "<br>" . $conn->error));
}

$conn->close();
?>
