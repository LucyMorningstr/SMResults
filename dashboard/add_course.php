<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'connect_db.php';
    $name = $_POST['coursename'];
    $admin = $_POST['cadmin'];
    $qry ="INSERT INTO `course` (`name`, `admin`) VALUES ('$name',$admin)";
    $insert = mysqli_query($con,$qry);
    if ($insert) {
        header("location: admin.php?msg=added successfully!");
    }
    else{
        header("location: admin.php?msg=Try again!");
    }
}
?>