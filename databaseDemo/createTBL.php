<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql = "CREATE TABLE tblproduct (
id INT(8) NOT NULL,
name VARCHAR(255) NOT NULL,
code VARCHAR(255) NOT NULL,
image text NOT NULL,
price double(10,2) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1";
if ($conn->query($sql) === TRUE) {
echo "Table tblproduct created successfully";
} else {
echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO tblproduct (id, name, code, image, price)
VALUES (1, 'FinePix Pro2 3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00);";
$sql = "INSERT INTO tblproduct (id, name, code, image, price)
VALUES (2, 'EXP Portable Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00);";
$sql = "INSERT INTO tblproduct (id, name, code, image, price)
VALUES (3, 'Luxury Ultra thin Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00);";
$sql = "INSERT INTO tblproduct (id, name, code, image, price)
VALUES (4, 'XP 1155 Intel Core Laptop', 'LPN45', 'product-images/laptop.jpg', 800.00);";

if (mysqli_multi_query($conn, $sql)) {
echo "New records created successfully";
} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "ALTER TABLE tblproduct
ADD PRIMARY KEY('id');
ADD UNIQUE KEY 'product_code' ('code')";

$sql = "ALTER TABLE tblproduct
MODIFY id int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT";

$conn->close();
?>