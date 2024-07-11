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

$data = json_decode(file_get_contents("php://input"), true);

$nama_instansi = $data['nama_instansi'];
$email = $data['email'];
$kantor = $data['kantor'];
$alamat = $data['alamat'];
$call_center = $data['call_center'];

$sql = "UPDATE profileinstansi SET email=?, kantor=?, alamat=?, call_center=? WHERE nama_instansi=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $email, $kantor, $alamat, $call_center, $nama_instansi);

if ($stmt->execute()) {
    http_response_code(200);
    echo json_encode(array("message" => "Profile updated successfully"));
} else {
    http_response_code(500);
    echo json_encode(array("message" => "Failed to update profile"));
}

$stmt->close();
$conn->close();
?>
