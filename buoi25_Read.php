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

// * là tất cả các cột. Không ghi điều kiện WHERE là chọn tất cả các dòng
// ASC tăng dần
// DESC giảm dần
// $sql = "SELECT id, firstname, lastname FROM student ORDER BY id DESC";
// $sql = "SELECT id, firstname, lastname FROM student LIMIT start, lenght"; //start = (page -1) * lenght
// $sql = "SELECT id, firstname, lastname FROM student WHERE lastname LIKE '%uyen'";
// $sql = "SELECT employee.*, department.name AS dept_name FROM employee JOIN department ON employee.dept_id = department.dept_id";

// $sql = "SELECT e.*, d.name AS dept_name FROM employee e JOIN department d ON e.dept_id = d.dept_id";
// $sql = "SELECT * FROM student WHERE firstname LIKE '%n%'";
$sql = "SELECT employee.*, department.name AS d_name FROM employee JOIN department ON employee.dept_id=department.dept_id";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	//while(null) là fasle
       var_dump($row);
    }
} else {
    echo "0 results";
}

$conn->close();
 ?>