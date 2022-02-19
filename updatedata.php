<?php

echo $student_id = $_POST["sid"];
echo $student_name = $_POST["sname"];
echo $student_address = $_POST["saddress"];
echo $student_class = $_POST["sclass"];
echo $student_phone = $_POST["sphone"];

$conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
$sql = "UPDATE students SET sName = '{$student_name}', sAddress = '{$student_address}', sClass = '{$student_class}', sPhone = '{$student_phone}' WHERE sId = {$student_id}";
$result = mysqli_query($conn, $sql);

header("Location: http://localhost/php/crud_html/index.php");

mysqli_close($conn);


?>