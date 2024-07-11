<?php
header('Content-Type: application/json'); // Menetapkan tipe konten ke JSON

$servername = "localhost"; // Ganti dengan detail server Anda
$username = "mobw7774_user_amru"; // Ganti dengan username database Anda
$password = "Kepoluh1.,"; // Ganti dengan password database Anda
$dbname = "mobw7774_api_amru"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(array("message" => "Connection failed: " . $conn->connect_error));
    exit();
}

// Mengambil parameter nama_instansi dari URL
$nama_instansi = isset($_GET['nama_instansi']) ? $_GET['nama_instansi'] : '';

if ($nama_instansi) {
    $sql = "SELECT nama_instansi, email, kantor, alamat, call_center FROM profileinstansi WHERE nama_instansi = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        http_response_code(500);
        echo json_encode(array("message" => "Prepare failed: " . $conn->error));
        exit();
    }
    
    $stmt->bind_param("s", $nama_instansi);
    $stmt->execute();
    $result = $stmt->get_result();
    $profile = $result->fetch_assoc();

    if ($profile) {
        echo json_encode($profile);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Profile not found"));
    }

    $stmt->close();
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Invalid request"));
}

$conn->close();
?>
