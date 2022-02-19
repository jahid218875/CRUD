<?php


$student_name = $_POST["sname"];
$student_address = $_POST["saddress"];
$student_class = $_POST["class"];
$student_phone = $_POST["sphone"];

$conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
$sql = "INSERT INTO students(sName, sAddress, sClass, sPhone) VALUES ('{$student_name}', '{$student_address}', '{$student_class}', '$student_phone')";
$result = mysqli_query($conn, $sql);

header("Location: http://localhost/php/crud_html/index.php");

mysqli_close($conn);


?>