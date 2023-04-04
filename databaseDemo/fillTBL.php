<?php
include("connect.php");

$sql = "INSERT INTO tblproduct (id, name, code, image, price)
VALUES (1, 'FinePix Pro2 3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00);";


if (mysqli_multi_query($conn, $sql)) {
echo "New records created successfully";
} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>