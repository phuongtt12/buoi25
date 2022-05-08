<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BakOneTemplate</title>
	<link rel="stylesheet" href="vendor/bootstrap-4.5.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free-5.15.1-web/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="vendor/jquery-3.5.1.min.js"></script>
	<script src="vendor/popper.min.js"></script>
	<script src="vendor/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	
	<main>
		<div class="container-fluid">
			<h1>Tìm kiếm sinh viên</h1>
			<form action="index.php">
			<div class="form-group input-group ml-auto" style="width: 400px">
				<input type="text" class="form-control" placeholder="Tiềm kiếm" name="search">
				<div class="input-group-append">
					<button class="btn btn-secondary" type="submit">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</div>
			</form>
			<div class="table-responsive">
				<table class="table table-striped">

					<thead class="thead-dark|thead-light">
						<tr>
							<th scope="col">#</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Handle</th>
						</tr>
					</thead>
					<tbody>
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
			if (!empty($_GET["search"])) {
				$search = $_GET["search"];
				$sql .= " WHERE firstname LIKE '%$search%'";
			}

			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
    // output data of each row
				while($row = $result->fetch_assoc()) {
					?>
					<tr>
							<th scope="row"><?=$row["id"]?></th>
							<td><?=$row["firstname"]?></td>
							<td><?=$row["lastname"]?></td>
							<td><?=$row["email"]?></td>
						</tr>
					<?php
				}
			} 
			?>
					</tbody>
				</table>
			</div>
		</div>

	</main>
</body>
</html>