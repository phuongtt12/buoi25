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


$sql = "INSERT INTO student (firstname, lastname, email)
VALUES ('Nhan', 'C', 'c@gmail.com')";

if ($conn->query($sql) === TRUE) {
	// $last_id = $conn->insert_id;//chỉ cho auto increment
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>