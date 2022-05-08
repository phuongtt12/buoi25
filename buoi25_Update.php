<?php 
// Create connection
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "study";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
echo "Kết nối thành công";

// Lệnh update
$sql = "UPDATE student SET email='t@gmail.com', firstname='Khùng' WHERE id=1"; // chọn nhiều id:  WHERE id IN(1, 3, 6, 8) hoặc WHERE id >= 2 hoặc WHERE id BETWEEN 2 AND 5
// Thực hiện update
if ($conn->query($sql) === TRUE) {
    echo "update thành công";
} else {
    echo "Update thất bại: " . $conn->error;
}
$conn->close();
 ?>