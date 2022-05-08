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

$sql = "SELECT * FROM student";
?>
<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			
	
<?php
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	?>
       <tr>
       		<!-- php echo <=> '=' -->
			<td><?=$row["id"]?></td>
			<td><?=$row["firstname"]?></td>
			<td><?=$row["lastname"]?></td>
			<td><?php echo $row["email"]?></td>
		</tr>
		<?php
    }
} else {
    echo "0 results";
}
?>
	</tbody>
</table>
<?php
$conn->close();
 ?>