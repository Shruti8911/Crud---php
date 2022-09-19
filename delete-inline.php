<?php 
    echo $stu_id= $_GET['id'];
    
    //connection file
    include 'config.php';

    // query run here
    $sql = "DELETE FROM student WHERE sid={$stu_id}";   

    //function run here i,e mysqli_query
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful") ; 
    
    // redirect to home pg
    header("Location: http://localhost/shruti/PHP/PHP_MySql_crud/index.php");

    //connection  close
    mysqli_close($conn);
?>
