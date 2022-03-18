<?php
include 'Connection.php';

$id = $_POST['id'];
$FName = $_POST['Fname'];
$LName = $_POST['Lname'];
$Gender = $_POST['gender'];
$date = $_POST['date'];
$Uni = $_POST['university'];
$Sub = $_POST['subject'];
$year = $_POST['year'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pack = $_POST['Package'];
$Lap = $_POST['Laptop'];
$Gproject = $_POST['project'];
$time = $_POST['time'];
$Part = $_POST['Participation'];
$rnd = $_POST['rnd'];

$update_query = "UPDATE student set Fname='$FName',Lname='$LName',gender='$Gender',birth='$date',university='$Uni',subj='$Sub',semster='$year',email='$email',phone='$phone',package='$pack',device='$Lap',Gproject='$Gproject',classtime='$time',project='$Part',rnd='$rnd' WHERE id = $id";
$result = mysqli_query($conn, $update_query);

if ($result) {
    echo '<script type="text/javascript">';
    echo 'alert("Data updated.....");';
    echo 'window.location.href = "Students.php";';
    echo '</script>';
} 
else {
    echo '<script type="text/javascript">';
    echo 'alert("Failed.......");';
    echo 'window.location.href = "Students.php";';
    echo '</script>';
}
