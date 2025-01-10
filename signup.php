<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "speedcourse_web";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari form
    $nama = $conn->real_escape_string($_POST['nama']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password

    // Query untuk memasukkan data ke tabel User
    $sql = "INSERT INTO User (nama, email, password) VALUES ('$nama', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Data berhasil disimpan.</p>";
        header("Location: index.html");
    } else {
        echo "<p>Terjadi kesalahan: " . $conn->error . "</p>";
    }
}

// Tutup koneksi
$conn->close();
?>
