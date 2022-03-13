<?php
session_start();
$serverName = 'localhost';
$userName = 'root';
$password = '';
$database = 'stama';

$conn = new mysqli($serverName, $userName, $password, $database);

if (isset($_POST['submit'])) {

    $FName = $_POST['Fname'];
    $LName = $_POST['Lname'];
    $Gender = $_POST['gender'];
    $Uni = $_POST['university'];
    $Sub = $_POST['subject'];
    $year = $_POST['year'];
    $phone = $_POST['phone'];
    $pack = $_POST['Package'];
    $Lap = $_POST['Laptop'];
    $Gproject = $_POST['project'];
    $time = implode(',', $_POST['time']);
    $Part = implode(',', $_POST['Participation']);
    $rnd = implode(',', $_POST['rnd']);



    $query = "INSERT INTO student (Fname,Lname,gender,university,subj,semster,phone,package,device,Gproject,classtime,project,rnd)
     values ('$FName','$LName','$Gender','$Uni','$Sub','$year','$phone','$pack','$Lap','$Gproject','" . $time . "','" . $Part . "','" . $rnd . "')";


    $result = mysqli_query($conn, $query);


    if ($result) {
        $_SESSION['status'] = "Aplication Submitted";
        echo '<script type="text/javascript">';
        echo 'window.location.href = "Form.php";';
        echo '</script>';
    } else {
        $_SESSION['status'] = "Data insertion failed";
        echo '<script type="text/javascript">';
        echo 'window.location.href = "Form.php";';
        echo '</script>';
    }
}
