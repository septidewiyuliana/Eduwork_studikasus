<?php
// Include file koneksi ke database
include("connection.php");

// Mulai sesi
session_start();

// Jika form login dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan melalui form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mendapatkan pengguna berdasarkan username
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    // Periksa apakah pengguna ditemukan
    if (mysqli_num_rows($result) == 1) {
        // Ambil data pengguna dari hasil query
        $row = mysqli_fetch_assoc($result);

        // Periksa kecocokan password
        if (password_verify($password, $row['password'])) {
            // Password cocok, set session
            $_SESSION['login_user'] = $username;

            // Periksa role pengguna setelah berhasil login
            if ($row['role'] === 'admin') {
                // Jika pengguna adalah admin, redirect ke halaman admin
                header("location: ../toko_baju_admin/index.php"); // Ganti dengan halaman admin
            } else {
                // Jika pengguna adalah user biasa, redirect ke halaman user
                header("location: index.php"); // Ganti dengan halaman user
            }
        } else {
            // Password tidak cocok
            echo "Password salah";
        }
    } else {
        // Pengguna tidak ditemukan
        echo "Username tidak ditemukan";
    }
}
header("Location: index.php");
?>
