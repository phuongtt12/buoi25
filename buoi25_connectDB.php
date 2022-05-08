<?php 
// Create connection
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "study";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { // nếu có lỗi
    die("Kết nối thất bại: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
echo "Kết nối thành công";
$conn->close();

?>
