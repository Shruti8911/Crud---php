<?php
 $stu_id    = $_POST['sid'];
 $stu_name    = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class   = $_POST['class'];
 $stu_phone   = $_POST['sphone'];

    //create connection here
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed");

    // query run here
    $sql = "UPDATE student SET sname='{$stu_name}',saddress='{$stu_address}',class='{$stu_class}',sphone='{$stu_phone}' WHERE sid = {$stu_id}"; 

    //function run here i,e mysqli_query
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful"); 
    
    // redirect to home pg
    header("Location: http://localhost/shruti/PHP/PHP_MySql_crud/index.php");
    
    //connection  close
    mysqli_close($conn);
 ?>