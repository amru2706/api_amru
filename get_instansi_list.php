<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "mobw7774_user_amru";
$password = "Kepoluh1.,";
$dbname = "mobw7774_api_amru";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(array("message" => "Connection failed: " . $conn->connect_error));
    exit();
}

$sql = "SELECT nama_instansi FROM profileinstansi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $instansiList = array();
    while ($row = $result->fetch_assoc()) {
        $instansiList[] = $row;
    }
    echo json_encode($instansiList);
} else {
    http_response_code(404);
    echo json_encode(array("message" => "No instansi found"));
}

$conn->close();
?>
