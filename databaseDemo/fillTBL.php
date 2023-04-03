<?php
include("connect.php");
$sql = "INSERT INTO myStudents (id, firstname, lastname, email)
VALUES (123, 'John', 'Doe', 'jd123@phpworld.com');";
$sql .= "INSERT INTO myStudents (id, firstname, lastname, email)
VALUES (345, 'Jane', 'Iyer', 'ji345@phpworld.com');";
if (mysqli_multi_query($conn, $sql)) {
echo "New records created successfully";
} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>