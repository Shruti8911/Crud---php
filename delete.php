<?php include 'header.php'; 

if(isset($_POST['deletebtn'])){
    //create connection here
    include 'config.php';
    $stu_id = $_POST['sid'];
    // query here
    $sql = "DELETE FROM student WHERE sid={$stu_id}";   
    //connection run 
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful") ; 
    // redirect to home pg
    header("Location: http://localhost/shruti/PHP/PHP_MySql_crud/index.php");
    //connection  close
    mysqli_close($conn);}
?>
<div id="main-content">
    <h2>Delete Record</h2>

    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>

</div>
</div>
</body>
</html>
