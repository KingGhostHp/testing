<?php
// Kết nối tới cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dangkytaikhoan";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$user = $_POST['username'];
$pass = $_POST['password'];

// Truy vấn cơ sở dữ liệu để kiểm tra thông tin đăng nhập
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Đăng nhập thành công
    echo "Đăng nhập thành công!";
} else {
    // Đăng nhập thất bại
    echo "Sai tên đăng nhập hoặc mật khẩu!";
}

// Đóng kết nối
$conn->close();
?>
