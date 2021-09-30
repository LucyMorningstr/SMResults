<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'connect_db.php';
    $student = $_POST['student'];
    $course = $_POST['course'];
    $qry ="INSERT INTO `enroll` (`student`, `course`) VALUES ($student, $course)";
    $insert = mysqli_query($con,$qry);
    if ($insert) {
        header("location: admin.php?msg=enrolled successfully!");
    }
    else{
        header("location: admin.php?msg=Try again!");
    }
}
?>