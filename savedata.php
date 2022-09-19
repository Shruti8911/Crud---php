<?php
echo $stu_name    = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class   = $_POST['class'];
echo $stu_phone   = $_POST['sphone'];

    //create connection here
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed");

    // query run here
    $sql = "INSERT INTO student(sname,saddress,class,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')"; 

    //function run here i,e mysqli_query
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful") ; 
    
    // redirect to home pg
    header("Location: http://localhost/shruti/PHP/PHP_MySql_crud/index.php");
    
    
    //connection  close
    mysqli_close($conn);
 ?>