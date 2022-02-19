<?php

 $stu_id = $_GET['id'];

 include "config.php";

 $sql = "DELETE FROM students WHERE sId = {$stu_id}";
 $result = mysqli_query($conn, $sql);


 header("Location: http://localhost/php/crud_html/");

 mysqli_close($conn);



?>