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

$sql = "SELECT * FROM lapor WHERE DATE(tanggal) = CURDATE()";
$result = $conn->query($sql);

$reports = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reports[] = $row;
    }
}

echo json_encode($reports);

$conn->close();
?>